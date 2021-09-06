<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id',
        'OrderTrackN0',
        'stock_id',
        'DateOrders',
        'isOrderService',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'customer_id' => 'integer',
        'stock_id' => 'integer',
        'DateOrders' => 'datetime',
        'isOrderService' => 'boolean',
    ];


    public function orderItems()
    {
        return $this->hasMany(\App\Models\OrderItem::class);
    }

    public function customer()
    {
        return $this->belongsTo(\App\Models\Customer::class);
    }

    public function stock()
    {
        return $this->belongsTo(\App\Models\Stock::class);
    }
}
