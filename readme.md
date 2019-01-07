## laravel hashid 生成唯一id 
```
composer require vinkla/hashids:~3.3
php artisan vendor:publish --provider="Vinkla\Hashids\HashidsServiceProvider"

Hashids::encode() @parama int array  @return string
Hashids::decode() @parama string @return array 
```



