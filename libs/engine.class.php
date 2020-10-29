<?php
class engine{
    //1.第一步获取原始数据
    //2.编译
    //3.显示到页面当中
    //4.分配变量

    //模板文件
    private $templateDir="template";
    //编译文件
    private $compileDir="compile";
    //缓存文件
    private $cacheDir="cache";
    //定义是否开启缓冲  默认不开启
    public $cache=false;

    private $arr=array();

    //1.第一步获取原始数据
    private function getDate($file){
        $destfile=$this->templateDir.$file;
        //判断该文件是否存在
        if (is_file($destfile)){
            return file_get_contents($destfile);
        }else{
            die("this template not found!");
        }
    }

    //编写一个方法来修改模板路径、编译路径、缓存路径
    public function setTemplateDir($path){
        $this->templateDir=$path;
    }
    public function setCompileDir($path){
        $this->compileDir=$path;
    }
    public function setCacheDir($path){
        $this->cacheDir=$path;
    }

    //2.编译
    private function compile($file){
        //获取数据
        $con=$this->getDate($file);
        //正则表达式进行翻译
        $reg='/\{(\$[a-zA-Z][^\}]*)\}/';//解析变量

        $one= preg_replace_callback($reg,function ($val){
            return '<?php echo'.$val[1].'?>';
        },$con);//变量解析完了

        //解析foreach
        $reg1='/\{foreach([^\}]*)\}/';
        $two= preg_replace_callback($reg1,function ($val){
            return '<?php foreach('.$val[1].'){?>';
        },$one);//foreach的开始 解析完

        //解析{foreach}
        $reg2='/\{\/foreach\}/';
        $three= preg_replace_callback($reg2,function ($val){
            return '<?php }?>';
        },$two);//foreach的结束 解析完
    }

    //3.显示到页面当中
    function display($file)
    {
        //输出文件名字
        $outFileName = $this->compileDir . basename($file, ".html") . ".php";
        //定义输入文件
        $inFileName = $this->templateDir . $file;
        //定义缓冲文件
        $cacheFileName = $this->cacheDir . basename($file, ".html") . ".htm";

        //决定是否缓存文件
        if ($this->cache && is_file($cacheFileName)&&filemtime($cacheFileName)>filemtime($inFileName)){
            include_once $cacheFileName;
        } else {

        //判断输出文件是否存在  并且判断输出文件修改的时间是否大于输入文件生成的时间
        if (is_file($outFileName) && filemtime($outFileName) > fileatime($inFileName)) {
            foreach ($this->arr as $k => $v) {
                $$k = $v;
            }
            include_once $outFileName;
        } else {
            $result = $this->compile($file);

            file_put_contents($outFileName, $result);

            foreach ($this->arr as $k => $v) {
                $$k = $v;
            }
            //判断是否开启了缓存
            if ($this->cache){
                ob_start();
                include_once $outFileName;
                $con=ob_get_contents();//获得缓存区的内容
                file_put_contents($cacheFileName,$con);//将缓存区文件放入一个文件中
                ob_end_flush();//结束缓存区
            }else{
                include_once $outFileName;
            }

        }
    }

    }

    //4.分配变量
    function assign($attr,$val){
        $this->arr[$attr]=$val;
    }
}
