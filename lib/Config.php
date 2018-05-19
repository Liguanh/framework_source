<?php
/**
 * Created by PhpStorm.
 * User: linguanghui
 * Date: 5/17/18
 * Time: 10:04 AM
 */

namespace Lib;


class Config implements \ArrayAccess{

    protected $path;
    protected $configs = array();
    public function __construct($path){
        $this->path=$path;

    }
    //获取配置值
    function offsetGet($key){
        if (empty($this->configs[$key]))
        {
            $file_path = $this->path.'.php';
            $config = require $file_path;
            $this->configs[$key] = $config[$key];
        }
        return $this->configs[$key];
    }
    //设置配置值
    function offsetSet($key, $value)
    {
        throw new \Exception("cannot write config file.");
    }
    //检查配置是否存在
    function offsetExists($key)
    {
        return isset($this->configs[$key]);
    }
    //删除配置
    function offsetUnset($key)
    {
        unset($this->configs[$key]);
    }

}