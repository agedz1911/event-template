<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'class_name',
        'category_id',
        'date',
        'time'
    ];

    public function categoryReg(): BelongsTo
    {
        return $this->belongsTo(CategoryRegistration::class, 'category_id', 'id');
    }
}
