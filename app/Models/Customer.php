<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'FirstName',
        'LastName',
        'OtherName',
        'PhoneNo',
        'PhoneNo2',
        'ProfileImage',
        'email',
        'Address',
        'city_id',
        'state_id',
        'password',
        'CurrentGpsLocationLong',
        'CurrentGpsLocationLat',
        'CustomerStatus',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'CurrentGpsLocationLong' => 'decimal:8',
        'CurrentGpsLocationLat' => 'decimal:8',
        'CustomerStatus' => 'boolean',
        'email_verified_at' => 'timestamp',
    ];


    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class);
    }
}
