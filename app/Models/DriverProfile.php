<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverProfile extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // Make relationship with user model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
  

}
