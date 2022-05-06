<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
class ShoppingCart extends Model
{
    use HasFactory;
    protected $table='shopping_carts';
    //資料庫主要索引，通常不可重複
    protected $primaryKey='id';
    //model可以使用黑白名單，去設定可填寫的欄位
    protected $fillable=['product_id','user_id','qty'];
    // protected $fillable=['title','author','context'];//只有name可以被填
    public function Item2()
    {
        return $this->hasOne(Item::class,'id','product_id');
    }
}
