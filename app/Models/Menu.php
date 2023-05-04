<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'link', 'order_id'];

    public function pages()
    {
        return $this->hasMany(Page::class);
    }
}
