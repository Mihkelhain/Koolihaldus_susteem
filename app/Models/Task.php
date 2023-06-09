<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'dueDate',
        'worktype',
        'subject',
        'status',
    ];

    public function user(): BelongsTo

    {

        return $this->belongsTo(User::class);

    }

    public function grades(): HasMany
    {
        return $this->hasMany(Grades::class);
    }
}
