<?php
    $username=$_POST["username"];
    $password=$_POST["password"];    

    $usersJson = file_get_contents('users.json');
    $userList = json_decode($usersJson, true);

    $success = false;

    foreach ($userList['users'] as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            $success = true;
            break;
        }
    }

    if ($success) {
        session_start();
        $_SESSION['username'] = $username; 
        header("Location: ../pages/home.php");
        exit();
    }
    else {
        header("Location: ../pages/login.php?error=1");
        exit();
    }
?>