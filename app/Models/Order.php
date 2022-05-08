<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\OrderDetails;
/**
 * @property integer $id
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property integer $product_id
 * @property integer $product_price
 * @property integer $qty
 * @property integer $order_id
 */
class Order extends Model
{
    //訂單商品詳情
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'product_id', 'product_price', 'qty', 'order_id'];

    public function order_details()
    {
        return $this->hasMany(OrderDetails::class,'id','order_id',);
    }
}
