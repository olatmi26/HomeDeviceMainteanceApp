<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id',
        'category_id',
        'stock_id',
        'QtyOrdered',
        'UnitCost',
        'TotalCost',
        'DateOrder',
        'OrderServiced',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'order_id' => 'integer',
        'category_id' => 'integer',
        'stock_id' => 'integer',
        'DateOrder' => 'datetime',
        'OrderServiced' => 'boolean',
    ];


    public function order()
    {
        return $this->belongsTo(\App\Models\Order::class);
    }

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }

    public function stock()
    {
        return $this->belongsTo(\App\Models\Stock::class);
    }
}
