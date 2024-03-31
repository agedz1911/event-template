<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryRegistration extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_name',
    ];

    public function classCategory(): HasMany
    {
        return $this->HasMany(ClassCategory::class);
    }
}
