<?php
/**
 * Created by PhpStorm.
 * User: linguanghui
 * Date: 5/16/18
 * Time: 2:19 PM
 */

class autoload
{
    public static $classDir = [
        'App', 'Lib'
    ];

    //类自动加载
    public static function __autoload($className)
    {
        $firstWord = substr($className, 0, stripos( $className,'\\'));

        if (in_array($firstWord, self::$classDir)){

            $file = str_replace('\\', DIRECTORY_SEPARATOR, DIR.'\\'.lcfirst($className)).'.php';
            if (file_exists($file)) {
                require $file;
                return true;

            }else{

                echo sprintf("％s class is not exists",$className);
            }
        }

    }

}

spl_autoload_register(['autoload', '__autoload'],true,true);