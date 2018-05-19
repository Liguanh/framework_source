<?php
/**
 * Created by PhpStorm.
 * User: linguanghui
 * Date: 5/19/18
 * Time: 11:45 AM
 */

namespace App\Controller;


class ErrorController extends Controller
{

    public function error()
    {
        return self::view()->render('errors/404.html');
    }
}