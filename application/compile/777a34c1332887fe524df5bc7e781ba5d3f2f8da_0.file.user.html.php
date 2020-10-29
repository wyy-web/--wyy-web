<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 03:29:08
  from 'D:\php2006\server\mvc\application\template\admin\user.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6d640472cb00_91837882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '777a34c1332887fe524df5bc7e781ba5d3f2f8da' => 
    array (
      0 => 'D:\\php2006\\server\\mvc\\application\\template\\admin\\user.html',
      1 => 1601003950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6d640472cb00_91837882 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
</head>
<body>
<div class="container" style="margin-top: 50px">
    <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    <table class="table-bordered table">
        <tr><th>id</th><th>用户名</th><th>密码</th></tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['pass'];?>
</td></tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
    <?php } else { ?>
    <table>
        <tr><td>没有数据</td></tr>
    </table>
    <?php }?>
</div>
</body>
</html>
<?php }
}
