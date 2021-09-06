<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OilFilter extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vehicle_id',
        'WhenFIlterChanged',
        'ExpectedNextChange',
        'ChangedBy',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'vehicle_id' => 'integer',
        'WhenFIlterChanged' => 'datetime',
        'ExpectedNextChange' => 'datetime',
        'ChangedBy' => 'integer',
    ];


    public function vehicle()
    {
        return $this->belongsTo(\App\Models\CompanyAssets\Vehicle::class);
    }

    public function changedBy()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
