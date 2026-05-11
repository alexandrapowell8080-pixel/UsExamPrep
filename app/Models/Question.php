<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{
    protected $fillable = [
        'exam_id',
        'extract',
        'question',
        'choiceA',
        'choiceB',
        'choiceC',
        'choiceD',
        'choiceE',
        'choiceF',
        'choiceG',
        'correct_answer',
        'rationale',
        'question_type',
        'image',
        'url',
        'wrong_answer',
    ];

    public function exam(): BelongsTo
    {
        return $this->belongsTo(Exam::class);
    }

    public function getChoicesAttribute(): array
    {
        $choices = [];
        foreach (range('A', 'G') as $letter) {
            $value = $this->{"choice{$letter}"};
            if ($value !== null) {
                $choices[$letter] = $value;
            }
        }

        return $choices;
    }
}
