<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comers extends Model
{
    use HasFactory;

    protected $table = 'comers';

    protected $primaryKey = 'id_comers';

    protected $fillable = [
        'username',
        'email',
        'born',
        'gender',
        'phone',
    ];
}
