<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class magang extends Model
{
    use HasFactory;
    protected $table = 'magang';

    protected $primaryKey = 'id_magang';

    protected $fillable = [
        'title',
        'slug',
        'locations',
        'description',
        'content',
        'date_start',
        'date_end',
        'images',
    ];
}
