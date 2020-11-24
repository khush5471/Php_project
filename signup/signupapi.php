<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
require '../conn.php';
require './signupdb.php';

$database = new Database();
$db = $database->getDbConnection();

$objSignup = new SignupUser($db);


if (isset($_POST['name'], $_POST['email'], $_POST['password'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];



    if (empty($name)) {
        echo json_encode(array('message' => 'Please enter Name.', 'status' => '2'));
    } else if (strlen($name) <= 1) {
        echo json_encode(array('message' => 'Enter name should be atleast 2 characters', 'status' => '2'));
    } else if (empty($email)) {
        echo json_encode(array('message' => 'Please enter Email.', 'status' => '2'));
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(array('message' => 'Invalid Email address.', 'status' => '2'));
    } else if (empty($password)) {
        echo json_encode(array('message' => 'Please enter Password.', 'status' => '2'));
    } else if (strlen($password) < 5) {
        echo json_encode(array('message' => 'Password should be atleast 5 characters', 'status' => '2'));
    } else if ($objSignup->getRegisteredUsers($email)) {
        echo json_encode(array('message' => 'Email already exists', 'status' => '2'));
    } else {
        return $objSignup->registerUserAndSaveToDb($name, $email, $password);
    }

//    $objSignup->registerUserAndSaveToDb($name, $email, $password);
}


