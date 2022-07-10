<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    use HasFactory;

    protected $table = 'experiences';

    protected $primaryKey = 'id_experience';

    protected $fillable = [
        'position',
        'company',
        'month_start',
        'years_start',
        'month_end',
        'years_end',
        'status',
        'info',
        'id_users',
    ];
}
