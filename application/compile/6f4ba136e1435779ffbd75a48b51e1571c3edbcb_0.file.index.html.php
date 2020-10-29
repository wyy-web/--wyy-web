<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 08:25:28
  from 'D:\php2006\server\mvc\application\template\index\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6da9789b30f4_35626809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f4ba136e1435779ffbd75a48b51e1571c3edbcb' => 
    array (
      0 => 'D:\\php2006\\server\\mvc\\application\\template\\index\\index.html',
      1 => 1601022321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6da9789b30f4_35626809 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>网站首页(仿写，用来参考和学习)-太原市小店区居融瑜伽馆</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/index.css">
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
<!-- 精品课程开始 -->
<div class="course">
    <div class="course-Title">精品课程</div>
    <div class="course-title">EXCELLENT COURSE</div>
    <div class="course-more"><a href="/mvc/index.php/index/index/course">1</a></div>
    <div class="course-list">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CourseData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <li  style=" margin-left:7%;float:left; " class="animated mx bounceInLeft" data-wow-duration="2s"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="" /></a></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </ul>
    </div>
</div>
<!-- 精品课程结束 -->
<!-- 师资团队开始 -->
<div class="teach">
    <div class="teach-Title">师资团队</div>
    <div class="teach-title">EXCELLENT COURSE</div>
    <div class="course-more"><a href="/mvc/index.php/index/index/teach">2</a></div>
    <div class="teach-list">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TeachData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <li class="animated bounceInRight mx enlarge" data-wow-duration="3s" data-wow-delay="0s"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" /><br><span><?php echo $_smarty_tpl->tpl_vars['v']->value['info'];?>
</span></a></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </ul>
    </div>
    <div class="clear"></div>
    <div class="teach-more"><a href="/mvc/index.php/index/index/teach">更多名师介绍</a></div>
</div>
<!-- 师资团队结束 -->
<!-- 圆开始 -->
<div class="yuan">
    <div class="yuan-box">
        <div class="left-btn"><img src=<?php echo IMG_ADD;?>
left.png alt=""></div>
        <div class="center"><img src="<?php echo IMG_ADD;?>
bj1.png" alt=""></div>
        <div class="right-btn"><img src="<?php echo IMG_ADD;?>
right.png" alt=""></div>
    </div>
</div>
<!-- 圆结束 -->
<!-- 新闻资讯开始 -->
<div class="news">
    <div class="news-Title">更多资讯</div>
    <div class="news-title">LATEST INFORMATION</div>
    <div class="course-more"><a href="/mvc/index.php/index/index/news">3</a></div>
    <div class="news-list">
        <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['InfoData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <li class="animated bounceInRight mx " data-wow-duration="2.5s" >
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
"/>
                    <p><?php echo $_smarty_tpl->tpl_vars['v']->value['info'];?>
<br><span></span></p>
                    <div class="clear"></div>
                </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <div class="news-list-more"><a href="/mvc/index.php/index/index/news">更多资讯内容 →</a></div>
    </div>
</div>
<div class="clear"></div>
</div>
<!-- 新闻资讯结束 -->
<!-- 课堂案例开始 -->
<div class="case">
    <div class="case-Title">课堂案例</div>
    <div class="case-title">CLASSROOM CASE</div>
    <div class="course-more"><a href="/mvc/index.php/index/index/anli">4</a></div>
    <div class="case-list">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CaseData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <li  class="animated zoomInLeft mx enlarge"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" /><br><span><?php echo $_smarty_tpl->tpl_vars['v']->value['info'];?>
</span></a></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </ul>
    </div>
</div>
<div class="clear"></div>
<!-- 课堂案例结束 -->
<!--学员见证开始-->
<div class="student">
    <div class="student-Title" style="padding-top:0">学员见证</div>
    <div class="student-title">STUDENTS WITNESS</div>
    <div class="course-more"><a href="/mvc/index.php/index/index/end">5</a></div>
    <div class="student-list">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['StudentData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <li class="animated bounceInLeft mx">
                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
"/>
                <p><?php echo $_smarty_tpl->tpl_vars['v']->value['info'];?>
</p>
                <a href="/mvc/index.php/index/index/end">查看详情+</a>
            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </ul>
    </div>
</div>
<div class="clear"></div>
</div>
<!-- 学员见证结束 -->
<!-- 场馆介绍开始 -->
<div class="gym">
    <div class="gym-Title">场馆介绍</div>
    <div class="gym-title">VENUE INTRODUCTION</div>
    <div class="course-more"><a href="/mvc/index.php/index/index/gym">6</a></div>
    <div class="gym-cont">
        <div class="gym-cont-left animated mx bounceInLeft"><img src="<?php echo IMG_ADD;?>
gym.jpg"></div>
        <div class="gym-cont-right animated mx bounceInRight"><p style="text-indent:2em;">
            <span style="font-family:Verdana, Geneva, Tahoma"></span><a href="/mvc/index.php/index/index/gym">查看详情></a></div>
    </div>
</div>
<!-- 场馆介绍结束 -->
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
