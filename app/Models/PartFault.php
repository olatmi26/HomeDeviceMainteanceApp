<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartFault extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'partFualty',
        'ExactFualt',
        'PartReplacewith',
        'PartChanged',
        'fualtyCOmponentPicture',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'PartReplacewith' => 'integer',
        'PartChanged' => 'integer',
    ];


    public function partReplacewith()
    {
        return $this->belongsTo(\App\Models\Stock::class);
    }

    public function partChanged()
    {
        return $this->belongsTo(\App\Models\Stock::class);
    }
}
