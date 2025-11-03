<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seed_Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'seed_id',
        'message',
        'match_score',
    ];

    public function seed()
    {
        return $this->belongsTo(Seed::class);
    }
}
