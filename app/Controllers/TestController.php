<?php

namespace App\Controllers;

use App\Models\TestModel;

class TestController
{
    public function run(){
        $model =new TestModel; //testmode.phpから参照してインスタンス化
        echo $model->getHello();
    }
}