<?php
require('config.php');
// If form submitted, insert values into the database.
// var_dump($_REQUEST);
// die;
if (isset($_POST['register-user'])){
        // removes backslashes
 $username = stripslashes($_POST['name']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $id = stripslashes($_POST['id']);
 $id = mysqli_real_escape_string($con,$id);
 $email = stripslashes($_POST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_POST['password']);
 $password = mysqli_real_escape_string($con,$password);
//  $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `registration_info` (Name, Id, Password, Email)
VALUES ('$username', '$id', '".md5($password)."', '$email')";
        $result = mysqli_query($con,$query);
        if($result){
          echo "<script>
            alert('Registration Done!');
            window.location.href='../login.html';
          </script>";
        }

    }
?>
