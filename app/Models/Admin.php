<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// I set timestamps to false because this table uses a single created_at column, not the Laravel default created_at/updated_at pair
class Admin extends Model
{
    protected $table = 'admins';
    protected $fillable = ['username', 'email', 'password_hash', 'role', 'last_login'];
    public    $timestamps = false;
}