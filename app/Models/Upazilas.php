<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upazilas extends Model
{
    use HasFactory;
    protected $table  = 'upazilas';
    protected $fillable = [
        'id',
        'district_id',
        'name',
        'bn_name',
        'url'
    ];
}
