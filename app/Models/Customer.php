<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;
    

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

    public function getFullNameAttribute()
    {
        return ucfirst($this->Firstname) . ' ' . Str::upper($this->Lastname). ' ' . Str::upper($this->Othername);
    }
}
