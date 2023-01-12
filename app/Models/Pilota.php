<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilota extends Model
{
    use HasFactory;

    protected $table = 'pilotak';
    protected $primaryKey = 'pazon';

    public $timestamps = false;
}
