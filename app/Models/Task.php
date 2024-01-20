<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
        'assigned',
        'creator',
    ];

    /**
     * @return BelongsTo
     */
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator');
    }

    /**
     * @return BelongsTo
     */
    public function assigned(): BelongsTo {
        return $this->belongsTo(User::class, 'assigned');
    }
}
