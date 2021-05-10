<?php

namespace App\Models;

use Database\Seeders\CategorySeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;

class Product extends Model
{
    use HasFactory;
    
   

    public function category(){
        return $this->belongsTo(category::class);
    }
}