<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';
    protected $fillable = [
        'name' 
    ];

    public function products(){
        return $this->belongsToMany(Product::class, 'supplier_products','supply_id', 'product_id');
    }

}
