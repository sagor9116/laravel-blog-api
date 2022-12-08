<?php

namespace App\Traits\Relations;
use App\Models\Post;

/**
 * 
 */
trait HasManyPosts
{
  public function post() {
    return $this->hasMany(Post::class);
  }
}