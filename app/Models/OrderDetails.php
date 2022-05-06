<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
/**
 * @property integer $id
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property integer $subTotal
 * @property integer $shipping_fee
 * @property integer $total
 * @property integer $product_qty
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $address
 * @property integer $pay_way
 * @property integer $delivery_way
 * @property string $shop_address
 * @property integer $status
 * @property string $ps
 */
class OrderDetails extends Model
{
    //次要訂單詳情
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'subTotal', 'shipping_fee', 'total', 'product_qty', 'name', 'phone', 'email', 'address', 'pay_way', 'delivery_way', 'shop_address', 'status', 'ps'];
    public function order()
    {
        return $this->hasOne(Order::class,'order_id','id',);
    }
}
