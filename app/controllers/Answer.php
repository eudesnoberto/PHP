<?php

namespace app\controllers;

class Answer

{

    public function show($params)
   {
        if (!isset($params['questions'])) {//user esta em router e routes
           return redirect('/');
        }
       //Tabela, id,
        $answers = findBy('cdf_users_answer', 'users_id', $params['questions'], 'users_id, users_answer' );
        $perguntar = "CDF NEW ".$answers->users_answer;
        return [
        'view' => 'answers',
        'data' => ['title' => $perguntar, 'cdf_users_answer' => $answers]
        ];

   }

    public function listar($params)
    {

        $answers = all('cdf_users_answer');
        return [
        'view' => 'answer',
        'data' => ['title' => 'CDF NEW Pergumtas ', 'cdf_users_answer' => $answers]
        ];


    }





    public function answer(){
        return[
            'view' => 'answer',
            'data' => ['title' => 'CDF NEW - Answer']
        ];
    }

    //method post
    public function question(){

        $validate = validate([

            'users_answer' => 'required',
            'users_status' => 'required',
            //'cdf_new_email' => 'email|unique:cdf_users_answer',
            //'cdf_new_senha' => 'required|maxlen:20',
            'users_anonimo' => 'required',
            'users_data' => 'required'

        ]);

    if(!$validate){
        
        var_dump($validate);
        die();
        return redirect('/question');

        }    

        //$validate['cdf_new_senha'] = password_hash($validate['cdf_new_senha'], PASSWORD_DEFAULT);
        $created = create('cdf_users_answer', $validate);


        if(!$created){
            setFlash('message', 'ocorreu um erro ao cadastrar, tente novamente em alguns segundos');
            return redirect('/question');
        }

    return redirect('/question/answer');

    }

}