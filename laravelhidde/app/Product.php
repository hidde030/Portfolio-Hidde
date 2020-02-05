<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'headtitle',
        'title',
        'category',
        'sub_title',
        'slug',
        'day',
        'month',
        'description',
        'body',
        'image',
        'created_at',
        'updated_at',
        'deleted_at',
        'description',
    ];
}
