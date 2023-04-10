<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Note extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'content',
        'user_id',
        'tags'
    ];

    public function toSearchableArray()
    {
    return [
        'title' => $this->title,
        'tags' => $this->tags,
    ];
    }


    public function user() {
        return $this->belongsTo('App\Models\User');
    }

}
