<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tags extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tag_id',
        'tag',
    ];
    const CREATED_AT = 'tag_created_at';
    const UPDATED_AT = 'tag_updated_at';
    const DELETED_AT = 'tag_deleted_at';
}
