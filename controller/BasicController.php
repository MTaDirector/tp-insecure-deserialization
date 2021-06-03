<?php

$mysqli = new mysqli("localhost", "root", '', "tp_insecure_deserialization");

if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

include_once './model/User.php';

if (isset($_POST['ident']) && !empty($_POST['ident']) && isset($_POST['pwd']) && !empty($_POST['pwd'])) {
    $user = new User();
    $user
        ->setUsername($_POST['ident'])
        ->setMdp($_POST['pwd'])
        ->setIsAdmin(false);

    setcookie("session", serialize($user), time()+3600);

    include_once './view/home.php';
} else if(isset($_COOKIE['session']) && !empty($_COOKIE['session'])) {
    $user = unserialize($_COOKIE['session']);

    if (isset($_POST['important_data']) && !empty($_POST['important_data'])) {
        $mysqli->multi_query("INSERT INTO `extremely_important_data` (`value`) VALUES ('".$_POST['important_data']."');");
    }

    include_once './view/home.php';
} else {
    include_once './view/login.php';
}
?>
