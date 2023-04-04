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
  <?php include "header.php"; ?>
  <div style="
        width: 1200px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 130px;
      ">

  
    <?php

    if (isset($_POST['role'])) {
      $_SESSION['role'] = $_POST['role'];
      printf('<h2>Hello, ' . $_SESSION['role'] . '</h2>');
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
      if ($_SESSION['role'] == 'ceo') {

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

</body>

</html>