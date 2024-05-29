<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FreightVehicle extends Model
{
    use HasFactory, HasAdvancedFilter, SoftDeletes;

    public $table = 'freight_vehicles';

    protected $casts = [
        'enable' => 'boolean',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public $filterable = [
        'id',
        'description',
        'height',
        'image',
        'km_charge',
        'length',
        'name',
        'width',
    ];

    protected $fillable = [
        'description',
        'enable',
        'height',
        'image',
        'km_charge',
        'length',
        'name',
        'width',
    ];

    public $orderable = [
        'id',
        'description',
        'enable',
        'height',
        'image',
        'km_charge',
        'length',
        'name',
        'width',
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
