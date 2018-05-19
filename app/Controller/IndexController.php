<?php
/**
 * Created by PhpStorm.
 * User: linguanghui
 * Date: 5/16/18
 * Time: 1:28 PM
 */
namespace App\Controller;

use App\Model\Model;
use Klein\Request;
use Klein\Klein;

class IndexController extends Controller
{

    public function index()
    {

        return self::view()->render('index.html');
    }
}