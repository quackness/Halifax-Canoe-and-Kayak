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

    <?php

    if (isset($_POST['newAccount'])) {
      $_SESSION['newAccount'] = $_POST['newAccount'];
      if (isset($_SESSION) == 'newAccount') {
        printf("<br><h3>New account has been created</h3>");
     
      }
    }


    if (isset($_POST['lostpassword'])) {
      $_SESSION['lostpassword'] = $_POST['lostpassword'];
      if (isset($_SESSION) == 'lostpassword') {
        printf("<br><h3>Your password has been reset.</h3>
       ");
   
      }
    }
    ?>
  </div>
  <?php include "footer.php"; ?>
</body>

</html>