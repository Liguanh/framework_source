<?php
/**
 * Created by PhpStorm.
 * User: linguanghui
 * Date: 5/17/18
 * Time: 9:28 AM
 */

namespace App\Model;

use Lib\Config;
use Medoo\Medoo;  //数据库的组件

class Model
{

    /**
     * @desc   初始化数据库的配置信息
     * @return Medoo
     */
    public static function DB()
    {
        $config = new Config(DIR."/config/config");

        // Initializet
        $database = new Medoo([
            'database_type' => $config['database']['driver'],
            'database_name' => $config['database']['db_name'],
            'server' => $config['database']['host'],
            'username' => $config['database']['username'],
            'password' => $config['database']['password'],
            'charset' => $config['database']['charset'],
            'port' => $config['database']['port'],
            'logging' => $config['database']['logging'],
        ]);

        return $database;
    }
}