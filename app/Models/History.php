<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class History extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'history_id',
        'value',
        'history_user_id',
    ];
    const CREATED_AT = 'history_created_at';
    const UPDATED_AT = 'history_updated_at';
    const DELETED_AT = 'history_deleted_at';
}
