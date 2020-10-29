<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 08:22:33
  from 'D:\php2006\server\mvc\application\template\index\teach2.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6da8c9b81bd7_44850818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b527b4b8bed4bf2b351ef14478fddce0635f9ec5' => 
    array (
      0 => 'D:\\php2006\\server\\mvc\\application\\template\\index\\teach2.html',
      1 => 1601021937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6da8c9b81bd7_44850818 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>师资团队-太原市小店区居融瑜伽馆</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/teach.css">
</head>
<body>
<!-- 头部区域开始 -->
<div class="header">
    <div class="header-logo"> <img src="<?php echo IMG_ADD;?>
logo.png" alt=""></div>
    <div class="header-menu"> <a href="/mvc/index.php/index/index/menu"><img src="<?php echo IMG_ADD;?>
menu.png" alt=""></a></div>
</div>
<!-- 头部区域结束 -->
<!-- banner开始 -->
<div class="window"></div>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
animate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
wheelob.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    new wheel(".window",{
        imgs:["http://localhost:8080/mvc/application/static/img/banner1.jpg",
            "http://localhost:8080/mvc/application/static/img/banner2.jpg",
            "http://localhost:8080/mvc/application/static/img/banner3.jpg",
            "http://localhost:8080/mvc/application/static/img/banner4.jpg",
            "http://localhost:8080/mvc/application/static/img/banner5.jpg"],
        links:["","",""],
        imgsize:[640,380],
        btncolor:"#fffbc3",
        btnactive:"#c65f00",
        btnpos:["center",""]
    },{
        time:2,
        yxtime:1,
        runfs:"linear"
    })
<?php echo '</script'; ?>
>
<!-- banner结束 -->

<!-- 师资团队开始 -->
    <div class="teach">
        <div class="teach-Title">师资团队</div>
       <div class="teach-title">EXCELLENT COURSE</div>
       <div class="course-more"></a></div>
       <div class="clear"></div>
    </div>
    <div class="nav-list animated bounceInRight">    
        <a  href="">师资团队</a>
   </div>
<div class="clear"></div>
<div class="pro-list">
    <ul>
      
        <li  class="animated mx bounceInLeft">
<a href=""><img src="<?php echo IMG_ADD;?>
卿卿老师.jpg"><span>卿卿老师</span><p>&nbsp;</p></a>
</li>
  <li  style="margin-right:0" class="animated mx bounceInRight">
<a href=""><img src="<?php echo IMG_ADD;?>
马静老师.jpg"><span>马静老师</span><p>&nbsp;</p></a>
</li>
  <li  class="animated mx bounceInLeft">
<a href=""><img src="<?php echo IMG_ADD;?>
路景壹老师.jpg"><span>路景壹老师</span><p>&nbsp;</p></a>
</li>
      </ul>
    <div class="clear"></div>
    <div class="page"><a  href="/mvc/index.php/index/index/teach">&nbsp;上一页</a>
        <a  href="/mvc/index.php/index/index/teach2">1</a>
        <a class="select">2</a>
        <a class="">下一页&nbsp;></a></div>
        </div>
        <div class="clear" style="margin-top:5%;">
        </div>
    <!-- 师资团队结束 -->
<!-- 底部区域开始 -->
<div class="bottom">
    <div class="bottom-top"><a href="/mvc/index.php/index/index/int"><img src="<?php echo IMG_ADD;?>
d1.png" /></a></div>
    <ul>
        <li><a href="tel:18135188903"><img src="<?php echo IMG_ADD;?>
d2.png"></a></li>
        <li><a href="sms:18135188903"><img src="<?php echo IMG_ADD;?>
d3.png"></a></li>
        <li></li>
        <li><a href="/mvc/index.php/index/index/map"><img src="<?php echo IMG_ADD;?>
d4.png"></a></li>
        <li><a href="/mvc/index.php/index/index/share"><img src="<?php echo IMG_ADD;?>
d5.png"></a></li>
    </ul>
    <div class="clear"></div>
    <ul class="bottom-s">
        <li><a href="tel:18135188903">电话咨询</a></li>
        <li><a href="sms:18135188903">短信咨询</a></li>
        <li>&nbsp;</li>
        <li><a href="/mvc/index.php/index/index/map">一键地图</a></li>
        <li><a href="/mvc/index.php/index/index/share">一键分享</a></li>
    </ul>
</div>
<!-- 底部区域结束 -->
</body>
</html><?php }
}
