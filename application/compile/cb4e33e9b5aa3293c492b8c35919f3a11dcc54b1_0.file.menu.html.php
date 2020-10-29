<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 05:23:20
  from 'D:\php2006\server\mvc\application\template\index\menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6d7ec866ff75_99563766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb4e33e9b5aa3293c492b8c35919f3a11dcc54b1' => 
    array (
      0 => 'D:\\php2006\\server\\mvc\\application\\template\\index\\menu.html',
      1 => 1601011398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6d7ec866ff75_99563766 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>菜单</title>
   <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/menu.css">
</head>
<body>
    <nav>
        <ul class="cd-primary-nav">
<!--        <li><a href="/mvc/index.php/index/index/int">首页</a></li>-->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cateData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['tpl_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
      </nav>
      <div class="cd-overlay-nav"><span></span></div>
      <div class="cd-overlay-content"><span></span></div>
      <div class="cl"></div>
</body>
</html><?php }
}
