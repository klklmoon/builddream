<?php
/**
 * Created by PhpStorm.
 * User: klklmoon
 * Date: 2017/6/18
 * Time: 1:03
 */

namespace App\Services;


use App\Models\UserModel;

class UserService
{
    protected $userModel;

    public function __construct(UserModel $user)
    {
        $this->userModel = $user;
    }

    /**
     * 根据用户uid获取用户
     *
     * @param $uid
     * @return mixed
     */
    public function getUserByUid($uid)
    {
        $data = $this->userModel->getUserByUid($uid);

        return $data ? $data->toArray() : [];
    }


    /**
     * 根据用户uids获取用户
     *
     * @param $uids
     * @return mixed
     */
    public function getUserByUids($uids)
    {
        $uids = is_array($uids) ? $uids : array($uids);

        $data = $this->userModel->getUserByUids($uids);

        return $data ? $data->toArray() : [];
    }

    /**
     * 根据条件获取用户
     *
     * @param array $condition
     * @return array
     */
    public function getUserByCondition(array $condition = [])
    {
        $data = $this->userModel->getUserByCondition($condition);

        return $data;
    }
}