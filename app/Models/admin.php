<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Translation\HasLocalePreference;
use Illuminate\Foundation\Auth\User as Authenticatable;

class admin extends  Authenticatable implements HasLocalePreference
{

    use HasFactory, HasAdvancedFilter, Notifiable, SoftDeletes,HasApiTokens;
    protected $guarded = [];

    public function preferredLocale()
    {
        return $this->locale;
    }
}
