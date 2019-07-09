<?php
include_once('mysql.php');

class DatabaseModel
{

    public $connect;

    private $division_table = "division";
    private $posada_table = "posada";
    private $q_table = "questions";
    private $test_table = "test";
    private $user_table = 'user_score';


    public function __construct()
    {
        $this->connect = new MySQL('localhost', 'root', 'root', 'teachertest');
    }


    /**
     *
     * Division table
     *
     */

    public function insertDivision(array $data)
    {

        try {
            $this->connect->insert($this->division_table, $data);
//                echo $mysql->insert_id(); // id of newly inserted post
        } catch (Exception $e) {
            return 'Caught exception: ' . $e->getMessage();
        }

    }

    public function getDivision()
    {
        try {
            $data = $this->connect->get($this->division_table);
            return $data;
        } catch (Exception $e) {
            return 'Caught exception: ' . $e->getMessage();
        }
    }


    /**
     *
     * Posada table
     *
     */

    public function insertPosada(array $data)
    {

        try {
            $this->connect->insert($this->posada_table, $data);
//                echo $mysql->insert_id(); // id of newly inserted post
        } catch (Exception $e) {
            return 'Caught exception: ' . $e->getMessage();
        }

    }

    public function getPosada()
    {
        try {
            $data = $this->connect->get($this->posada_table);
            return $data;
        } catch (Exception $e) {
            return 'Caught exception: ' . $e->getMessage();
        }
    }


    /**
     *
     * Questions table
     *
     */

    public function insertQuestion(array $data)
    {
        try {
            $this->connect->insert($this->q_table, $data);
//                echo $mysql->insert_id(); // id of new inserted post
        } catch (Exception $e) {
            return 'Caught exception: ' . $e->getMessage();
        }
    }

    public function getQuestions(int $testId, int $quantity = 10)
    {
        try {
            $data = $this->connect->where('test_id', $testId)->get($this->q_table);

            $dataOut = [];
            if (count($data) > $quantity) {
                for ($i = 0; $i < $quantity; $i++) {
                    $cutElement = rand(0, (count($data) - 1));
                    array_push($dataOut, $data[$cutElement]);
                    array_splice($data, $cutElement, 1);
                }
            } else {
                $dataOut = $data;
            }

            return $dataOut;
        } catch (Exception $e) {
            return 'Caught exception: ' . $e->getMessage();
        }
    }


    /**
     *
     * Test table
     *
     */
    public function insertTest(array $data)
    {

        try {
            $this->connect->insert($this->test_table, $data);
//                echo $mysql->insert_id(); // id of newly inserted post
        } catch (Exception $e) {
            return 'Caught exception: ' . $e->getMessage();
        }

    }

    public function getTests()
    {
        try {
            $data = $this->connect->get($this->test_table);
            return $data;
        } catch (Exception $e) {
            return 'Caught exception: ' . $e->getMessage();
        }
    }

    /**
     *
     * User table
     *
     */
    public function insertUser(array $data)
    {
        try {
            $this->connect->insert($this->user_table, $data);
//                echo $this->connect->insert_id(); // id of newly inserted post
        } catch (Exception $e) {
            return 'Caught exception: ' . $e->getMessage();
        }
    }

    public function getUsers()
    {
        try {
            $data = $this->connect->get($this->user_table);
            return $data;
        } catch (Exception $e) {
            return 'Caught exception: ' . $e->getMessage();
        }
    }

    public function updateUser(int $idUser, array $data)
    {
        try {
            $this->connect->where('id', $idUser)->update($this->user_table, $data);
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage();
        }
    }
}
