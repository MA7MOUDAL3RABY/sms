<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Grade extends Model
{
    use HasTranslations;

    public $fillable = ['name', 'notes'];

    public $translatable = ['name', 'notes'];
}
