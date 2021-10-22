<?php

namespace app\controllers;

class Question

{

    public function show($params)
    {

    	$cdf_users_answer = all('cdf_users_answer');
    	return [
    		'view' => 'question',
    		'data' => ['title' => 'CDF NEW - Question', 'cdf_users_answer' => $cdf_users_answer]
    	];


    }

    public function resp()
    {
        
    }

}
