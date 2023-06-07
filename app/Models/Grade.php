<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'gradeSubject',
        'grade',
    ];

    public function user(): BelongsTo

    {

        return $this->belongsTo(User::class);

    }

    public function task(): BelongsTo

    {

        return $this->belongsTo(Task::class);

    }
}
