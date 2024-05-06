<?php 
include("../db/connect.php");

if (isset($_POST['add_official_btn'])) {
    $firstname = $_POST["official_firstname"];
    $lastname = $_POST["official_lastname"];
    $gender = $_POST["official_gender"];
    $position = isset($_POST["official_position"]) ? $_POST["official_position"] : null;
    $dob = $_POST["official_dob"];
    $project = isset($_POST["official_project"]) ? $_POST["official_project"] : null;

    $save = "INSERT INTO officials (official_firstname, official_lastname, official_gender, official_position, official_dob, official_project) 
    VALUES (:official_firstname, :official_lastname, :official_gender, :official_position, :official_dob, :official_project)";

    $saveOfficial = $conn->prepare($save);
    $data = [
        ":official_firstname" => $firstname,
        ":official_lastname" => $lastname,
        ":official_gender" => $gender,
        ":official_position" => $position,
        ":official_dob" => $dob,
        ":official_project" => $project
    ];
    $saveOfficial->execute($data);

    if ($saveOfficial) {
        header("Location: ../officials.php");
        exit(0);
    } else {
        header("Location: ../officials.php");
        exit(0);
    }
}
?>
