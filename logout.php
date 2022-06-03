<?php
session_start();

unset($_SESSION['verified_user_id']);
unset($_SESSION['idTokenString']);

if (isset($_SESSION['expiry_status'])) {
    $_SESSION['status'] = "sess expired";
}

else {
    $_SESSION ['status'] = "bye";
}

header ('Location: index.php');
exit ();

?>