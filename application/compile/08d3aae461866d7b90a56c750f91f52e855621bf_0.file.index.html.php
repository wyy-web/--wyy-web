<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 17:53:55
  from 'D:\php2006\server\mvc\application\template\admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6e2eb3799e03_49457661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08d3aae461866d7b90a56c750f91f52e855621bf' => 
    array (
      0 => 'D:\\php2006\\server\\mvc\\application\\template\\admin\\index.html',
      1 => 1601056433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6e2eb3799e03_49457661 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>欢迎来到居融瑜伽馆后台管理系统</title>
    <link rel="stylesheet" href="\mvc\application\layui\css\layui.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">居融瑜伽馆后台管理系统</div>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="\mvc\application\static\img\头像.png" class="layui-nav-img">
                    用户:<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>

                </a>
            </li>
            <li class="layui-nav-item"><a href="<?php echo ENTRY_ADD;?>
/admin/index/logout" style="color: #666">退出登录</a></li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll" style="background: #e4b9c0">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test" style="background: #e4b9c0">
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;" style="color: #2E2D3C">用户管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="/mvc/index.php/admin/user/index" target="main" style="color: #2E2D3C">查看用户</a></dd>
                        <dd><a href="/mvc/index.php/admin/user/addpage" target="main" style="color: #2E2D3C">添加用户</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;" style="color: #2E2D3C">栏目管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="/mvc/index.php/admin/category/" target="main" style="color:#2E2D3C">查看栏目</a></dd>
                        <dd><a href="/mvc/index.php/admin/category/addpage" target="main" style="color: #2E2D3C">添加栏目</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;" style="color: #2E2D3C">内容管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo ENTRY_ADD;?>
/admin/content/add" target="main" style="color: #2E2D3C">添加内容</a></dd>
                        <dd><a href="<?php echo ENTRY_ADD;?>
/admin/content/showlist" target="main" style="color: #2E2D3C">查看内容</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

    <div class="layui-body" style="padding: 30px";>
        <!-- 内容主体区域 -->
        <iframe src="" frameborder="0" name="main" style="width: 100%;height: 100%"></iframe>
    </div>

    <div class="layui-footer" style="background: #e4b9c0;margin: 0 auto;color: #666">
        <!-- 底部固定区域 -->
        <span>XXX版权信息| XXX制作| 联系电话:XXXXXXXXXX</span>
    </div>
</div>
<?php echo '<script'; ?>
 src="\mvc\application\layui\layui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
