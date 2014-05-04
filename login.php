<?php
require 'db.php';
session_start();
//if the user is already logged in, redirect them back to homepage
  if(isset($_SESSION["user"])) {
    header("Location: ./index.php");
    exit();
  }
  else {
    //if the user have entered both entries in the form, check if they exist in the database
    if($stmt=$mysqli->prepare("Select email, firstName from users where email= ? and pass= ?")){
      $password = md5($_POST["password"]);
      $email = $_POST["email"];
      $stmt->bind_param("ss", $email, $password);
      $stmt->execute();
      $stmt->bind_result($user, $fName);
      if($stmt->fetch()){

        if($user){
	
          $_SESSION["user"]=$user;
          $_SESSION["fName"]=$fName;
          $_SESSION["REMOTE_ADDR"] = $_SERVER["REMOTE_ADDR"];
          $stmt->close();
          $mysqli->close();
          header("Location: ./index.php");
          exit();
        }
        else{
          //User Doesn't Exist
          $error = "Your username or password is incorrect. Please try again";
            $_SESSION["loginError"]=$error;
            $stmt->close();
            $mysqli->close();
            header("Location: ./index.php");
            exit();
        }
      }
    }
  }
?>