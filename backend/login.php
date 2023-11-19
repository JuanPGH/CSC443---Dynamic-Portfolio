<?php
    $username=$_POST["username"];
    $password=$_POST["password"];    

    $usersJson = file_get_contents('../resources/users.json');
    $userList = json_decode($usersJson, true);

    $success = false;
    $fullname = "";

    foreach ($userList['users'] as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            $success = true;
            $fullname = $user['fullname'];
            break;
        }
    }

    if ($success) {
        session_start();
        $_SESSION['fullname'] = $fullname; 
        header("Location: ../pages/home.php");
        exit();
    }
    else {
        header("Location: ../pages/login.php?error=1");
        exit();
    }
?>