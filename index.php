<?php
require ('Routes.php');
function __autoload($classname)
{
    //require_once './public/' .$classname.'.php';
    if(file_exists('./public/'.$classname.'.php'))
    {
        require_once ('./public/'.$classname.'.php');
    }
    elseif (file_exists('./models/'.$classname.'.php'))
    {
        require_once ('./models/'.$classname.'.php');
    }

}