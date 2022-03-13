<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['area','image1']; //保存したいカラム名が複数の場合
}
