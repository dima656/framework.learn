<?php
namespace app\controllers;
/**
 *
 */
class Main extends App
{

    public function indexAction()
    {

       // $this->layout='main';
        $name='Dima';
        $this->set(['name'=>$name,'hi'=>'Hello']);


    }

}