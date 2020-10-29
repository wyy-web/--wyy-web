<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 08:24:23
  from 'D:\php2006\server\mvc\application\template\index\gym3.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6da937718294_17804702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa8a0b0c895409670b6f85d47aefe173260eb309' => 
    array (
      0 => 'D:\\php2006\\server\\mvc\\application\\template\\index\\gym3.html',
      1 => 1601021937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6da937718294_17804702 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>分馆环境-太原市小店区居融瑜伽馆</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/gym3.css">
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

<!-- 分馆环境开始 -->
    <div class="gym">
        <div class="gym-Title">场馆介绍</div>
       <div class="gym-title" data-wow-delay="1s">VENUE INTRODUCTION</div>
       <div class="course-more"></div>
   </div>
   <div class="nav_list">
   
    <a  href="/mvc/index.php/index/index/gym1">场馆介绍</a>
     <a  href="/mvc/index.php/index/index/gym2">场馆环境</a>
     <a class="nav_list_hover" href="/mvc/index.php/index/index/gym3">分馆环境</a>
  </div>
<div class="clear"></div>
<div class="abou_cont animated fadeIn" >
  <div class="cont_tile"><div style="text-align:center;">
  <img src="http://sivayogi.cn/uploadfile/image/20170720/20170720183621_26309.jpg" alt="" /><span style="line-height:1.5;"></span><img src="http://sivayogi.cn/uploadfile/image/20170720/20170720183621_63797.jpg" alt="" /><img src="http://sivayogi.cn/uploadfile/image/20170720/20170720183622_42343.jpg" alt="" /><img src="http://sivayogi.cn/uploadfile/image/20170720/20170720183622_59375.jpg" alt="" /><img src="http://sivayogi.cn/uploadfile/image/20170720/20170720183622_91908.jpg" alt="" /><img src="http://sivayogi.cn/uploadfile/image/20170720/20170720183623_42253.jpg" alt="" /><img src="http://sivayogi.cn/uploadfile/image/20170720/20170720183623_39652.jpg" alt="" /><img src="http://sivayogi.cn/uploadfile/image/20170720/20170720183623_19110.jpg" alt="" /><span style="line-height:1.5;"></span> 
</div></div>
</div>
<div class="clear"></div>
<!-- 分馆环境结束 -->
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
