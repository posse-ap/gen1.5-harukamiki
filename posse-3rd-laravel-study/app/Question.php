<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['area','image1','choice1','choice2','choice3']; //保存したいカラム名が複数の場合
}
