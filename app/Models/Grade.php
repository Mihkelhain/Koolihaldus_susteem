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
        'avgGrade',
        'totalGrade',
    ];

    public function user(): BelongsTo

    {

        return $this->belongsTo(User::class);

    }
}
