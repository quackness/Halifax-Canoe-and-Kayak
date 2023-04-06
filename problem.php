<?php 
header("Expires: Sat, 01 Jan 2025 00:00:00 GMT"); 
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT"); 
header("Cache-Control: post-check=0, pre-check=0",false); 
session_cache_limiter("must-revalidate"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css" type="text/css" />
  <title>Problem</title>
</head>

<body>
  <?php include "header.php"; ini_set('display_errors', 1); ?>
  <div style="
        width: 1200px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 130px;
      ">
      <?php include "buttonToLogout.php"; ?>

    <?php
    if (isset($_POST['fname']) && isset($_POST['lname'])) {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      if (!$fname || !$lname) {
        printf("You must specify both your firstname and lastname.");
        printf("<br><a href=index.php>Return to home page </a>");
        exit();
      }
    }

    if (isset($_POST['title'])) {
      $title = $_POST['title'];
    }


    if (isset($_POST['role'])) {
      $_SESSION['role'] = $_POST['role'];
      printf('<h2>Hello '. $title . '. '. $fname . ', you are logged in as '. $_SESSION['role'] . '</h2>');
    } else {
      printf('<h2>You have clicked back</h2>');
    }

    ?>
    <hr>
    <h3>Here are your options:</h3>

    <?php
    if (isset($_SESSION['role'])) {
      if ($_SESSION['role'] == 'admin') {
        printf("<br><a href=isnt-working.php>My computer isn't working</a>
      <br><a href=new-account.php>Create new account</a>
      ");
      }
      if ($_SESSION['role'] == 'CEO') {

        printf("<br><a href=isnt-working.php>My computer isn't working</a>
      <br><a href=need-help.php>Call someone and get help</a>
      ");
      }
      if ($_SESSION['role'] == 'manager') {

        printf("<br><a href=isnt-working.php>My computer isn't working</a>
      <br><a href=lost-password.php>Forgotten password</a>
      ");

      }
    }
    ?>
  </div>
  <?php include "footer.php"; ?>