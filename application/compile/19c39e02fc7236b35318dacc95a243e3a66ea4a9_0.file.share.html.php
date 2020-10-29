<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 08:23:40
  from 'D:\php2006\server\mvc\application\template\index\share.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6da90c271411_45964126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19c39e02fc7236b35318dacc95a243e3a66ea4a9' => 
    array (
      0 => 'D:\\php2006\\server\\mvc\\application\\template\\index\\share.html',
      1 => 1601021937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6da90c271411_45964126 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>分享-太原Siva瑜伽生活馆</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/share.css">
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

<div class="share">
        <div class="share-Title">一键分享</div>
        <div class="share-title" data-wow-delay="1s">KEY SHARE</div>
        <div class="course-more"></div>
        <div class="clear"></div>
    </div>
    <div class="abou_cont">

        <a>一键分享</a>

        <div class="clear"></div>
        <div class="fx">
            <div id="bdshare" class="bdsharebuttonbox" style=" background:#fff; padding-top:15px" data-tag="share_1">
                <a class="bds_mshare" data-cmd="mshare" style="font-size: 12px;">百度分享</a>
                <a class="bds_qzone" data-cmd="qzone" style="font-size: 12px;">QQ空间</a>
                <a class="bds_tsina" data-cmd="tsina" style="font-size: 12px;">新浪微博</a>
                <a class="bds_baidu" data-cmd="baidu" style="font-size: 12px;">百度贴吧</a>
                <a class="bds_renren" data-cmd="renren" style="font-size: 12px;">人人网</a>
                <a class="bds_tqq" data-cmd="tqq" style="font-size: 12px;">腾讯微博</a>
                <a class="bds_more" data-cmd="more" style="font-size: 12px;">更多</a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
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
