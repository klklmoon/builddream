<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $primaryKey = 'uid';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * 根据用户uid获取用户
     *
     * @param $uid
     * @return mixed
     */
    public function getUserByUid($uid)
    {
        return $this->where('uid', '=', $uid)->first();

    }

    /**
     * 根据用户uid获取用户
     *
     * @param $uids
     * @return mixed
     */
    public function getUserByUids($uids)
    {
        return $this->whereIn('uid', $uids)->get();
    }

    public function getUserByCondition(array $condition = [],$offest = 0, $limit = 10)
    {
        return $this->where($condition)->paginate($limit);

    }
}
