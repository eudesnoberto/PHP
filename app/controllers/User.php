<?php

namespace app\controllers;


class User
{

    public function show($params)
    {
        if (!isset($params['user'])) {//user esta em router e routes
            return redirect('/');
        }
        //Tabela, id,
        $users = findBy('users_cdfnews_secrets', 'cdf_new_id', $params['user'], 'cdf_new_id, cdf_new_nome' );
        var_dump($users);
        die();
    }

    public function create(){
        return[
            'view' => 'create',
            'data' => ['title' => 'CDF NEW - Create']
        ];
    }

    //method post
    public function store(){

        $validate = validate([

            'cdf_new_nome' => 'required|minlen:5|maxlen:50',
            'cdf_new_email' => 'email|required|unique:users_cdfnews_secrets',            
            'cdf_new_zap' => 'required|minlen:9|maxlen:14',
            'cdf_new_senha' => 'required|maxlen:30|minlen:6',
            'cdf_new_status' => 'required',
            'cdf_new_nivel' => 'required',
            'cdf_new_data' => 'required'


        ], persistsImputs:true, checkCsrf:true);

    if(!$validate){
        

        return redirect('/user/create');

        }    

        $validate['cdf_new_senha'] = password_hash($validate['cdf_new_senha'], PASSWORD_DEFAULT);
       
        $created = create('users_cdfnews_secrets', $validate);


        if(!$created){
            setFlash('message', 'ocorreu um erro ao cadastrar, tente novamente em alguns segundos');
            return redirect('/user/create');
        }

    return redirect('/');

    }

}