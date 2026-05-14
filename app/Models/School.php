<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class School extends Model
{
    
    protected $fillable = ['name','slug'];

    public function exams(): HasMany
    {
        return $this->hasMany(Exam::class);
    }
    public function sections(): HasMany
    {
        return $this->hasMany(Section::class);
    }

}
