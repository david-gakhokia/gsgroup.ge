<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExclusiveTranslation extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ['title','name', 'description', 'icon', 'status'];
}
