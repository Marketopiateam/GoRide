<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrdersIntercity extends Model
{
    use HasFactory, HasAdvancedFilter, SoftDeletes;

    public $table = 'orders_intercities';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'accepted_driver',
        'admin_commission',
        'comments',
        'destination_city',
        'destination_location_lat_lng',
        'destination_location_name',
        'distance',
        'distance_type',
        'driver_id',
        'final_rate',
        'intercity_service',
        'intercityservice_id',
        'number_of_passenger',
        'offer_rate',
        'otp',
        'parcel_dimension',
        'parcel_image',
        'parcel_weight',
        'payment_status',
        'payment_type',
        'position',
        'rejected_driver',
        'source_city',
        'source_location_lat_lng',
        'source_location_name',
        'status',
        'tax_list',
        'user_id',
        'when_dates',
        'when_time',
    ];

    public $orderable = [
        'id',
        'accepted_driver',
        'admin_commission',
        'comments',
        'destination_city',
        'destination_location_lat_lng',
        'destination_location_name',
        'distance',
        'distance_type',
        'driver.name',
        'final_rate',
        'intercity_service',
        'intercityservice.name',
        'number_of_passenger',
        'offer_rate',
        'otp',
        'parcel_dimension',
        'parcel_image',
        'parcel_weight',
        'payment_status',
        'payment_type',
        'position',
        'rejected_driver',
        'source_city',
        'source_location_lat_lng',
        'source_location_name',
        'status',
        'tax_list',
        'user.name',
        'when_dates',
        'when_time',
    ];

    public $filterable = [
        'id',
        'accepted_driver',
        'admin_commission',
        'comments',
        'destination_city',
        'destination_location_lat_lng',
        'destination_location_name',
        'distance',
        'distance_type',
        'driver.name',
        'final_rate',
        'intercity_service',
        'intercityservice.name',
        'number_of_passenger',
        'offer_rate',
        'otp',
        'parcel_dimension',
        'parcel_image',
        'parcel_weight',
        'payment_status',
        'payment_type',
        'position',
        'rejected_driver',
        'source_city',
        'source_location_lat_lng',
        'source_location_name',
        'status',
        'tax_list',
        'user.name',
        'when_dates',
        'when_time',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function driver()
    {
        return $this->belongsTo(User::class);
    }

    public function intercityservice()
    {
        return $this->belongsTo(IntercityService::class);
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
