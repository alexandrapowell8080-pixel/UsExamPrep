<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notes extends Model
{
    //
    protected $fillable = ['content','topic_id'];

    public function topic():BelongsTo
    {
        return $this->belongsTo(Topic::class,'topic_id');
    }
}
