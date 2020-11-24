<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SignupUser {

    private $conn;
    private $table = "resturl";
    public $id;
    public $name;

    public function __construct($db) {
        $this->conn = $db;
    }

    //Read data from database
    public function registerUserAndSaveToDb($name, $email, $password) {
        $sqlInsert = "INSERT INTO users (name, email, password) VALUES ('$name','$email','$password')";

//        if ($result->num_rows > 0) {
////        
//            while ($row = $result->fetch_assoc()) {
//                echo '<p></p>'.$row["name"];
//            }
//        }

        $result = 2;
        if ($this->conn->query($sqlInsert) === true) {
//            echo '<h2>User created successfullys</h2>';
            $result = 1;
            echo json_encode(array('message' => 'User registered successgully ', 'status' => '1'));
        } else {
//            echo '<h2>Error inserting user </h2>' . $this->conn->error;
//            echo json_encode($cat_arr);
            echo json_encode(array('message' => 'User not registered ', 'status' => '2'));
        }
        return $result;
    }

    public function getRegisteredUsers($email) {
        $sql = "SELECT email FROM users";
        $result = $this->conn->query($sql);

        $ifExists = false;

        if ($result->num_rows > 0) {
//        
//            while ($row = $result->fetch_assoc()) {
//                echo '<p></p>'.$row["name"];
//            }
            while ($row = $result->fetch_assoc()) {
                if (strcmp($row["email"], $email) == 0) {
                    $ifExists = true;
                }
            }
        } else {
            echo 'NO RREEEE';
        }

        return $ifExists;
    }

}
