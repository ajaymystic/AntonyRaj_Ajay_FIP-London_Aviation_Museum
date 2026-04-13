<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// I turn off timestamps here because the table only tracks created_at, not updated_at
class BorPilot extends Model
{
    protected $table = 'bor_pilots';
    protected $fillable = ['last_name', 'initials', 'full_name', 'in_book', 'notes', 'photo_path'];
    public    $timestamps = false;
}