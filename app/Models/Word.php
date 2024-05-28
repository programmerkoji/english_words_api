<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Word extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'word_en',
        'word_ja',
        'part_of_speech',
        'memory',
        'memo',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
