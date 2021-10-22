<?php

namespace app\controllers;


class Resp
{

    public function show($params)
    {
        if (!isset($params['resp'])) {//user esta em router e routes
            return redirect('/');
        }
        //Tabela, id,
        $answers = findBy('cdf_users_answer', 'users_id', $params['resp'], 'users_id, users_answer' );
        var_dump($answers);
        die();
    }

    public function create(){
        return[
            'view' => 'create',
            'data' => ['title' => 'CDF NEW - Create']
        ];
    }

    public function store(){

        $validate = validate([

            'title_question' => 'title:unique:admin_secret_users',
            'question_1' => 'required',
            'question_2' => 'required',
            'question_3' => 'required',
            'question_4' => 'required',
            'question_5' => 'required',
            'graduate_question' => 'required',
            'nivel_question' => 'required',
            'status_question' => 'required',
            'data_question' => 'required'


        ]);

    if(!$validate){
        return redirect('/resp/create');
        }    

        $validate['senha'] = password_hash($validate['senha'], PASSWORD_DEFAULT);
        $created = create('admin_secret_users', $validate);


        if(!$created){
            setFlash('message', 'ocorreu um erro ao cadastrar, tente novamente em alguns segundos');
            return redirect('/resp/create');
        }

    return redirect('/');

    }

}