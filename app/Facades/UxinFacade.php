<?php
/**
 * Created by PhpStorm.
 * User: guo
 * Date: 2017/4/27
 * Time: 下午2:15
 */
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class UxinFacade extends Facade {

    protected static function getFacadeAccessor() { return 'UxinService'; }

}