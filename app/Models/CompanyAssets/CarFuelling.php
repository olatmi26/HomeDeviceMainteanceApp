<?php

namespace App\Models\CompanyAssets;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarFuelling extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vehicle_id',
        'department_id',
        'FuelLiter',
        'UnitCost',
        'DateFuelled',
        'RefilledBy',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'DateFuelled' => 'datetime',
        'RefilledBy' => 'integer',
    ];


    public function refilledBy()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
