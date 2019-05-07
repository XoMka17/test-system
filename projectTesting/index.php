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

    $test_array = array('title' => 'hello world');
    //  	$a->insertTest($test_array);

    //   var_dump($a->getUsers());
    //   var_dump($a->getTests());
    for($i = 1; $i < 20; $i++) {
        $questions_array = array(
            'title'   => 'question_' . $i,
            'test_id' => 1,
            'value'   => serialize(array('answer_1','answer_2','answer_3')),
            'answer'  => 1
        );

        $a->insertQuestion($questions_array);
    }


    //    var_dump($a->getQuestions(1));

    $user_array = array(
        'score'       => serialize(array('data_1' => 'answer_2'))
    );
    $user_id =1;
    $a->updateUser($user_id,$user_array);

