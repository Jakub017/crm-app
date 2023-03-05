<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'day', 'hour', 'tags', 'user_id', 'color'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
