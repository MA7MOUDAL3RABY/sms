<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Models\Grade;

class Classroom extends Model
{
    use HasTranslations;

    public $fillable = ['name', 'grade_id'];
    public $translatable = ['name'];


     public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
}
