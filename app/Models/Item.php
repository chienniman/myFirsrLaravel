<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table='items';
    //資料庫主要索引，通常不可重複
    protected $primaryKey='id';
    //model可以使用黑白名單，去設定可填寫的欄位
    protected $fillable=['items_img_path'];
    // protected $fillable=['title','author','context'];//只有name可以被填
}
