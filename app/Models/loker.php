<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loker extends Model
{
    use HasFactory;

    protected $table = 'lokers';

    protected $primaryKey = 'id_lokers';

    protected $fillable = [
        'title',
        'slug',
        'type',
        'locations',
        'description',
        'content',
        'date_start',
        'date_end',
        'images',
    ];
}
