<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-23 08:50:24
  from 'D:\php2006\server\mvc\application\template\admin\addpage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6b0c509f1d88_01920132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bd553ba917ee632f109f240619b6a1f30eb058e' => 
    array (
      0 => 'D:\\php2006\\server\\mvc\\application\\template\\admin\\addpage.html',
      1 => 1600832033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6b0c509f1d88_01920132 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/mvc/index.php/admin/category/add" style="margin-top: 30px;margin-bottom: 30px" method="post">
    <input type="text" placeholder="添加一级栏目" name="cname"><br>
    <select name="isshow" id="">
        <option value="1">在导航可见</option>
        <option value="0">在导航不可见</option>
        <select><br>
            <input type="text" name="tpl_name" placeholder="输入对应的模板"><br>
            栏目描述：<textarea name="info" cols="30" rows="10"></textarea>
            <input type="hidden" value="hidden" name="imgurl">
            <div class="upload">

            </div>

            <!--    <input type="file" name="file">-->
            <input type="submit" value="提交">
</form>

<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
upload.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    var uploadObj=new upload();
    uploadObj.createView({
        parent: document.querySelector(".upload")
    })
    uploadObj.up("/mvc/index.php/admin/category/uploadfile",function (e){
        $("input[type=hidden]").val(e[0]);
    });
<?php echo '</script'; ?>
>
</body>
<html>
<?php }
}
