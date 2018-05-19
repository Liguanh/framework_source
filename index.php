<?php
/**
 * Created by PhpStorm.
 * User: linguanghui
 * Date: 5/16/18
 * Time: 2:17 PM
 */

//定义当前的目录绝对路径
define('DIR', dirname(__FILE__));
define('STORAGE_PATH', dirname(__FILE__)."/storages");

require_once __DIR__.'/vendor/autoload.php';

require DIR.'/app/autoload.php';

require DIR.'/app/routes.php';



