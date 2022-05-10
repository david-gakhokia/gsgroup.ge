<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $fillable = ['name', 'description', 'category_id' , 'price', 'status' ];
}
