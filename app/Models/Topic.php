<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Topic extends Model
{
     protected $fillable = ['exam_id','name','slug'];

     public function pointers():HasOne
     {
          return $this->hasOne(NotesPointer::class);
     }

     public function section():BelongsTo
     {
          return $this->belongsTo(Section::class);
     }
}
