# picture_application
Laravelを利用した写真アプリを作る

# usage
### docker環境の立ち上げ
```
$ cd picture_application
$ docker-compose up -d
```
### composer install & migrate実行
```
$ docker-compose exec php sh
$ composer install
$ php artisan migrate
```

# 環境
- phpfpm
- nginx
- mysql
- redis
