## laravel hashid 生成唯一id 
```
composer require vinkla/hashids:~3.3
php artisan vendor:publish --provider="Vinkla\Hashids\HashidsServiceProvider"

Hashids::encode() @parama int array  @return string
Hashids::decode() @parama string @return array 
```


## laravel 日志查看工具
```
composer require rap2hpoutre/laravel-log-viewer
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
url domain/logs
发布为可修改  php artisan vendor:publish --provider="Rap2hpoutre\LaravelLogViewer\LaravelLogViewerServiceProvider" --tag="views"
```

## laravel 逆向seed生成器
```
composer require orangehill/iseed --dev
使用 php artisan iseed table_name 即可导出对应的表
--force —— 强制覆盖已有文件；
--max —— 最多导出多少条；
--exclude —— 不包含的字段。
php artisan iseed links --force --max=5 --exclude=created_at,updated_at
```

## laravel cors 跨域
```
composer require barryvdh/laravel-cors
php artisan vendor:publish --provider="Barryvdh\Cors\ServiceProvider"
如果需要全局使用，可以在 app/Http/Kernel.php 的 $middleware 中增加 
'cors' => \Barryvdh\Cors\HandleCors::class, 设置别名方便使用
配置	对应的 Header	说明
supportsCredentials	Access-Control-Allow-Credentials	是否携带 Cookie
allowedOrigins	Access-Control-Allow-Origin	允许的域名
allowedOriginsPatterns	Access-Control-Allow-Origin	通过正则匹配允许的域名
allowedHeaders	Access-Control-Allow-Headers	允许的 Header
allowedMethods	Access-Control-Allow-Methods	允许的 HTTP 方法
exposedHeaders	Access-Control-Expose-Headers	除了 6 个基本的头字段，额外允许的字段
maxAge	Access-Control-Max-Age	预检请求的有效期
```

## laravel 生成二维码
```$xslt
composer require simplesoftwareio/simple-qrcode
```

## laravel 自动生成api文档
```$xslt
composer require brooksyang/laravel-api-helper

```
