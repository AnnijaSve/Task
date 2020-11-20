<?php

namespace App\Services\LoginService;

use App\Repositories\UserRepository;


class LoginService
{

    public function login($name, $password)
    {
        $usersQuery = (new UserRepository())->findByName($name);

        $messages = [];

        if (! $usersQuery['name']) {

            $messages['name'] = 'Wrong name!';
        }

        if ( $password !== $usersQuery['password']) {

            $messages['password'] = 'Invalid password!';

        } else{
            $_SESSION['name'] = $usersQuery['name'];
        }

        return $messages;

    }



}