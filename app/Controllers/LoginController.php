<?php

namespace App\Controllers;

use App\Services\LoginService\LoginService;

class LoginController
{

    public function showLogin()
    {
        return require_once __DIR__ . '/../Views/LoginView.php';
    }

    public function login()
    {
        $messages = (new LoginService())->login($_POST['name'], $_POST['password']);

        if($messages){
            return require_once __DIR__ . '/../Views/LoginView.php';
        } else {

            header('Location: /products');
        }


    }

}