<?php 

namespace app\controllers;


class State
{

    public function index()
    {
   
    read('cdf_category', 'id_category, name_category');

    $states = execute(); 

        echo json_encode($states);
    }
}
