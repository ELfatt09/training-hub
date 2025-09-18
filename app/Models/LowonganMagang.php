<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LowonganMagang extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'banner',
        'company_name',
        'company_logo',
        'residence',
        'location',
        'type',
        'start_date',
        'minimum_salary',
        'maximum_salary',
        'whatsapp_number',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = \Illuminate\Support\Str::slug($model->title) . '-' . $model->id;
        });
    }
}
