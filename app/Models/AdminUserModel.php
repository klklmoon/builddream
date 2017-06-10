<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUserModel extends Authenticatable
{
    use Notifiable;

    protected $table = 'admin_users';

    protected $primaryKey = 'admin_uid';

    protected $fillable = [
        'username','email','password','status'
    ];

    protected $hidden = [
        'remember_token','password'
    ];
}
