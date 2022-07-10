<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comers_address extends Model
{
    use HasFactory;

    protected $table = 'comers_address';

    protected $primaryKey = 'id_comers_address';

    protected $fillable = [
        'country',
        'province',
        'city',
        'district',
        'village',
        'postal_code',
        'address',
        'comers_id',
        'id_province',
        'id_regency',
        'id_district',
        'id_village',
    ];
}
