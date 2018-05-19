<?php
/**
 * Created by PhpStorm.
 * User: linguanghui
 * Date: 5/19/18
 * Time: 9:24 AM
 */

namespace Lib;


class ToolArray
{

    /**
     * @param $obj
     * @return array
     * @desc 对象转换数组
     */
    public static function objectToArray($e){

        $e=(array)$e;

        foreach($e as $k=>$v){

            if( gettype($v) =='object' || gettype($v) == 'array' ){

                $e[$k] = (array)self::objectToArray($v);

            }

        }

        return $e;
    }
}