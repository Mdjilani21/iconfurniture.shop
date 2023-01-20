<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisions extends Model
{
    use HasFactory;
    protected $table  = 'divisions';
    protected $fillable = [
        'id',
        'name',
        'bn_name',
        'url'
    ];
}
