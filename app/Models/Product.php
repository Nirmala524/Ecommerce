<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['name','title','price','thumbnail','image','desc','category', 'tag','status'];

    public function CategoryName(){
        return $this->belongsTo(Category::class,'category','id');
    }
     


    // public function getPriceAttribute($value)
    // {   
    //     return Number::currency($value, in: 'INR');
    // }

    // public function getPriceAttribute($value)
    // {   
    //     return Number::spell($value);
    // }

    // public function TagName(){
    //     return $this->belongsTo(Tag::class,'tag','id');
    // }
}
