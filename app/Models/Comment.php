<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    //使用的資料庫名稱
    protected $table='comment';
    //資料庫主要索引，通常不可重複
    protected $primaryKey='id';
    //model可以使用黑白名單，去設定可填寫的欄位

    protected $fillable=['title','author','context'];//只有name可以被填

    // protected $guard=['created_at','updated_at','id'];//除了這三個其他都可以填
}
