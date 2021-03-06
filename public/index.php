<?php

use vendor\core\Router;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  $query=rtrim($_SERVER['QUERY_STRING'],'/');

define('WWW',__DIR__);
define('CORE',dirname(__DIR__) .'vendor/core');
define('ROOT',dirname(__DIR__));
define('APP',dirname(__DIR__) . '/app');
define('LAYOUT','default');

require '../vendor/libs/functions.php';


spl_autoload_register(function ($class) {
    $file=ROOT . '/' . str_replace('\\','/',$class) . '.php';

    if (is_file($file)) {
        require_once $file;
    }

});


Router::add('^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$',['controller'=>'Page']);
Router::add('^page/(?P<alias>[a-z-]+)$',['controller'=>'Page','action'=>'view']);

\vendor\core\Router::add('^$',['controller'=>'Main','action'=>'index']);
\vendor\core\Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

\vendor\core\Router::dispatch($query);

