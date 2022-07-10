<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comers_documents extends Model
{
    use HasFactory;

    protected $table = 'comers_documents';

    protected $primaryKey = 'id_comer_documents';

    protected $fillable = [
        'ktp',
        'kk',
        'akte',
        'photo',
        'comers_id',
    ];
}
