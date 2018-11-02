<?php
session_start();
$errors = array();

if (isset($_POST['login'])) {
  $email = strip_tags($_POST["email"]);
  $password = strip_tags($_POST["password"]);
if ($email && $password) {
    $connect = mysqli_connect("localhost", "root", "") or die("Error connecting");
    mysqli_select_db($connect, "astorweb") or die("Could not find db");

    $query2 = mysqli_query($connect, "SELECT * FROM user WHERE email='$email'");
    $numrow = mysqli_num_rows($query2);

    if ($numrow != 0) {
        while ($row = mysqli_fetch_assoc($query2)) {
          $dbemail = $row['email'];
          $dbpassword = $row['password'];
        }

        if ($email==$dbemail && $password==$dbpassword) {
          $_SESSION['success'] = "Success!";
          $_SESSION['email'] = $email;

        }
        else {
            echo "Sorry $email. Incorrect password!";
        }
    }
  }
}

    if (isset($_GET['logout'])) {
    	session_destroy();
    	unset($_SESSION['email']);
    	header('location: index.php');
    }



?>
