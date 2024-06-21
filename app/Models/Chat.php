<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $guarded = ['id'];



    public function room()
    {
        return $this->belongsTo(room::class, 'room_id');
    }
}
