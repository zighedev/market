<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'description',
        'status',
        'price',
        'negotiable',
        'views',
        'swap',
        'allow_comments',
        'display_views',
        'approval',
    ];
    
}
