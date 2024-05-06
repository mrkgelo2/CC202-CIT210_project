<?php 
include("../db/connect.php");

if (isset($_POST['add_blotter_btn'])) {
    $complainant = $_POST["blotter_complainant"];
    $victim = $_POST["blotter_victims"];
    $type = $_POST["blotter_type"]; // Corrected typo here
    $respondent = $_POST["blotter_respondent"]; // Corrected typo here
    $location = $_POST["blotter_location"];
    $date = $_POST["blotter_date"];

    $save = "INSERT INTO blotter (blotter_complainant, blotter_victim, blotter_type, blotter_respondent, blotter_location, blotter_date) 
    VALUES (:blotter_complainant, :blotter_victim, :blotter_type, :blotter_respondent, :blotter_location, :blotter_date)";

    $saveBlotter = $conn->prepare($save);
    $data = [
        ":blotter_complainant" => $complainant,
        ":blotter_victim" => $victim,
        ":blotter_type" => $type,
        ":blotter_respondent" => $respondent,
        ":blotter_location" => $location, // Corrected variable name here
        ":blotter_date" => $date,
    ];
    $saveBlotter->execute($data);

    if ($saveBlotter) {
        header("Location: ../blotterrep.php");
        exit(0);
    } else {
        header("Location: ../blotterrep.php");
        exit(0);
    }
}
?>
