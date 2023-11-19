<?php
    $fullname=$_POST["fullname"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sex=$_POST["sex"];
    $birthdate=$_POST["birthdate"]; 

    $usersJson = file_get_contents('../resources/users.json');
    $userList = json_decode($usersJson, true);

    foreach ($userList['users'] as $user) {
        if ($user['username'] === $username) {
            header('Location: ../pages/signup.php?error=2');
            exit();
        }
    }

    $newUser = [
        'fullname' => $fullname,
        'username' => $username,
        'password' => $password,
        'sex' => $sex,
        'birthdate' => $birthdate,
    ];

    $userList['users'][] = $newUser;

    file_put_contents('../resources/users.json', json_encode($userList, JSON_PRETTY_PRINT));

    session_start();
    $_SESSION['username'] = $username; 
    header('Location: ../pages/home.php');
?>