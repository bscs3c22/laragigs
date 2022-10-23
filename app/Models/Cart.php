<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\listing;
use App\Models\Cart;

class Cart extends Model
{
    use HasFactory;
    
    public function listing(){
        return $this->hasMany(listing::class, 'id', 'product_id');
    }
}
