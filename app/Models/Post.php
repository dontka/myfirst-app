<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    /**
     * Les attributs qui peuvent être remplis en masse.
     * Cela permet d'utiliser Post::create(['title' => '...', 'content' => '...'])
     */
    protected $fillable = [
        'title',
        'content',
    ];
}
