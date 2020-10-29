<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 08:25:32
  from 'D:\php2006\server\mvc\application\template\index\student.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6da97c7b2d65_36194767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbaa7ab00954b0a485ef4135d06fbe84d36dfd04' => 
    array (
      0 => 'D:\\php2006\\server\\mvc\\application\\template\\index\\student.html',
      1 => 1601021937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6da97c7b2d65_36194767 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>学员见证-太原市小店区居融瑜伽馆</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/student.css">
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

<!--学员见证开始-->
    <div class="student">
        <div class="student-Title" style="padding-top:0">学员见证</div>
        <div class="student-title">STUDENTS WITNESS</div>
        <div class="course-more"><a href=""></a></div>
        <div class="clear"></div>
    </div>
    <div class="nav_list animated bounceInRight">
     
        <a  href="">学员见证</a>
   </div>
<div class="clear"></div>
<div class="news_list">
  <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['StuData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
      <a href="" title="学员见证">
      <li  class="animated mx bounceInLeft" ><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
"  /><div class="news_list_t"><div><?php echo $_smarty_tpl->tpl_vars['v']->value['ctitle'];?>
</div><span><?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
</span><p><?php echo $_smarty_tpl->tpl_vars['v']->value['info'];?>
</p></div></li>
      </a>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
  <div class="clear"></div>
  <div class="page"></div>
</div>
<div class="clear"></div>
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
