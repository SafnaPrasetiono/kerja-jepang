<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class educations extends Model
{
    use HasFactory;

    protected $table = 'educations';

    protected $primaryKey = 'id_educations';

    protected $fillable = [
        'institution',
        'degree',
        'study',
        'month_start',
        'years_start',
        'month_end',
        'years_end',
        'status',
        'info',
        'id_users',
    ];
}
