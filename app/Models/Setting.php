<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['email', 'contact', 'desc', 'work', 'facebook', 'youtube', 'twitter', 'instagram', 'darkimage', 'lightimage', 'map'];
}
