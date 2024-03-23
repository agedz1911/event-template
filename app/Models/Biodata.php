<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Biodata extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'nameCertificate',
        'institution',
        'country',
        'province',
        'city',
        'address',
        'zipcode',
        'phoneNumber',
        'secondEmail',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
