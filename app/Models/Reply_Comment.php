<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply_Comment extends Model
{
    use HasFactory;
    protected $table = 'reply__comments';
    protected $fillable = [
        'email', 'comment', 'user_id'
    ];
}
