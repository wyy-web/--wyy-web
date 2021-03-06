<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 14:57:12
  from 'D:\php2006\server\mvc\application\template\admin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6e054819d6b2_16104146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7bd42b2cd0345ce85fec97c75928e581f777759' => 
    array (
      0 => 'D:\\php2006\\server\\mvc\\application\\template\\admin\\login.html',
      1 => 1601045798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6e054819d6b2_16104146 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>居融瑜伽馆后台管理系统</title>
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
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin.js"><?php echo '</script'; ?>
>
</head>
<body style="background: url(http://localhost:8080/mvc/application/static/img/15.png
) no-repeat;width: 100%;height:100%;">
<form class="form-horizontal" action="/mvc/index.php/admin/index/login" method="post" style="background:  #f8dede; height:330px;box-shadow: 0 0 10px #e4b9c0;">
<!--    Post的所有操作对用户来说都是不可见的-->
    <h1>欢迎来到居融瑜伽馆后台管理中心</h1>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="用户名" name="uname">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="密码" name="pass">
<!--            placeholder规定可描述输入字段预期值的简短的提示信息。-->
        </div>
    </div>

    <div class="form-group">
        <label for="code" class="col-sm-2 control-label">验证码</label>
        <div class="col-sm-10">
            <input type="text" placeholder="请输入验证码" name="code" id="code" style="width: 35%">
            <!--            placeholder规定可描述输入字段预期值的简短的提示信息。-->
            <img src="http://localhost:8080/mvc/index.php/admin/index/mycode" alt=""
                 onclick="this.src='http://localhost:8080/mvc/index.php/admin/index/mycode?'+Math.random()" style="cursor: pointer"
            width="120;height:60">
            <span style="font-size: 14px">看不清楚？点击更换</span>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> 记住密码
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">登录</button>
            &nbsp;&nbsp;没有账号？请&nbsp;
            <a href="/mvc/index.php/admin/reg/add" class="btn btn-default">注册</a>
        </div>

    </div>
</form>
</body>
</html><?php }
}
