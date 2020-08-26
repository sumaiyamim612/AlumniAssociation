<?php
require('config.php');
// If form submitted, insert values into the database.
// var_dump($_REQUEST);
// die;
if (isset($_POST['user'])){
        // removes backslashes
        //escapes special characters in a string
 $email = stripslashes($_POST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_POST['password']);
 $password = mysqli_real_escape_string($con,$password);
//  $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `login_info` (Email, Password)
VALUES (".md5($password)."', '$email')";
        $result = mysqli_query($con,$query);
        if($result){
          echo "<script>
            alert('Login Done!');
            window.location.href='../profile.html';
          </script>";
        }

    }
?>
