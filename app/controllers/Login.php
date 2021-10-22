<?php

namespace app\controllers;


class Login
{


    public function index()
    {
    	return [
    		'view' => 'login',
    		'data' => ['title' => 'CDF NEW - Login']
    	];
    }

    public function store(){

        $email = filter_input(INPUT_POST, 'cdf_new_email', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'cdf_new_senha', FILTER_SANITIZE_STRING);

        if(empty($email) || empty($senha)){
           return setMessageAndRedirect('message', 'Usuario ou senha estão incorretos', '/login');
        }

        $user = findBy('users_cdfnews_secrets', 'cdf_new_email', $email);

        if(!$user){
           return setMessageAndRedirect('message', 'Usuario ou senha estão incorretos', '/login');
        }

        if(!password_verify($senha, $user->cdf_new_senha)) {
           return setMessageAndRedirect('message', 'Usuario ou senha estão incorretos', '/login');  
        }

            $_SESSION[LOGGED] = $user;
            
            $id = user()->cdf_new_id;

            if ($id == 1){
                return redirect('secret/super/user');
            }else{
                return redirect('/');
        }

    }

    public function destroy(){
        unset($_SESSION[LOGGED]);
        return redirect('/');
    }
}