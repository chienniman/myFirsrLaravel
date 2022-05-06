<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\ShoppingCart;
class Item extends Model
{
    use HasFactory;
    protected $table='items';
    //資料庫主要索引，通常不可重複
    protected $primaryKey='id';
    //model可以使用黑白名單，去設定可填寫的欄位
    protected $fillable=['items_img_path','items_name','items_price','items_context','items_number'];
    // protected $fillable=['title','author','context'];//只有name可以被填
    public function imgs()
    {
        return $this->hasMany(Product::class,'product_id','id',);
    }
    public function shopping_cart()
    {
        return $this->hasMany(ShoppingCart::class,'product_id','id',);
    }
}
