## 服务提供者
-- <a href="http://www.guodev.cn/archives/365" target="_blank">http://www.guodev.cn/archives/365</a>
## 用法
```php
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

```
## 例子
app/Http/Controllers/Test/TestController.php

## 文档
- (<a target="_blank" href="https://github.com/devghb/Smarty/tree/master/doc">https://github.com/devghb/Smarty/tree/master/doc</a>).
