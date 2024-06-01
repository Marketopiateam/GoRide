<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, HasAdvancedFilter, SoftDeletes;

    public $table = 'services';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'enable'         => 'boolean',
        'intercity_type' => 'boolean',
    ];

    public $filterable = [
        'id',
        'admin_commission',
        'image',
        'km_charge',
        'offer_rate',
        'title',
    ];

    protected $fillable = [
        'admin_commission',
        'enable',
        'image',
        'intercity_type',
        'km_charge',
        'offer_rate',
        'title',
    ];

    public $orderable = [
        'id',
        'admin_commission',
        'enable',
        'image',
        'intercity_type',
        'km_charge',
        'offer_rate',
        'title',
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
