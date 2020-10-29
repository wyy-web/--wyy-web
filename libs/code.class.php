<?php
namespace libs;
class code{
    public $type;
    public $width;
    public $height;
    public $codelen;
    public $seed;
    public $fontsize;
    public $fontangle;
    public $linenum;
    public $linewidth;
    public $pixnum;
    public $fontfile;
    function __construct(){
        global $config;
        //1.指定输出的格式
        $this->type=$config["code"]["type"]?$config["code"]["type"]:"png";
        //指定画布宽度和高度
        $this->width=$config["code"]["width"]?$config["code"]["width"]:160;
        $this->height=$config["code"]["height"]?$config["code"]["height"]:50;
        //验证码个数
        $this->codelen=$config["code"]["codelen"]?$config["code"]["codelen"]:5;
        //验证码里面的一些字符
        $this->seed=$config["code"]["seed"]?$config["code"]["seed"]:"abcdefhkmnoprstuvwxyzABCDEFGHKLMNOPRSTUVWXYZ345678";
        //验证码字符的大小
        $this->fontsize=$config["code"]["fontsize"]?$config["code"]["fontsize"]:array("min"=>25,"max"=>35);
        //验证码的倾斜角度
        $this->fontangle=$config["code"]["fontangle"]?$config["code"]["fontangle"]:array("min"=>-15,"max"=>15);
        //验证码线条的个数
        $this->linenum=$config["code"]["linenum"]?$config["code"]["linenum"]:array("min"=>2,"max"=>4);
        //验证码线的粗细
        $this->linewidth=$config["code"]["linewidth"]?$config["code"]["linewidth"]:array("min"=>1,"max"=>4);
        //画布中像素的个数
        $this->pixnum=$config["code"]["pixnum"]?$config["code"]["pixnum"]:array("min"=>30,"max"=>50);
        //验证码所用的字体
        $this->fontfile=$config["code"]["fontfile"]?
            $config["code"]["fontfile"]:"D:\php2006\server\mvc\application\static/font/comicbd.ttf";

    }
    //    2.创建画布
    function createcanvas(){
        $this->image=imagecreatetruecolor($this->width,$this->height);
        //添加背景颜色
        imagefill($this->image,0,0,$this->setcolor());
    }
    //画布颜色随机分配
    private function setcolor($type="background"){
        //设计随机值随机颜色
        $r=$type=="background"?mt_rand(20,125):mt_rand(126,255);
        $g=$type=="background"?mt_rand(20,125):mt_rand(126,255);
        $b=$type=="background"?mt_rand(20,125):mt_rand(126,255);
        return imagecolorallocate($this->image,$r,$g,$b);
    }
    //获取随机种子
    private function gettext(){
        $str="";
        for($i=0;$i<$this->codelen;$i++){
            $str.=$this->seed[mt_rand(0,strlen($this->seed)-1)];
        }
        return $str;
    }
    //获取cookie的字符串
//    private function getStr(){
//        return strtolower($this->getText());
//    }
    //获取随机文字
    private function settext()
    {
        $str = $this->gettext();
        //将验证码存到对象中 不区分大小写
        $this->str=strtolower($str);
        //将字符一个一个放入
        for ($i = 0; $i < $this->codelen; $i++) {
            $size=mt_rand($this->fontsize["min"],$this->fontsize["max"]);
            $angle=mt_rand($this->fontangle["min"],$this->fontangle["max"]);
            $space=$this->width/($this->codelen*2+1);
            //记录文字四个角的大小位置
            $box=imagettfbbox($size,$angle,$this->fontfile,$str[$i]);
            //将文字放在画布中
            imagettftext($this->image, $size, $angle, mt_rand(max($space*($i*2-1),0)+5,
                $space*($i*2+1)-5), ($box[0]-$box[7])+mt_rand(0,$this->height-($box[0]-$box[7])),
                $this->setcolor("a"), "D:\php2006\server\mvc\application\static/font/comicbd.ttf",
                $str[$i]);
        }
    }
    private function setline()
    {
        $num = mt_rand($this->linenum["min"], $this->linenum["max"]);
        for ($i = 0; $i < $num; $i++) {
            $x1 = mt_rand(0, $this->width / 2);
            $x2 = mt_rand($this->width / 2, $this->width);
            $y1 = mt_rand(0, $this->height);
            $y2 = mt_rand(0, $this->height);
            imagesetthickness($this->image, mt_rand($this->linewidth["min"], $this->linewidth["max"]));
            imageline($this->image, $x1, $y1, $x2, $y2,$this->setcolor("a"));
        }
    }
    private function setpix(){
        $num=mt_rand($this->pixnum["min"],$this->pixnum["max"]);
        for($i=0;$i<$num;$i++){
            imagesetpixel($this->image,mt_rand(0,$this->width),mt_rand(0,$this->height),$this->setcolor());
        }
    }
    function out(){

        header("content-type:image/".$this->type);
        //1.创建画布
        $this->createcanvas();
        //2.写文字
        $this->settext();
        //3.线条干扰
        $this->setline();
        //4.像素点干扰
        $this->setpix();
        $outtype="image".$this->type;
        //写入cookie
        //cookie("code",$this->str,"0","/");
        //5.写入cookie   通过session存在服务器
        $_SESSION["code"]=$this->str;
        $outtype($this->image);
        imagedestroy($this->image);

    }
}
//$code=new code();
//$code->out();
//<?php
//namespace libs;
//class code{
//    //1.指定输出的格式
//    public $type="png";
//    //指定画布宽度和高度
//    public $width=160;
//    public $height=50;
//    //验证码个数
//    public $codeLen=5;
//    public $seed="abcdefhjkmnprstuvwxyzABCDEFHJKMNPQRSTUVWXYZ345678";
//    public $fontSize=array("min"=>25,"max"=>35);
//    public $fontAngle=array("min"=>15,"max"=>15);
//    public $lineNum=array("min"=>2,"max"=>4);
//    public $lineWidth=array("min"=>1,"max"=>4);
//    public $pixNum=array("min"=>30,"max"=>50);
////    2.创建画布
//    private function creatCanvas(){
//        $this->image=imagecreatetruecolor($this->width,$this->height);
//        //添加背景颜色
//        imagefill($this->image,0,0,$this->setColor());
//    }
//    //画布颜色随机分配
//    private function setColor($type="background"){
//        //设计随机值随机颜色
//        $r=$type=="background"?mt_rand(20,140):mt_rand(150,200);
//        $g=$type=="background"?mt_rand(20,140):mt_rand(150,200);
//        $b=$type=="background"?mt_rand(20,140):mt_rand(150,200);
//        return imagecolorallocate($this->image,$r,$b,$g);
//    }
//    //获取随机种子
//    private function getText(){
//        $str="";
//        for ($i=0;$i<$this->codeLen;$i++){
//            $str.=$this->seed[mt_rand(0,strlen($this->seed)-1)];
//        }
//        return $str;
//    }
//
//    //获取cookie的字符串
////    private function getStr(){
////        return strtolower($this->getText());
////    }
//    //获取随机文字
//    private function setText(){
//        $str=$this->getText();
//
//        //将验证码存到对象中 不区分大小写
//        $this->str=strtolower($str);
//        //将字符一个一个放入
//        for ($i=0;$i<$this->codeLen;$i++){
//            $size=mt_rand($this->fontSize["min"],$this->fontSize["max"]);
//            $angle=mt_rand($this->fontAngle["min"],$this->fontAngle["max"]);
//            $space=$this->width/($this->codeLen*2+1);
//            //记录文字四个角的大小位置
//            $box=imagettfbbox($size,$angle,"D:\php2006\server\mvc\application\static/font/comicbd.ttf",
//                $str[$i]);
//        //将文字放在画布中
//        imagettftext($this->image,$size,$angle,mt_rand(max(($i*2-1)*$space,0)+5,($i*2+1)*$space-5),
//            ($box[0]-$box[7])+mt_rand(0,$this->height-($box[0]-$box[7])), $this->setColor("a"),"D:\php2006\server\mvc\application\static/font/comicbd.ttf",
//            $str[$i]);
//        }
//
//    }
//    private function setPix(){
//        $num=mt_rand($this->pixNum["min"],$this->pixNum["max"]);
//        for ($i=0;$i<$num;$i++){
//            imagesetpixel($this->image,mt_rand(0,$this->width),mt_rand(0,$this->height),$this->setColor("a"));
//        }
//    }
//    private function setLine(){
//        $num=mt_rand($this->lineNum["min"],$this->lineNum["max"]);
//        for($i=0;$i<$num;$i++){
//            $x1=mt_rand(0,$this->width/2);
//            $x2=mt_rand($this->width/2,$this->width);
//            $y1=mt_rand(0,$this->height/2);
//            $y2=mt_rand(0,$this->height/2);
//            imageline($this->image,$x1,$x2,$y1,$y2,$this->setColor("a"));
//        }
//    }
//
//    function out(){
//        header("content-type:image/".$this->type);
//
//        //1.创建画布
//        $this->creatCanvas();
//        //2.写文字
//        $this->setText();
//        //3.线条干扰
//        $this->setLine();
//        //4.像素点干扰
//        $this->setPix();
//        //5.写入cookie   通过session存在服务器
////        setcookie("code",$this->str,0,"/");
//        $_SESSION["code"]=$this->str;
//
////
//        $outtype="image".$this->type;
//        $outtype($this->image);
//        imagedestroy($this->image);
//    }
//}
//$code=new code();
//$code->out();





