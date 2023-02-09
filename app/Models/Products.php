<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table  = 'products';
    protected $fillable = [
        'id',
        'name',
        'shortInfo',
        'category',
        'material',
        'materialColor',
        'productSize',
        'productQuantity',
        'productImages',
        'branchDivision',
        'branchDistrict',
        'branchUpazila',
        'DiscountRange',
        'discount',
        'discountType',
        'price',
        'status',
        'warranty',
        'tags',
        'barcode',
    ];
}
