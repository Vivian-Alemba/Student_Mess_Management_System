<?php
session_start();

$table_name = $_SESSION['table'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$encrepted = password_hash($password, PASSWORD_DEFAULT);


//adding the record
try{
    $command = "INSERT INTO 
                    $table_name(first_name, last_name, email, password, created_at, updated_at)
                     VALUES 
                         ('$first_name ', '$last_name ', ' $email', '$encrepted', NOW(), NOW())";
    include('connection.php');

    $response = [
        'success' => true,
        'message' => $first_name .' '. $last_name .' '. 'successfully added to the system.'
    ];
    $conn->exec($command);

}catch (PDOException $e){
    $response = [
        'success' => false,
        'message' => $e->getMessage()
    ];

}
$_SESSION['response'] =$response;
header('location: ../users-add.php');



?>