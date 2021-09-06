<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

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
}
