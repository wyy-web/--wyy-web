<?php
if(!defined("MVC")){
    die("访问路径不合法");
}
use \libs\smarty;
use \libs\db;
use \libs\code;
class index{
    function int(){
        $smarty=new smarty();
        $smarty->display("admin/login.html");
//        $smarty=new Smarty();
//        $smarty->setTemplateDir(TPL_PATH);
//        $smarty->setCompileDir(COMPILE_PATH);
//
//        $smarty->display("admin/login.html");
    }
    function login(){
        $uname=addslashes($_POST["uname"]);//对用户名进行转义
        $pass=md5(md5($_POST["pass"]));//对密码进行加密
        //接收到传过来的用户名和密码然后与数据库进行匹配

        //后台对用户名和密码进行验证
        if (strlen($uname)<5||empty($pass)){
            echo "用户名或密码不符合规范";
            return;
        }
        //接收验证码从表单,验证接受的验证码是否一致
//        if (!(isset($_COOKIE["code"])&&$_COOKIE["code"]==$_POST["code"])){

        if ($_POST["code"]!==$_SESSION["code"]){
            echo "验证码有误";
            return;
        }


        //连接数据库
//        $lib=new mysqli("localhost","root",null,"wui2006");
//        if($lib->connect_error){
//            die("数据库连接错误");
//        }
//        $lib->query("set names utf8");

        $database=new db();
        $db=$database->db;
        $result=$db->query("select*from mvc_user where uname='$uname'and pass='$pass'");
        if ($result->num_rows<1){
            echo "没有相应的数据，请重新登录";
        }else{
//            setcookie("login","yes",0,"/");//必须返回yes才能进入后台首页
            $_SESSION["login"]="yes";
            $_SESSION["uname"]=$uname;
            header("location:/mvc/index.php/admin/index/first");
        }
        $db->close();//关闭数据库，释放资源
    }

    //退出登录
    function logout(){
        session_destroy();
        header("location:/mvc/index.php/admin");

    }
    function first(){
//        if(isset($_COOKIE["login"])&&$_COOKIE["login"]=="yes"){
        if (isset($_SESSION["login"])&&$_SESSION["login"]="yes"){
            $smarty=new smarty();
            $smarty->assign("uname",$_SESSION["uname"]);
            $smarty->display("admin/index.html");
        }else{
            header("location:/mvc/index.php/admin/");
        }

    }
    function mycode(){
        $code=new code();
        //用cookie的方式记录cookie的值
//       setcookie("code",$code->getStr(),0,"/");
        $code->out();
    }

}