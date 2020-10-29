<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-24 16:26:10
  from 'D:\php2006\server\mvc\application\template\admin\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6cc8a29da053_07505590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26c157489ee187ef9e307856f842de4a582eeb63' => 
    array (
      0 => 'D:\\php2006\\server\\mvc\\application\\template\\admin\\show.html',
      1 => 1599817317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6cc8a29da053_07505590 (Smarty_Internal_Template $_smarty_tpl) {
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
<h3><?php echo $_smarty_tpl->tpl_vars['data']->value["ctitle"];?>
</h3>
<p><?php echo $_smarty_tpl->tpl_vars['data']->value["info"];?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['data']->value["cons"];?>
</p>
<img src='<?php echo $_smarty_tpl->tpl_vars['data']->value["imgurl"];?>
' alt="" width="70px;">

</body>
<html>
<?php }
}
