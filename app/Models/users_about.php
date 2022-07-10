<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_about extends Model
{
    use HasFactory;

    protected $table = 'users_abouts';

    protected $primaryKey = 'id_users_abouts';

    protected $fillable = [
        'about',
        'id_users',
    ];
}
