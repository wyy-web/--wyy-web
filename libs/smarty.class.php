<?php
namespace libs;
class smarty{
    function __construct()
    {
        global $config;
        //smarty的配置
        $smarty = new \Smarty();//引用了全局的smarty需要加斜杠
        $templateDir = isset($config["smarty"]["templateDir"]) ? $config["smarty"]["templateDir"] : "template";
        $compileDir = isset($config["smarty"]["compileDir"]) ? $config["smarty"]["compileDir"] : "compile";
        $cacheDir = isset($config["smarty"]["cacheDir"]) ? $config["smarty"]["cacheDir"] : "cache";
        $smarty->setTemplateDir($templateDir);
        $smarty->setCompileDir($compileDir);
        $smarty->setCacheDir($cacheDir);
        $this->smarty = $smarty;
    }
    function assign($attr,$val){
        $this->smarty->assign($attr,$val);
    }
    function  display($file){
        $this->smarty->display($file);
    }
}