<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qa extends Model
{
    use HasFactory;

    protected $table = 'qa';

    protected $primaryKey = 'id_qa';

    protected $fillable = [
        'question',
        'answer',
        'about',
    ];
}
