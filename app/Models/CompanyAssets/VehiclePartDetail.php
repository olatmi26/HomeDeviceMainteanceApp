<?php

namespace App\Models\CompanyAssets;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiclePartDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vehicle_id',
        'OilType',
        'OilMeter',
        'OilfilterGuaged',
        'BatteryUsed',
        'ACCondition',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'OilfilterGuaged' => 'boolean',
        'ACCondition' => 'boolean',
    ];
}
