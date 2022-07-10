<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banners extends Model
{
    use HasFactory;
    protected $table = 'banners';

    protected $primaryKey = 'id_banners';

    protected $fillable = [
        'title',
        'description',
        'link',
        'images_desktop',
        'images_phone',
        'text_desktop',
        'text_phone',
    ];
}
