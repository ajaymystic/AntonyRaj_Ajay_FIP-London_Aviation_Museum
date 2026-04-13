<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// I disable timestamps because the table uses its own created_at with no updated_at
class SocialPost extends Model
{
    protected $table = 'social_posts';
    protected $fillable = [
        'platform', 'media_url', 'media_type', 'caption',
        'hashtags', 'external_link', 'status', 'published_at',
    ];
    public $timestamps  = false;
}