laravel5我们可以把某个服务注册个门面，这样，使用的时候就不需要麻烦地use 了。

<strong>创建一个服务的步骤：</strong>

1、在app/Services目录中创建Uxin.php
<pre>&lt;?php
/**
 * Created by PhpStorm.
 * User: guo
 * Date: 2017/4/27
 * Time: 下午2:13
 * Note: 服务提供者
 */
namespace App\Services;

class Uxin {
    public function __call($method, $args)
    {
        //所在空间
        $object = 'App\Http\Server\\' . $method;
        //参数可以为空，默认index() 方法
        if(empty($args)){
            $func = 'index';
        }
        else{
            $func = $args[0];
            array_shift($args);
        }
        //支持二级目录
        if(strpos($func,':') !== false){
            list($class,$func) = explode(':',$func);
            $object .= '\\' . $class;
        }
        //方法是否存在
        if(!method_exists($object,$func)){
            throw new \Exception(
                sprintf("Class '%s' does not have a method '%s'",$object,$func)
            );
        }
        //执行
        return call_user_func_array(
            [new $object(),$func],
            $args
        );
    }
}
</pre>
这个是具体服务的扩展，为什么要这么写到下面再说明；

<strong>2.在app/Providers文件夹中创建</strong>UxinServiceProvider.php
<pre>&lt;?php
/**
 * Created by PhpStorm.
 * User: guo
 * Date: 2017/4/27
 * Time: 下午2:14
 */
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class UxinServiceProvider extends ServiceProvider {

    public function register()
    {
        $this-&gt;app-&gt;singleton('UxinService', function () {
            return new \App\Services\Uxin();
        });
    }
}
</pre>
<strong>3.在app/Facades文件夹中创建</strong>UxinFacade.php
<pre>&lt;?php
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

}</pre>
<h2 id="修改配置文件"><span style="font-size: 12pt;"><strong>4.修改配置文件</strong></span></h2>
下面我们只需要到app.php中挂载上这两个就可以了
<pre>'providers' =&gt; [
    App\Providers\UxinServiceProvider::class,
    ...</pre>
<pre>'aliases' =&gt; [
   'Uxin' =&gt; App\Facades\UxinFacade::class,
    ...
</pre>
上面步骤就创建了一个服务提供者
<pre>\Uxin::Hello();</pre>
这个是一个服务的使用，调用了Uxin.php里面hello方法，而且这个Uxin不用use命名空间，是不是很方便。

有一点要考虑的是：每写一个服务提供者就要在app.php配制文件中加一个配制，当一个项目比较大、开发人员比较多的时候，就要考虑配制文件的把控和约束（不能谁想在配制文件里面搞什么就搞什么吧？想想将来的维护就很蛋疼吧？），这也就是上面Uxin.php为什么要写__call()方法。然后我们在app\Http下面新建Server目录，用于存放我们的微服务。

<span style="font-size: 18pt;"><strong>使用</strong></span>

<strong>1.在Server目录新建Hello.php</strong>
<pre>&lt;?php
/**
 * Created by PhpStorm.
 * User: guo
 * Date: 2017/4/27
 * Time: 下午2:51
 */
namespace App\Http\Server;

class Hello{
    public function hello($name = 'world')
    {
        return $name . ' world!';
    }
}</pre>
<strong>2.新建TestController.php</strong>

//普通用法
<pre>\Uxin::Hello('hello'); //return: hello world!</pre>
//<strong>Server</strong>支持二级目录

在app\Http\Server下创建v2目录，并在此目录新建Test.php
<pre>&lt;?php</pre>
<pre>namespace App\Http\Server\V2;

class Test
{
    public function demo($arg0,$arg1)
    {
        return __CLASS__ .'-&gt;'. __FUNCTION__ .'():'.$arg0 . $arg1;
    }
}</pre>
<pre><strong>TestController</strong>:
\Uxin::V2("Test:demo",'this ','demo');//return: App\Http\Server\V2\Test-&gt;demo():this demo</pre>
<strong>PS:</strong>
<pre>
服务提供者   微服务名 方法     参数（多个参数用','分隔）
\Uxin  ::   V2     ("Test",'this ','demo');
</pre>
<pre>
服务提供者   目录名 微服务名：方法  参数（多个参数用','分隔）
\Uxin ::    V2    ("Test:demo", 'this ','demo');
</pre>
