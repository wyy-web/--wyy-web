<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 17:05:33
  from 'D:\php2006\server\mvc\application\template\admin\reg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6e235d25b416_98083035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8af7fb8c660e6a1b30a2fda5dd04465cd95a7770' => 
    array (
      0 => 'D:\\php2006\\server\\mvc\\application\\template\\admin\\reg.html',
      1 => 1601053531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6e235d25b416_98083035 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>xx后台管理系统</title>
    <style>
        .form-horizontal{
            width:500px;
            height:500px;
            box-shadow: 0 0 10px #333;
            position: absolute;
            left:0;
            right:0;
            top:0;
            bottom: 0;
            margin: auto;
            border-radius: 10px;
            padding: 10px;
        }
        .form-horizontal h1{
            font-size: 18px;
            text-align: center;

        }
    </style>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.validate.js"><?php echo '</script'; ?>
>
<!--    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
reg.js"><?php echo '</script'; ?>
>-->
</head>
<body style="background: url(http://localhost:8080/mvc/application/static/img/15.png
) no-repeat;width: 100%;height:100%;">
<form class="form-horizontal" action="http://localhost:8080/mvc/index.php/admin/reg/adduser" method="post" style="background: #f8dede; height:330px;">
    <!--    Post的所有操作对用户来说都是不可见的-->
    <h1>欢迎来到注册页面</h1>
    <div class="form-group">
        <label for="uname" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="uname" placeholder="用户名" name="uname">
        </div>
    </div>
    <div class="form-group">
        <label for="pass" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="pass" placeholder="密码" name="pass">
            <!--            placeholder规定可描述输入字段预期值的简短的提示信息。-->
        </div>
    </div>

    <div class="form-group">
        <label for="pass1" class="col-sm-2 control-label">再次输入密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="pass1" placeholder="密码" name="pass1">
            <!--            placeholder规定可描述输入字段预期值的简短的提示信息。-->
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">注册</button>
            &nbsp;&nbsp;已有账号？请&nbsp;
            <a href="/mvc/index.php/admin" class="btn btn-default">登录</a>
        </div>

    </div>
</form>

</body>

</html><?php }
}
