<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'title',
        'slug',
        'image',
        'image_alt',
        'excerpt',
        'content',
        'hour_price',
        'km_shift',
        'duration',
        'level_id',
    ];

    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class);
    }
}
