<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsteller extends Model
{
    use HasFactory;
    protected $casts = [
    'published_on' => 'date:hh:mm'
];
}
