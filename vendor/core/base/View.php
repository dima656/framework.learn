<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 18.12.16
 * Time: 18:12
 */

namespace vendor\core\base;


class View
{

    public $route=[];
    public $view;
    public $layout;

    public function __construct($route,$layout='',$view='')
    {
        $this->route=$route;
        $this->layout=$layout ?: LAYOUT;
        $this->view=$view;

    }

    public function render() {
        $file_view=APP . "/views/{$this->route['controller']}/{$this->view}.php";
        if (is_file($file_view)) {
            require $file_view;
        } else {
            echo "<p>Not found <b>{$file_view}</b></p>";
        }
    }

}