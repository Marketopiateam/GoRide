<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DriverUser extends Model
{
    use HasFactory, HasAdvancedFilter, SoftDeletes;

    public $table = 'driver_users';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'document_verification' => 'boolean',
        'is_online'             => 'boolean',
    ];

    public $filterable = [
        'id',
        'country_code',
        'email',
        'fcm_token',
        'full_name',
        'login_type',
        'phone_number',
        'profile_pic',
        'reviews_count',
        'reviews_sum',
        'rotation',
        'service',
        'wallet_amount',
    ];

    protected $fillable = [
        'country_code',
        'document_verification',
        'email',
        'fcm_token',
        'full_name',
        'is_online',
        'login_type',
        'phone_number',
        'profile_pic',
        'reviews_count',
        'reviews_sum',
        'rotation',
        'service',
        'wallet_amount',
    ];

    public $orderable = [
        'id',
        'country_code',
        'document_verification',
        'email',
        'fcm_token',
        'full_name',
        'is_online',
        'login_type',
        'phone_number',
        'profile_pic',
        'reviews_count',
        'reviews_sum',
        'rotation',
        'service',
        'wallet_amount',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getCreatedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function getUpdatedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function getDeletedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }
}
