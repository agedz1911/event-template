<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class schedule extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'date',
        'time',
        'title',
        'room',
        'faculty_id'
    ];

    public function faculty(): BelongsTo
    {
        return $this->belongsTo(Faculty::class, 'faculty_id', 'id');
    }
}
