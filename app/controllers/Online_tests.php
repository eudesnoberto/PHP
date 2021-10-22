<?php

namespace app\controllers;


class Online_tests
{



    public function show($params)
    {

        $pergunta = all('cdf_new_answer');
        return [
            'view' => 'online_tests',
            'data' => ['title' => 'CDF NEW', 'cdf_new_answer' => $pergunta]
        ];


    }

    

}
