<?php
require_once "../db/connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['user_email']) && isset($_POST['user_password'])) {
        $email = $_POST['user_email'];
        $password = $_POST['user_password'];

        $stmt = $conn->prepare("SELECT * FROM user WHERE user_email = :user_email AND user_password = :user_password");
        $stmt->bindParam(':user_email', $email);
        $stmt->bindParam(':user_password', $password);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            header("Location: ../home.php");
            exit();
        } else {
            echo "Invalid username or password!";
        }
    } else {
        echo "Email or password is not set!";
    }
}

?>
