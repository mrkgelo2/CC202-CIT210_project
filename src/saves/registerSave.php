<?php 
    require_once("../db/connect.php");

    $save = 'INSERT INTO user (user_firstname,user_lastname,user_email,user_password)
    VALUES (:user_firstname, :user_lastname, :user_email, :user_password)';

    $saveUser = $conn -> prepare($save);
    $saveUser->bindParam(':user_firstname', $_POST['user_firstname']);
    $saveUser->bindParam(':user_lastname', $_POST['user_lastname']);
    $saveUser->bindParam(':user_email', $_POST['user_email']);
    $saveUser->bindParam(':user_password', $_POST['user_password']);
    $saveUser -> execute();

    echo"
        <script>
        alert('registered');
        location.replace('../login.php');
        </script>
    ";
?>
