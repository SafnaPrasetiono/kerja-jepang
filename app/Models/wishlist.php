<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'wishlists';

    protected $primaryKey = 'id_wishlist';

    // protected file table produk
    protected $fillable = [
        'lokers_id', 
        'users_id',
    ];
}
