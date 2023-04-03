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
<h2>Hello</h2>
<hr>
<h3>Here are your options:</h3>
<?php
  session_start();

  if (isset($_POST['role'])) {
    $_SESSION['role'] = $_POST['role'];
    
  }

  if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'admin') {
      printf ("<br><a href=isnt-working.php>My computer isn't working</a>
      <br><a href=new-account.php>Create new account</a>
      ");
    }
    if ($_SESSION['role'] == 'ceo') {
      // header("location: need-help.php");
      echo "CEO";
    }
    if ($_SESSION['role'] == 'manager') {
      // header("location: lost-password.php");
      echo "manager";
    }
  }
  ?>
 
</body>
</html>