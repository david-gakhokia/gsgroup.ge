<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Setting extends Model
{
    use HasFactory, Translatable;
    protected $guarded = ['id'];

    public $translatedAttributes = ['title', 'name','description' , 'address' , 'start_time_text', 'end_time_text'];



}
