<?php
/**
 * Created by PhpStorm.
 * User: linguanghui
 * Date: 5/17/18
 * Time: 11:58 AM
 */

namespace App\Logic;


class Logic
{

    const
        CODE_SUCCESS = 200, //成功
        CODE_ERROR   = 500; //失败


    /**
     * @desc  统一返回成功数据
     * @param array $data
     * @param string $msg
     * @return array
     */
    public static function callSuccess($data = [], $msg="成功")
    {

        return [
            'status' => true,
            'code'   => self::CODE_SUCCESS,
            'msg'    => $msg,
            'data'   => !empty($data) ? $data : '',
        ];
    }

    /**
     * @desc  统一返回失败的数据
     * @param $msg
     * @param int $code
     * @param array $data
     * @return array
     */
    public static function callError($msg, $code = self::CODE_ERROR, $data = [])
    {
        return  [
            'status' => false,
            'code'   => $code,
            'msg'    => $msg,
            'data'   => !empty($data) ? $data : '',
        ];
    }
}