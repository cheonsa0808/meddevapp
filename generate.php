<h1>Enter to Device:</h1> 

<?php
  function generateRandomString($length=10){ 
      return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',ceil($length/strlen($x)))),1,$length);
    }
?>

<p><strong><?php echo generateRandomString();?></strong></p>