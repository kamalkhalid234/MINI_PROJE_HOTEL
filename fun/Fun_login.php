<?php

include("../conecte.php");

if (isset($_POST['Username']) && isset($_POST['Password']) && isset($_POST['submit'])) {
    if (!empty($_POST['Username']) && !empty($_POST['Password'])) {

        $req = "SELECT * FROM  user ";
        $sql = mysqli_query($con, $req);
        $data = mysqli_fetch_assoc($sql);

        if ($data['loginUser'] == $_POST['Username'] && $data['passwordUser'] == $_POST['Password']) {
            header("location:../index.php");
        } else {
            header("location:../log/login.php");
            echo "<span>error</span>";
        }
    }
}



?>