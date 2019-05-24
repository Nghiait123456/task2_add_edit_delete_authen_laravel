<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table = 'book';

    protected $fillable = [
        'id', 'title', 'author', 'created_at', 'updated_at'
    ];
}
