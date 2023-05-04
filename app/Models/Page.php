<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'content', 'menu_title', 'image', 'image_alt'];

    public function menus(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }
}
