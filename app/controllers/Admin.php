<?php

namespace app\controllers;


class Admin
{


    public function secret()
    {
    	return [
    		'view' => 'admin',
    		'data' => ['title' => 'CDF NEW - Admin']
    	];
    }

        public function logged()
    {
        return [
            'view' => 'logged',
            'data' => ['title' => 'CDF NEW - Logado']
        ];
    }

    public function store(){

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        if(empty($email) || empty($senha)){
           return setMessageAndRedirect('message', 'Usuario ou senha estão incorretos', '/login');
        }

        $userAdmin = findBy('super_user', 'email', $email);

        if(!$userAdmin){
           return setMessageAndRedirect('message', 'Usuario ou senha estão incorretos', '/login');
        }

        if(!password_verify($senha, $userAdmin->password)) {
           return setMessageAndRedirect('message', 'Usuario ou senha estão incorretos', '/login');  
        }

            $_SESSION['super_admin'] = $userAdmin;
            return redirect('/secret/super/admin_logado');

    }

    public function destroy(){
        unset($_SESSION['super_admin']);
        return redirect('/');
    }
}