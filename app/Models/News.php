<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'tittle',
        'content',
        'image_url',
        'category_id',
        'slug',
        'status',
        'viewed_count',
        'writer_id'
    ];
}
