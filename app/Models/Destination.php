<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Destination extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'destination_id',
        'destination_name',
        'destination_desc',
        'destination_address',
        'destination_longitude',
        'destination_latitude',
        'destination_active',
        'destination_thumbnail',
        'destination_user_id',
        'thumbnail_name',
        'destination_city',
        'destination_province',
    ];
    const CREATED_AT = 'destination_created_at';
    const UPDATED_AT = 'destination_updated_at';
    const DELETED_AT = 'destination_deleted_at';
}
