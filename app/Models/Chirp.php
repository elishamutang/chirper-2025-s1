<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    /** @use HasFactory<\Database\Factories\ChirpFactory> */
    use HasFactory;

    /**
     * Mass assignment
     */
    protected $fillable = [
        'message',
    ];

    /**
     * A Chirp belongs to a User
     *
     * @returns
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
