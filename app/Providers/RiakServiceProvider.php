<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Routing\ResponseFactory;

class RiakServiceProvider extends ServiceProvider
{
    /**
     * 服务提供者加是否延迟加载.
     *
     * @var bool
     */
    protected $defer = true;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(ResponseFactory $response)
    {
        view()->composer('view', function () {
            //
        });
        $response->macro('caps', function ($value) {
            //
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Connection::class, function ($app) {
            return new Connection(config('riak'));
        });
    }

    /**
     * 获取由提供者提供的服务.
     *
     * @return array
     */
    public function provides()
    {
        return [Connection::class];
    }
}
