<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 18.12.16
 * Time: 0:35
 */

namespace app\controllers;



class Page extends App
{
    public function viewAction()
    {
        debug($this->route);
        debug($_GET);
        echo 'Page::view';
    }
}