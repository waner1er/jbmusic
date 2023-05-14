<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Song extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'user_id', 'file'];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'song_users', 'song_id', 'user_id');
    }

    public function file()
    {
        $file = $this->file;
        $files = scandir(public_path('midi'));

        return $file;
    }
}
