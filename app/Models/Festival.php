<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    use HasFactory;
    protected $table = 'festival';

    protected $fillable = [
        'name',
        'date',
        'time',
        'price',
        'description',
    ];
}
