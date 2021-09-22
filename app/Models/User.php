<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Firstname',
        'Lastname',
        'Othername',
        'department_id',
        'MobileN01',
        'MobileN02',
        'MobileN03',
        'ProfilePhoto',
        'ResidentialAddress',
        'City',
        'DOB',
        'email',
        'email_verified_at',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'department_id' => 'integer',
        'DOB' => 'date',
        'email_verified_at' => 'datetime',
    ];


    public function roles()
    {
        return $this->belongsToMany(\Spatie\LaravelPermission\Models\Role::class);
    }

    public function userDocuments()
    {
        return $this->belongsToMany(\App\Models\UserDocument::class);
    }

    public function department()
    {
        return $this->belongsTo(\App\Models\Department::class);
    }

    public function getFullNameAttribute()
    {
        return ucfirst($this->Firstname) . ' ' . Str::upper($this->Lastname). ' ' . Str::upper($this->Othername);
    }

}

