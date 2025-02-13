<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;

class Skill extends Model
{
    use HasFactory;
    protected $fillable=['title','per','status'];


    protected function Title(): Attribute
    {
        return Attribute::make(
            get: fn( $value) => strtolower($value), 
            set: fn ($value) => strtolower($value),
        );
    }

    // protected function Per(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn( $value) => Number::percentage($value), 
    //         set: fn ( $value) => Number::percentage($value),
    //     );
    // }

}
