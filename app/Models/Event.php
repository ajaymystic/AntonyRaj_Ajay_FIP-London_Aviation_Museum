<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// I keep timestamps enabled here since the events table has both created_at and updated_at
class Event extends Model
{
    protected $table = 'events';
    protected $fillable = [
        'title', 'slug', 'description', 'event_date',
        'event_time', 'location', 'featured_image_url', 'category', 'status',
    ];
}