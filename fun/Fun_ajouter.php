<?php

include("../conecte.php");

if (isset($_POST[''
'']) && isset($_POST['Password']) && isset($_POST['submit']) && isset($_POST['Email'])) {
    $username = $_POST['Username'];
    $pass = $_POST['Password'];
    $email = $_POST['Email'];
    if (!empty($username) && !empty($pass) && !empty($email)) {

        $req = "INSERT INTO user (loginUser,passwordUser,emailUser) VALUES ('$username','$pass','$email')";

        $sql = mysqli_query($con, $req);

    } else {
        header("location:../log/enregistre.php");
        echo "un elemnt est vide";
    }
}


// echo "passe avec succe";
// header("location:../log/enregistre.php");



?>