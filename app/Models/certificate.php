<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class certificate extends Model
{
    use HasFactory;
    protected $table = 'certificates';

    protected $primaryKey = 'id_certificate';

    protected $fillable = [
        'certificate',
        'id_users',
    ];
}
