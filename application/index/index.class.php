<?php

if(!defined("MVC")){
    die("访问路径不合法");
}
use \libs\smarty;
use \libs\db;
class index{
    function int(){
        $smarty=new smarty();
        $database=new db();
        $db=$database->db;

        //更多资讯
        $result=$db->query("select * from mvc_content where cid=43");
        $arr=[];
        while ( $row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $smarty->assign("InfoData",$arr);

        //课堂案例
        $result1=$db->query("select * from mvc_content where cid=44");
        $arr1=[];
        while ( $row1=$result1->fetch_assoc()){
            $arr1[]=$row1;
        }
        $smarty->assign("CaseData",$arr1);

        //精品课程
        $result2=$db->query("select * from mvc_content where cid=41");
        $arr2=[];
        while ( $row2=$result2->fetch_assoc()){
            $arr2[]=$row2;
        }
        $smarty->assign("CourseData",$arr2);

        //师资团队
        $result3=$db->query("select * from mvc_content where cid=42");
        $arr3=[];
        while ( $row3=$result3->fetch_assoc()){
            $arr3[]=$row3;
        }
        $smarty->assign("TeachData",$arr3);

        //学员见证
        $result4=$db->query("select * from mvc_content where cid=37");
        $arr4=[];
        while ( $row4=$result4->fetch_assoc()){
            $arr4[]=$row4;
        }
        $smarty->assign("StudentData",$arr4);

        $smarty->display("index/index.html");
    }
    //菜单
    function menu(){
        $smarty=new smarty();
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from mvc_category where pid=0");
        $arr=[];
        while ( $row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $smarty->assign("cateData",$arr);
        $smarty->display("index/menu.html");
    }
    //关于我们
    function contact(){
        $smarty=new smarty();
        $smarty->display("index/about.html");
    }
    //学员结课
    function end(){
        $smarty=new smarty();
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from mvc_content where cid=33");
        $arr=[];
        while ( $row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $smarty->assign("StuData",$arr);
        $smarty->display("index/student.html");
    }
    //课堂案例
    function anli(){
        $smarty=new smarty();
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from mvc_content where cid=32");
        $arr=[];
        while ( $row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $smarty->assign("anliData",$arr);
        $smarty->display("index/case.html");
    }
    function case2(){
        $smarty=new smarty();
        $smarty->display("index/case2.html");
    }
    function case3(){
        $smarty=new smarty();
        $smarty->display("index/case3.html");
    }
    //师资团队
    //师资团队
    function teach(){
        $smarty=new smarty();
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from mvc_content where cid=28");
        $arr=[];
        while ( $row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $smarty->assign("teachData",$arr);
        $smarty->display("index/teach.html");
    }
    function teach2(){
        $smarty=new smarty();
        $smarty->display("index/teach2.html");
    }
    //精品课程
    function course(){
        $smarty=new smarty();
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from mvc_content where cid=27");
        $arr=[];
        while ( $row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $smarty->assign("courseData",$arr);
        $smarty->display("index/course.html");
    }
    //场馆介绍
    function gym(){
        $smarty=new smarty();
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from mvc_content where cid=26");
        $arr=[];
        while ( $row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $smarty->assign("gymData",$arr);
        $smarty->display("index/gym1.html");
    }
    function gym2(){
        $smarty=new smarty();
        $smarty->display("index/gym2.html");
    }
    function gym3(){
        $smarty=new smarty();
        $smarty->display("index/gym3.html");
    }
    function map(){
        $smarty=new smarty();
        $smarty->display("index/map.html");
    }
    function share(){
        $smarty=new smarty();
        $smarty->display("index/share.html");
    }
    function news(){
        $smarty=new smarty();
        $smarty->display("index/news.html");
    }
    function news2(){
        $smarty=new smarty();
        $smarty->display("index/news2.html");
    }

}
//        $smarty=new Smarty();
////        $en=new engine();
////        $en->setTemplateDir(TPL_PATH);
////        $en->setCompileDir(COMPILE_PATH);
////        $en->setCacheDir(CACHE_PATH);
////        $en->cache=true;
////        $en->display("login.html");
//        $smarty->setTemplateDir(TPL_PATH);
//        $smarty->setCompileDir(COMPILE_PATH);
//
//
//        //php操作数据库  用对象的方式去访问
//        //1.连接上数据库
//        $lib=@new mysqli("localhost","root","null","wui2006","3306");
//        //不希望用户直接看到数据库连接失败的具体信息@是屏蔽的意思
//        if (mysqli_connect_errno()){
//            die("数据库连接错误");
//        }
//
//        //2.对数据库进行操作   query这个方法里写SQL语句
//        $lib->query("set names utf8");//告诉数据库以utf8的编码方式查询数据库
//        //得到结果集,结果集是一个方法->对象，获取具体的数据
//        $result=$lib->query("select * from demo");
//        if ($lib->affected_rows>0){
//            echo "操作成功";
//        }//操作以后对行数的影响
//
//        //3.如何将数据从结果里面取出来
//        //取出关联数组
////        $result->fetch_assoc();
//        //取出索引数组
////        $result->fetch_row();
//        //既有关联数组又有索引数组
////        $result->fetch_array();
//
//        //var_dump($result->fetch_assoc());//像游标一样一条一条去取，取出后接着去取下一条
//        $data=array();
//        while($row=$result->fetch_assoc()){
//            $data[]=($row);//遍历去查数据，直到为null,放入数组中
//        }
//
//        $smarty->assign("data",$data);
//        $smarty->display("login.html");
