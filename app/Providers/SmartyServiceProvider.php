<?php
/**
 * User: guohongbin@xin.com
 * Date: 2017/5/3
 * Time: 上午11:02
 * Note:
 */
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SmartyServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->singleton('SmartyService', function () {
            return new \App\Services\Tpl();
        });
    }
}