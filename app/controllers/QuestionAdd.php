<?php

namespace app\controllers;

class QuestionAdd

{

/*    public function show($params)
   {
        if (!isset($params['questions'])) {//user esta em router e routes
           return redirect('/');
        }
       //Tabela, id,
        $answers = findBy('cdf_users_answer', 'users_id', $params['questions'], 'users_id, users_answer' );
        $perguntar = "CDF NEW ".$answers->users_answer;
        return [
        'view' => 'questionAdd.php',
        'data' => ['title' => $perguntar, 'cdf_users_answer' => $answers]
        ];

   }

*/

      public function subcategoria()
   {


    $subcateg = all('cdf_sub_category', 'id_sub_category, name_sub_category' );

    echo json_encode($subcateg);

   }



    public function questionAddNew(){
        return[
            'view' => 'questionAdd',
            'data' => ['title' => 'CDF NEW - Create Evidences']
        ];
    }



    public function estudent($params){


        if (!isset($params['estudent'])) {//user esta em router e routes
           return redirect('/');
        }
       //Tabela, id,
        $subcategoria = findBy('cdf_sub_category', 'id_sub_category', $params['estudent'], 'id_sub_category, name_sub_category' );

        $categoria = findBy('cdf_category', 'id_category', $params['estudent'], 'id_category, name_category' );


        $estudentTitle = "CDF NEW - ".$subcategoria->name_sub_category;

        return[
            'view' => 'tests_online',
            'data' => ['title' => $estudentTitle, 'subcategoria' => $subcategoria, 'categoria' => $categoria]
        ];
    }

 
    public function estudents($params){



        if (!isset($params['estudents'])) {//user esta em router e routes
           return redirect('/');
        }
       //Tabela, id,


        $estudents = findBy('cdf_new_question', 'id_sub_question', $params['estudents'], 'id_sub_question, id_sub_question');
        
        if(!$estudents->id_sub_question):
           return redirect('/');
        endif;

       $titles = findBy('cdf_sub_category', 'id_sub_category', $params['estudents'], 'name_sub_category, name_sub_category');
        $estudent = "CDF NEW - ".$titles->name_sub_category;



        return[
            'view' => 'school_online',
            'data' => ['title' => $estudent, 'aulas' => $estudents, 'titles' => $titles]
        ];
    }





    //method post
    public function questionAdd(){

    $id_control_answer = $_POST['id_control_answer'];
    $name_answer = $_POST['name_answer_1'];
    $status_answer = $_POST['status_answer'];
    $data_answer = $_POST['data_answer'];

    $connect = connect();

    $stmt = $connect->prepare("INSERT INTO cdf_new_answer (id_control_answer, name_answer_1, status_answer, data_answer) VALUES (:id_control_answer, :name_answer_1, :status_answer, :data_answer)");


        foreach ($name_answer as $value => $key) {


            $stmt->bindValue(':id_control_answer', $id_control_answer);
            $stmt->bindValue(':name_answer_1', $key);
            $stmt->bindValue(':status_answer', $status_answer);
            $stmt->bindValue(':data_answer', $data_answer);
            $stmt->execute();


        }

        $validate = validate([

            'name_question' => 'required',
            'data_question' => 'required'
        ]);


        //Table One
        if(!$validate){
            echo "Error";
            var_dump($validate);
            die();
            return redirect('/question');

            }    

        //$validate['cdf_new_senha'] = password_hash($validate['cdf_new_senha'], PASSWORD_DEFAULT);
        $created = create('cdf_new_question', $validate);


        if(!$created){
            var_dump($created);
            die();
            setFlash('message', 'ocorreu um erro ao cadastrar, tente novamente em alguns segundos');
            return redirect('/question');
        }


    return redirect('/question/add');

    }

}