<!-- residentsSave.php -->
<?php
include("../db/connect.php");

if (isset($_POST['add_resident_btn'])) {
    $firstname = $_POST["resident_firstname"]; 
    $lastname = $_POST["resident_lastname"];
    $gender = $_POST["resident_gender"];
    $dob = $_POST["resident_dob"];
    $civilstatus = $_POST["resident_civilstatus"];
    $project = $_POST["resident_project"];
    $contact= $_POST["resident_contactnumber"];
    $householdnumber = $_POST["resident_householdnumber"];

    $save = "INSERT INTO resident (resident_firstname, resident_lastname, resident_gender, resident_dob, resident_civilstatus, resident_project, resident_contact, resident_householdnumber) 
    VALUES (:resident_firstname, :resident_lastname, :resident_gender, :resident_dob, :resident_civilstatus, :resident_project, :resident_contact, :resident_householdnumber)";

    $saveResident = $conn->prepare($save);
    $data = [
        ":resident_firstname" => $firstname,
        ":resident_lastname" => $lastname,
        ":resident_gender" => $gender,
        ":resident_dob" => $dob,
        ":resident_civilstatus" => $civilstatus,
        ":resident_project" => $project,
        ":resident_contact" => $contact,
        ":resident_householdnumber" => $householdnumber
    ];
    $saveResident->execute($data);

    if ($saveResident) {
        header("Location: ../residents.php");
        exit(0);
    } else {
        header("Location: ../residents.php");
        exit(0);
    }
}
?>
