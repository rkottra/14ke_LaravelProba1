<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verseny extends Model
{
    use HasFactory;

    protected $table = "versenyek";
    protected $primaryKey = "vkod";
    protected $keyType = 'string';

    public $timestamps = false;

    protected $casts = [
        'vkod' => 'string'
    ];
}
