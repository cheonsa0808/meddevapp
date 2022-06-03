<?php
    session_start();
    include ('dbcon.php');

    if (isset($_SESSION['verified_user_id'])) {

        $uid = $_SESSION['verified_user_id'];
        $idTokenString = $_SESSION['idTokenString'];

        try {
            $verifiedIdToken = $auth->verifyIdToken($idTokenString);
            // echo "working";
        } catch (InvalidToken $e) {
            // echo 'The token is invalid: '.$e->getMessage();
            $_SESSION ['status']= "login to access this page";
            header ('Location: logout.php');
            exit();
        } catch (\InvalidArgumentException $e) {
            echo 'the token could not be parsed' .$e -> getMessage();
            $_SESSION ['status']= "login to access this page";
            header ('Location: logout.php');
            exit();
        }

        $uid = $verifiedIdToken->claims()->get('sub');

        $user = $auth->getUser($uid);
    }

    else{
        $_SESSION ['status']= "login to access this page";
        header ('Location: login.php');
        exit();
    }
?>