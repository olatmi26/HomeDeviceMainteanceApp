<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Support\Str;
use App\Models\UserDocument;
use Spatie\Permission\Models\Role;
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
        'securityPin',
        'username',
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
        return $this->belongsToMany(Role::class);
    }

    public function userDocuments()
    {
        return $this->belongsToMany(UserDocument::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function getFullNameAttribute()
    {
        return ucfirst($this->Firstname) . ' ' . Str::upper($this->Lastname). ' ' . Str::upper($this->Othername);
    }

}

