<?php // continue.php
  session_start();

  if (isset($_SESSION['username']))
  {
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $forename = $_SESSION['forename'];
    $surname  = $_SESSION['surname'];

    echo "Welcome back $forename.<br>
          Your full name is $forename $surname.<br>
          Your username is '$username'
          and your password is '$password'.";
  }
  else echo "Please <a href=authenticate2.php>click here</a> to log in.";
?>