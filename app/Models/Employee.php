<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
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
        'MobileN01',
        'MobileN02',
        'MobileN03',
        'ResidentailAddress',
        'City',
        'DOB',
        'email',
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];


    public function roles()
    {
        return $this->belongsToMany(\Spatie\LaravelPermission\Models\Role::class);
    }
    /**
     * Get all of the documents for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documents()
    {
        return $this->hasMany(Userdocument::class);
    }

    /**
     * Get all of the assignedorders for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assignedorders()
    {
        return $this->hasMany(Orderassigned::class);
    }
}
