<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'name', 
        'description',
        'quantity'
    ];

    public function suppliers(){
        return $this->belongsToMany(Supplier::class, 'supplier_products');
        
    }

    public function orders(){
        return $this->belongsToMany(Order::class, 'order_details');
        
    }

}
