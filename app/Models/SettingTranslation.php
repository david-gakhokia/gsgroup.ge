<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingTranslation extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $fillable = ['title', 'name','description', 'address', 'start_time_text', 'end_time_text', 'phone' , 'email', 'start_time' , 'end_time'];

}
