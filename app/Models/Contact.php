<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';
    
    protected $fillable = [
        'sender_name',
        'sender_email',
        'sender_message',
        'readable'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

        // The attributes that should be hidden for arrays.
        protected $hidden = [];

        // The attributes that should be cast to native types.
        protected $casts = [];
    
}