<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pr_add_detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'product', 'pcs', 'price_pcs', 'note'
    ];
}
