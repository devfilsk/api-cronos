<?php
/**
 * Created by PhpStorm.
 * User: Filipe Maciel
 * Date: 04/08/2019
 * Time: 21:29
 */

namespace App\Repository;


use App\User;

class UserRepository extends BaseRepository
{
    public $model = User::class;
//
//    public function model()
//    {
//        return $this->model = User::class;
//    }
}