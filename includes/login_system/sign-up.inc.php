<?php

if($_SERVER['REQUEST_METHOD'] === "POST") {
    $usernameEmail = $_POST['usernameEmail'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user_acc_tbl WHERE 'username-email' = '$usernameEmail'";
    $result = $conn->query($sql);

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $birthdate = $_POST['birthdate'];

    while ($row = $result->fetch_assoc()) {
        if ($usernameEmail === $row['username-email']) {
            echo "Account already exists";
            die();
        }
    }

    $hashPassword = hash_password($password);

    $sql = "INSERT INTO user_acc_tbl (fname, mname, lname, gender, age, birthdate, `username-email`, password) VALUES ('$fname', '$mname', '$lname', '$gender', '$age', '$birthdate','$usernameEmail','$hashPassword')";

    if ($conn->query($sql)) {
        echo "Added Successfully";
    } else {
        die("Adding error");
    }

}