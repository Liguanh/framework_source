<?php
/**
 * Created by PhpStorm.
 * User: linguanghui
 * Date: 5/16/18
 * Time: 6:41 PM
 */

namespace App\Controller;


class Controller
{
    /**
     * @var null
     */
    public $view = null;

    /**
     * @desc 自定义模版的路径
     * @var string
     */
    protected  static $templateDir = DIR."/template";

    /**
     * @desc   自动加载模版的信息
     * @return \Twig_Environment
     */
    public static function view()
    {
        $loader = new \Twig_Loader_Filesystem(self::$templateDir);

        $view = new \Twig_Environment($loader, array(
           #'cache' => STORAGE_PATH.'/cache',
        ));

        return $view;
    }

}