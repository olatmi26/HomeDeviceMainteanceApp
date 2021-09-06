<?php

namespace App\Models\CompanyAssets;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'Model',
        'YearMake',
        'YearPurchased',
        'ChassisN0',
        'AssignedDriver',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'YearMake' => 'date',
        'YearPurchased' => 'date',
        'AssignedDriver' => 'integer',
    ];


    public function vehicleDocuments()
    {
        return $this->hasMany(\App\Models\CompanyAssets\VehicleDocument::class);
    }

    public function assignedDriver()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
