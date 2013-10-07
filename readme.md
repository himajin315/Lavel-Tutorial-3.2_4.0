# Laravel install

PHP 5.3.3
Laravel v4.0.7

```
$ curl -s http://getcomposer.org/installer | php
$ php composer.phar install
$ php composer.phar create-project laravel/laravel laravel-tutorial --prefer-dist
```

### Error
```
$ php artisan migrate:reset 
PHP Fatal error:  Class 'AddAuthors' not found in /src/cakephp/laravel-tutorial/vendor/laravel/framework/src/Illuminate/Database/Migrations/Migrator.php on line 301
{"error":{"type":"Symfony\\Component\\Debug\\Exception\\FatalErrorException","message":"Class 'AddAuthors' not found","file":"\/src\/cakephp\/laravel-tutorial\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Migrations\/Migrator.php","line":301}}
````
### Solution
[Laravel 4 migrate rollback problems](http://stackoverflow.com/questions/17174463/laravel-4-migrate-rollback-problems?answertab=oldest#tab-top)

```
"autoload": {
    "classmap": [
        "app/controllers",
        "app/models",
        "app/database/migrations"
    ]
},
```
```
$ php composer.phar composer dump-autoload
```



## Laravel PHP Framework

[![Latest Stable Version](https://poser.pugx.org/laravel/framework/version.png)](https://packagist.org/packages/laravel/framework) [![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.png)](https://packagist.org/packages/laravel/framework) [![Build Status](https://travis-ci.org/laravel/framework.png)](https://travis-ci.org/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
