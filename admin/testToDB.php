<?php
    include_once('DatabaseModel.php');
    //
    $a = new DatabaseModel();
    $user_array = array(
        'user'        => 'Sasha',
        'division'    => 'NDC',
        'rang'        => 'soldat',
        'posada'      => 'cadet',
        'score'       => 'array'
    );
    //      $a->insertUser($user_array);

    $test_array = array('title' => $_POST['title']);
  
  	$a->insertTest($test_array);

    //   var_dump($a->getUsers());
  //  var_dump($a->getTests());
    
        $questions_array = array(
            'title'   =>  $_POST['question'],
            'test_id' =>  $_POST['test_id'],
            'value'   =>  serialize(array($_POST['answer_1'],$_POST['answer_2'],$_POST['answer_3'],$_POST['answer_4'],$_POST['answer_5'],$_POST['answer_6'])),
            'answer'  =>  $_POST['answer']
        );
        // var_dump($questions_array);
        var_dump($_POST);
        $a->insertQuestion($questions_array);


    //    var_dump($a->getQuestions(1));

    $user_array = array(
        'score'       => serialize(array('data_1' => 'answer_2'))
    );
    $user_id =1;
    $a->updateUser($user_id,$user_array);

