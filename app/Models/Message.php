<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $guarded = [];
}

/*
 most popular methods:

    all()
    findOrFail(id)
    find(id)
    query() -> queryBuilder    query()->where('id', '>', '10')->get() etc
    

*/