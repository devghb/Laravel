<?php
/**
 * Created by PhpStorm.
 * User: guo
 * Date: 2017/4/25
 * Time: 上午11:46
 */
namespace App\Http\Controllers\Test;

use App\Http\Requests\Request;
use Illuminate\Routing\Controller as BaseController;
use League\Flysystem\Exception;
use Validator;

//use Illuminate\Support\Facades\Cache;

error_reporting(E_ALL);
ini_set('display_errors', '1');
class TestController extends BaseController
{
    function tpl()
    {
        echo '写法一';
        \Tpl::view('test.index',array(
            'name'  => '小明',
            'bio'   => array(
                0 => array('attr'=>'三年级'),
                1 => array('attr'=> '英语、数学、语文'),
            ),
            'header'=>'header',
        ));
        echo "<br><br>",'写法二';
        \Tpl::assign('name','小明');
        \Tpl::assign('bio',array(
            0 => array('attr'=>'三年级'),
            1 => array('attr'=> '英语、数学、语文'),
        ));
        \Tpl::assign('header','header');
        \Tpl::display('test.index');
    }
}