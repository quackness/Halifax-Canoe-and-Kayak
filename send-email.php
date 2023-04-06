<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css" type="text/css" />
  <title>Send email</title>
</head>

<body>
  <?php include "header.php"; ?>

  <div style="
        width: 500px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 140px;
      ">

 <?php include "buttonToLogout.php"; ?> 

    <?php

    if (isset($_GET['newAccount'])) {
      $_SESSION['newAccount'] = $_GET['newAccount'];
      $_SESSION['message'] = $_GET['message'];
      if (isset($_SESSION) == 'newAccount') {
        printf("<br><h3>New account request sent:</h3>
        " . $_SESSION['message']);
       }
     }


    if (isset($_GET['lostPassword'])) {
      $_SESSION['lostpassword'] = $_GET['lostPassword'];
      $_SESSION['message'] = $_GET['message'];
      if (isset($_SESSION) == 'lostPassword') {
        printf("<br><h3>Password reset request sent:</h3>
       " . $_SESSION['message']);
      }
    }
    ?>
  </div>
  <?php include "footer.php"; ?>
