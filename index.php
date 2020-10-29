<?php
//开启session
session_start();
header("content-type:text/html;charset=utf8");

//入口文件
//用来记录一个口令
define("MVC",true);

//应用的文件夹名称
define("APP_DIR_NAME","application");

//应用文件夹,当前项目的目录
define("APP_NAME",__DIR__.DIRECTORY_SEPARATOR.APP_DIR_NAME.DIRECTORY_SEPARATOR);

require_once "libs/start.php";
