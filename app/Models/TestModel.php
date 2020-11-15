<?php

namespace App\Models;

//1ファイル1クラス、クラス名はファイルと同じ名前にする必要がある
class TestModel
{
    private $text = 'hello world';

    public function getHello(){
        return $this->text;
    }
}