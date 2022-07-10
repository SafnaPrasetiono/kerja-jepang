<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proposal_magang extends Model
{
    use HasFactory;
    protected $table = 'proposal_magang';

    protected $primaryKey = 'id_proposal_magang';

    protected $fillable = [
        'resume',
        'certificate',
        'status',
        'description',
        'content',
        'id_magang',
        'id_users',
    ];
}
