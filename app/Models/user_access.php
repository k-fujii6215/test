<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_access extends Model
{
    use HasFactory;
    protected $fillable = ['name']; //保存したいカラム名が1つの場合
}
