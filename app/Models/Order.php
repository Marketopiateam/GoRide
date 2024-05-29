<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, HasAdvancedFilter, SoftDeletes;

    public $table = 'orders';

    protected $casts = [
        'payment_status' => 'boolean',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public $filterable = [
        'id',
        'accepted_driver',
        'admin_commission',
        'destination_location_name',
        'destination_location_l_at_lng',
        'distance',
        'distance_type',
        'driver',
        'final_rate',
        'offer_rate',
        'otp',
        'payment_type',
        'position',
        'rejected_driver',
        'service',
        'source_location_l_at_lng',
        'source_location_name',
        'status',
        'tax_list',
        'update_date',
        'user.name',
    ];

    protected $fillable = [
        'accepted_driver',
        'admin_commission',
        'destination_location_name',
        'destination_location_l_at_lng',
        'distance',
        'distance_type',
        'driver',
        'final_rate',
        'offer_rate',
        'otp',
        'payment_status',
        'payment_type',
        'position',
        'rejected_driver',
        'service',
        'source_location_l_at_lng',
        'source_location_name',
        'status',
        'tax_list',
        'update_date',
        'user_id',
    ];

    public $orderable = [
        'id',
        'accepted_driver',
        'admin_commission',
        'destination_location_name',
        'destination_location_l_at_lng',
        'distance',
        'distance_type',
        'driver',
        'final_rate',
        'offer_rate',
        'otp',
        'payment_status',
        'payment_type',
        'position',
        'rejected_driver',
        'service',
        'source_location_l_at_lng',
        'source_location_name',
        'status',
        'tax_list',
        'update_date',
        'user.name',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
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
