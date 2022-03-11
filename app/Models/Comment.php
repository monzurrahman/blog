<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory;

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    public function parentComments(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'parent_comment_id', 'id');
    }

    public function childComments(): HasMany
    {
        return $this->hasMany(Comment::class, 'parent_comment_id', 'id');
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'commented_by', 'id');
    }
}
