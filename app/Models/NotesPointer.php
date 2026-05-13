<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NotesPointer extends Model
{
    protected $fillable = ['topic_id', 'pointers', 'status'];

    public function topic(): BelongsTo
    {
        return $this->belongsTo(Topic::class);
    }
}
