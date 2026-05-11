<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class School extends Model
{
    protected $table = 'schools';
    protected $fillable = ['name','slug'];


    public function sections():HasMany
    {
        return $this->hasMany(Section::class);
    }
}
