<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;

    protected $table = 'product';
    protected $fillable = ['product', 'harga', 'status'];

    public function Jenis()
    {
        return $this->belongsTo(Jenis::class);
    }
}
