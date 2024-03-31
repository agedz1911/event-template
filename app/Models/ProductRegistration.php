<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductRegistration extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'class_id',
        'product_name',
        'code_product',
        'start_date_early',
        'end_date_early',
        'price_idr_early',
        'price_usd_early',
        'start_date_normal',
        'end_date_normal',
        'price_idr_normal',
        'price_usd_normal',
        'start_date_onsite',
        'end_date_onsite',
        'price_idr_onsite',
        'price_usd_onsite',
        'kuota',
        'status',
        
    ];
}
