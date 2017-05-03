<?php
/**
 * User: guohongbin@xin.com
 * Date: 2017/5/3
 * Time: 上午11:01
 * Note:
 */
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class SmartyFacade extends Facade {

    protected static function getFacadeAccessor() { return 'SmartyService'; }

}