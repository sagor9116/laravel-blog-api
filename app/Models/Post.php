<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Relations\BelongsToUser;

class Post extends Model
{
    use HasFactory;
    use BelongsToUser;

    protected $fillable = [
        'title',
        'description',
        'slug',
        'image',
        'author_id'
    ];
}
