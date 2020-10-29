<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 03:26:50
  from 'D:\php2006\server\mvc\application\template\admin\adduser.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6d637a904109_17831107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddfb8ff200af83c24ffccfa98c67b872239f766f' => 
    array (
      0 => 'D:\\php2006\\server\\mvc\\application\\template\\admin\\adduser.html',
      1 => 1601003585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6d637a904109_17831107 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
</head>
<body>
<div class="container">
    <form action="<?php echo ENTRY_ADD;?>
/admin/user/add" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">用户名</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入用户名" name="uname">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">密码</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="请输入密码" name="pass">
        </div>
        <button type="submit" class="btn btn-default">添加</button>
    </form>
</div>
</body>
<html>
<?php }
}
