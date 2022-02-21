<?php
// start the session
session_start();
if(!isset($_SESSION['user'])) header('location: login.php');
$user = $_SESSION['user'];





?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard -Student Mess Management System</title>
        <link rel="stylesheet" href="css/login.css">
        <script defer src="js/all.js"></script>
    </head>
<body>
    <div id="dashboardMainContainer">
            <!-- sidebar -->
            <?php include('partials/app-sidebar.php') ?>
           
        <div class="dashboard_content_container" id="dashboard_content_container">
            <!-- topnav -->
            <?php include('partials/app-topnav.php') ?>
            <div class="dashboard_content">
                <div class="dashboard_content_main">

                </div>
            </div>
        </div>
    </div>
    <script src="javascript/script.js"></script>
    
</body>
</html>