<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    protected $fillable = [
        'title_id',
        'title_en',
        'desc_id',
        'desc_en',
        'image'
    ];
}
