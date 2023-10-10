<?php

if($_SERVER['REQUEST_METHOD'] === "POST") {
    $loginUsername = $_POST['login_username'];
    $loginPassword = $_POST['password'];

    $sql = "SELECT * FROM user_acc_tbl WHERE `username-email` = '$loginUsername'";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        if (password_verify($loginPassword, $row['password'])) {
            $_SESSION['id'] = $row['cust_id'];
            header("location: /sia/");
        }
    }

    echo '<span class="link-danger">Invalid credentials. Please check your login details and try again.</span>';
}
