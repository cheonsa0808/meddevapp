<?php
session_start();
include ('dbcon.php');

if (isset($_POST['register_btn'])) { //get values from form
    $fullname = $_POST ['full_name'];
    $phone = $_POST ['phone'];
    $email = $_POST ['email'];
    $password = $_POST ['password'];

    $userProperties = [ //values to set to auth
        'email' => $email,
        'emailVerified' => false,
        'phoneNumber' => $phone,
        'password' => $password,
        'displayName' => $fullname,
    ];

    $postData = [ //values to set to realtime
        'email' => $email,
        'phoneNumber' => $phone,
        'displayName' => $fullname,
    ];
    
    $createdUser = $auth->createUser($userProperties); //create w/ auth

    $uid = $verifiedIdToken->claims()->get('sub');
    $user = $auth->getUser($uid);

    $postRef_result= $database->getReference('/user/' .$user)->push($postData); //


    if ($createdUser) {
        $_SESSION['status'] = "User Created Successfully";
        header('Location: register.php');
        exit();
    }

    else {
        $_SESSION['status'] = "User Not Created";
        header('Location: register.php');
        exit();
    }
}

?>