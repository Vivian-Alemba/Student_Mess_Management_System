<?php
// start the session
session_start();
if(isset($_SESSION['user'])) header('location: dashboard.php');

$error_message = '';

if ($_POST) {
    include('database/connection.php');
   
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = 'SELECT * FROM users WHERE users.email= "'. $username .'" AND users.password= "'. $password .'"';
    $stmt = $conn->prepare($query);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $user = $stmt->fetchAll()[0];
        
        $_SESSION['user'] = $user;

        header('location: dashboard.php');
    

    }else $error_message = 'Please check to make sure that the username and password are correct.';

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS Login - Student Mess Management System</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body id="LoginBody">
    <?php if(!empty($error_message)) { ?>
         <div id="errorMessage">
            <p><strong>Check Error: </strong> <?= $error_message ?></p>
        </div>
    <?php } ?>

    <div class="container">
        <div class="loginHeader">
            <h1>SMMS</h1>
            <p>Mess Management System</p>
        </div>
        <div class="loginBody">
            <form action="login.php" method="POST">
                <div class="loginInputContainer">
                    <label for="">Username</label>
                    <input placeholder="Your Username" name="username" type="text" />
                </div>
                <div class="loginInputContainer">
                    <label for="">Password</label>
                    <input placeholder="Your Password" name="password" type="password" />
                </div>
                <div class="loginButtonContainer">
                    <button>Sign In</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>