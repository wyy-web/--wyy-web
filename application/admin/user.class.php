<?php

use \libs\smarty;
use \libs\db;
class user{
    function index(){

        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from mvc_user");
        $user=array();
        while($row=$result->fetch_assoc()){
            $user[]=$row;
        }
        $samrty=new Smarty();
        $samrty->assign('data',$user);
        $samrty->display('admin/user.html');
    }
    function addpage(){
        $samrty=new Smarty();
        $samrty->display('admin/adduser.html');
    }
    function add(){

        $uname=$_POST['uname'];
        $pass=md5(md5($_POST['pass']));

        $database=new db();
        $db=$database->db;
        $db->query("insert into mvc_user(uname,pass) values('$uname','$pass')");
        if($db->affected_rows>0){
            header("location:/mvc/index.php/admin/user/index");
        }else{
            echo "<script>alert('删除失败');location.href='/mvc/index.php/admin/user/addpage'</script>";
        }

    }
    function  edit(){

    }
    function del(){

    }
}

