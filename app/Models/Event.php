<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Event extends Model
{
    use HasFactory, Searchable;

    protected $fillable = ['title', 'day', 'hour', 'tags', 'user_id', 'fulldate'];

    public function toSearchableArray() {
        return [
            'title' => $this->title,
            'tags' => $this->tags,
        ];
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
