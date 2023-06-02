<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'Title',
        'Description',
        'Due Date',
        'Worktype',
        'Subject',
        'Status',
    ];

    public function user(): BelongsTo

    {

        return $this->belongsTo(User::class);

    }
}
