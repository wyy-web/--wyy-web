<?php
namespace libs;
//命名空间
//路由的类
if(!defined("MVC")){
    die("访问路径不合法");
}
//index.php/模块/控制/动作
class route{
    //指的是模块
    private static $m;
    //类   控制
    private static $c;
    //方法  动作
    private static $a;

    //获取信息
    private function getInfo(){
        //isset判断变量是否存在
        $path=(isset($_SERVER["PATH_INFO"]))?substr($_SERVER["PATH_INFO"],1):"index/index/int";
        //explode() 函数把字符串打散为数组
        $pathArr=(explode("/",$path));

        self::$m=empty($pathArr[0])?"index":$pathArr[0];
        self::$c=empty($pathArr[1])?"index":$pathArr[1];
        self::$a=empty($pathArr[2])?"int":$pathArr[2];

    }
    function run(){
        $this->getInfo();
        //模块的路径
        $mpath=APP_NAME.self::$m;
        //判断文件是否存在
        if (is_dir($mpath)){
            $curl=$mpath.DIRECTORY_SEPARATOR.self::$c.".class.php";
            if (is_file($curl)){
                include_once $curl;
                if (class_exists(self::$c)){
                    $classname=self::$c;
                    $obj=new $classname();
                    if (method_exists($obj,self::$a)){
                        $method=self::$a;
                        $obj->$method();
                    }else{
                        die("this action not exists");
                    }
                }else{
                    die("this class not exists");
                }
            }else{
                die("this class file not exists");
            }
        }else{
            die("this module not exists");
        }
    }

}
