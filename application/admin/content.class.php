<?php
if(!defined("MVC")){
    die("非法侵入");
}
use \libs\smarty;
use \libs\db;
use \libs\upload;
use libs\pages;
class content
{
    function add()
    {
        $smarty = new smarty();
        $smarty->display("admin/addcon.html");
    }

    function addcon()
    {
        $cid = $_POST["cid"];
        $ctitle = $_POST["ctitle"];
        $cons = $_POST["cons"];
        $imgurl = $_POST["imgurl"];
        $info = $_POST["info"];
        $database = new db();
        $db = $database->db;
        $db->query("insert into mvc_content (ctitle,cons,cid,imgurl,info) values ('$ctitle','$cons','$cid','$imgurl','$info')");
        if ($db->affected_rows > 0) {
            echo "<script>alert('插入成功');location.href='/mvc/index.php/admin/content/add'</script>";
        } else {
            echo "<script>alert('插入失败');location.href='/mvc/index.php/admin/content/add'</script>";
        }

    }


    function showlist()
    {
        $database = new db();
        $db = $database->db;

        $sql = "select * from mvc_content as con left join mvc_category as cat on cat.cid=con.cid where 1=1";
        $cid = isset($_GET["cid"]) && !empty($_GET["cid"]) ? $_GET["cid"] : null;
        if ($cid) {
            $sql.= " and con.cid=" . $_GET["cid"];
        }
        $ctitle = isset($_GET["ctitle"]) && !empty($_GET["ctitle"]) ? $_GET["ctitle"] : null;
        if ($ctitle) {
            $wordkey = $_GET["ctitle"];
            $sql.= " and ctitle like '%" . $wordkey . "%'";
        }
        $order = isset($_GET["order"]) && !empty($_GET["order"]) ? $_GET["order"] : null;
        if ($order) {
            $order = $_GET["order"];
            $sql.= " order by conid " . $order;
        }

        $result=$db->query($sql);
//        print_r($result);
//        exit();
        $pages=new pages();
        $pages->total = $result->num_rows;
        $str=$pages->show();
        $sql.= $pages->limit;
        $result = $db->query($sql);
        $arr = array();
        while ($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        $smarty = new smarty();
        $smarty->assign("data", $arr);
        $smarty->assign("str", $str);
        $smarty->assign("cid", $cid);
        $smarty->assign("ctitle", $ctitle);
        $smarty->assign("order", $order);
        $smarty->display("admin/showlist.html");
    }

    function show()
    {
        $conid = $_GET["conid"];
        $database = new db();
        $db = $database->db;
        $result = $db->query("select * from mvc_content where conid=" . $conid);
        $row = $result->fetch_assoc();
        $smarty = new smarty();
        $smarty->assign("data", $row);
        $smarty->display("admin/show.html");
    }

    function edit()
    {

        $conid = $_GET["conid"];
        $database = new db();
        $db = $database->db;
        $result = $db->query("select * from mvc_content where conid=" . $conid);
        $row = $result->fetch_assoc();
        $smarty = new smarty();
        $smarty->assign("data", $row);
        $smarty->display("admin/editcon.html");
    }

    function editcon()
    {
        $conid = $_POST["conid"];
        $ctitle = $_POST["ctitle"];
        $cons = $_POST["cons"];
        $cid = $_POST["cid"];
        $imgurl = $_POST["imgurl"];
        $info = $_POST["info"];
        $database = new db();
        $db = $database->db;
        $result = $db->query("update mvc_content set  ctitle='$ctitle',cons='$cons',cid='$cid',imgurl='$imgurl',info='$info' where conid=" . $conid);
        if ($db->affected_rows > 0) {
            echo "<script>alert('修改成功');location.href='/mvc/index.php/admin/content/showlist'</script>";
        } else {
            echo "<script>alert('修改失败');location.href='/mvc/index.php/admin/content/edit?conid={$conid}'</script>";
        }

    }

    function del()
    {
        $conid = $_GET["conid"];
        $database = new db();
        $db = $database->db;
        $result = $db->query(" delete from mvc_content where conid=" . $conid);
        if ($db->affected_rows > 0) {
            echo "<script>alert('删除成功');location.href='/mvc/index.php/admin/content/showlist'</script>";
        } else {
            echo "<script>alert('删除失败');location.href='/mvc/index.php/admin/content/showlist'</script>";
        }
    }

    function uploadfile()
    {
        $upload = new upload();
        $upload->up();
        $path = HOST_ADD . "/mvc/" . $upload->fullpath;
        echo "$path";
    }

    function tinyuploadfile()
    {
        $upload = new upload();
        $upload->up();
        $path = HOST_ADD . "/mvc/" . $upload->fullpath;

        echo json_encode(array('location' => $path));
    }
}