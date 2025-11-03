<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seed extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'value',
        'metrics',
        'status',
    ];

    protected $casts = [
        'metrics' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function logs()
    {
        return $this->hasMany(SeedLog::class);
    }
}
