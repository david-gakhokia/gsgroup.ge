<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivacyPolicyTranslation extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $fillable = ['title', 'name', 'description', 'cover'];
}
