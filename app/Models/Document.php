<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use HasFactory, HasAdvancedFilter, SoftDeletes;

    public $table = 'documents';

    public $filterable = [
        'id',
        'title',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'back_side',
        'enable',
        'expire_at',
        'front_side',
        'title',
        'is_deleted',
    ];

    public $orderable = [
        'id',
        'back_side',
        'enable',
        'expire_at',
        'front_side',
        'title',
        'is_deleted',
    ];

    protected $casts = [
        'back_side'  => 'boolean',
        'enable'     => 'boolean',
        'expire_at'  => 'boolean',
        'front_side' => 'boolean',
        'is_deleted' => 'boolean',
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
