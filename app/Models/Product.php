<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Product extends Model
{
    use HasFactory;
    protected $table='product_imgs';
    //資料庫主要索引，通常不可重複
    protected $primaryKey='id';
    //model可以使用黑白名單，去設定可填寫的欄位

    protected $fillable=['img_path','product_id'];//只有name可以被填
    public function Item()
    {
        return $this->hasOne(Item::class,'id','product_id');
    }
}
