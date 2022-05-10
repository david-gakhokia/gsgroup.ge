<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageTranslation extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $fillable = ['name', 'description',  'start_time' , 'end_time' , 'icon', 'link', 'status'];
}
