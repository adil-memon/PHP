<?php

session_start();

if ($_SESSION['login_user']==true) {
    echo "Welcome ".$_SESSION['login_user'];
}

else {
    header("Location:index.html");
}

?>
