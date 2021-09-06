<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderAssignTo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id',
        'AssignedTo',
        'OrderCompleted',
        'AssignedBy',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'order_id' => 'integer',
        'AssignedTo' => 'integer',
        'OrderCompleted' => 'boolean',
        'AssignedBy' => 'integer',
    ];


    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class);
    }

    public function carRepairEvidences()
    {
        return $this->hasMany(\App\Models\CarRepairEvidence::class);
    }

    public function order()
    {
        return $this->belongsTo(\App\Models\Order::class);
    }

    public function assignedTo()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function assignedBy()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
