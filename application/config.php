<?php
return array(
    "database" => array(
        "host" => "localhost",
        "username" => "root",
        "password" => "",
        "dbname" => "wui2006",
        "port" => 3306
    ),
    "smarty" => array(
        "templateDir" => TPL_PATH,
        "compileDir" => COMPILE_PATH,
        "cacheDir" => CACHE_PATH,
    ),
    "code"=>array(
        "type"=>"png",
        "width"=>160,
        "height"=>50,
        "codelen"=>5,
        "seed"=>"abcdefhkmnoprstuvwxyzABCDEFGHKLMNOPRSTUVWXYZ345678",
        "fontsize"=>array("min"=>25,"max"=>35),
        "fontangle"=>array("min"=>-15,"max"=>15),
        "linenum"=>array("min"=>2,"max"=>4),
        "linewidth"=>array("min"=>1,"max"=>4),
        "pixnum"=>array("min"=>30,"max"=>50),
        "fontfile"=>"D:\php2006\server\mvc\application\static/font/comicbd.ttf",
    ),
);