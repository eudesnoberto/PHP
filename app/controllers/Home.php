<?php

namespace app\controllers;

class Home

{

    public function index($params): array
    {

    $search = filter_input(INPUT_GET, 's', FILTER_SANITIZE_STRING);

    read('cdf_new_answer', 'id_answer, name_answer_1');

    if ($search) {
           search(['name_answer_1' => $search, 'name_answer_1' => $search]);
        }

    $pergunta = execute();

 
    	return [
    		'view' => 'home',
    		'data' => ['title' => 'CDF NEW', 'cdf_new_answer' => $pergunta]
    	];


    }

}
