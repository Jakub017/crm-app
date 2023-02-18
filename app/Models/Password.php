<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Password extends Model
{
    use HasFactory;

      protected $fillable = [
        'name',
        'login',
        'password',
        'host',
        'type',
        'icon',
        'user_id'
    ];

      public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
