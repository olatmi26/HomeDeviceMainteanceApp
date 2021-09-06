<?php

namespace App\Models\CompanyAssets;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carservice extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vehicle_id',
        'isCustomerCar',
        'customer_id',
        'isCompanyCar',
        'partfault_id',
        'fualtyCOmponentPicture',
        'RepairCost',
        'TotalCost',
        'ServiceBy',
        'DateService',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'isCustomerCar' => 'boolean',
        'customer_id' => 'integer',
        'isCompanyCar' => 'boolean',
        'partfault_id' => 'integer',
        'ServiceBy' => 'integer',
        'DateService' => 'datetime',
    ];


    public function customer()
    {
        return $this->belongsTo(\App\Models\Customer::class);
    }

    public function partfault()
    {
        return $this->belongsTo(\App\Models\CompanyAssets\Partfault::class);
    }

    public function serviceBy()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
