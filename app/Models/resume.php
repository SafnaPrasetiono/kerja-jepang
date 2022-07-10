<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resume extends Model
{
    use HasFactory;

    protected $table = 'resumes';

    protected $primaryKey = 'id_resume';

    protected $fillable = [
        'resume',
        'id_users',
    ];
}
