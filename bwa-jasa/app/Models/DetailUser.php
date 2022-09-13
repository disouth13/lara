<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailUser extends Model
{
    //use HasFactory;

    use SoftDeletes;

    public $table = 'detail_user';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    protected $fillable = [
        'users_id',
        'photo',
        'contact_number',
        'biography',
        'role',
        'created_at',
        'updated_at',
        'deleted_at',

    ];
}
