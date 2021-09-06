<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarRepairEvidence extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'orderassignto_id',
        'FaultyComponentPictures',
        'VoiceRecord',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'orderassignto_id' => 'integer',
    ];


    public function orderassignto()
    {
        return $this->belongsTo(\App\Models\Orderassignto::class);
    }
}
