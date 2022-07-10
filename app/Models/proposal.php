<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proposal extends Model
{
    use HasFactory;
    protected $table = 'proposal';

    protected $primaryKey = 'id_proposal';

    protected $fillable = [
        'resume',
        'certificate',
        'status',
        'description',
        'content',
        'id_lokers',
        'id_users',
    ];
}
