<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id_product';

    public function category(){
        return $this->belongsTo(Category::class, 'id_category', 'id_category');
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'product_id', 'id_product');
    }
}
