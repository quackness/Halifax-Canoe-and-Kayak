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
      if (isset($_SESSION) == 'newAccount') {
        printf("<div class='btn-logout'>
        <form method='post' action='logout.php' >
              <button type='submit' name='logout'>Logout</button>
        </form>
        </div>");
      }
    }


    if (isset($_GET['lostPassword'])) {
      $_SESSION['lostpassword'] = $_GET['lostPassword'];
      if (isset($_SESSION) == 'lostPassword') {
        printf("<br><h3>Your password has been reset.</h3>
       ");

      }
    }
    ?>
  </div>
  <?php include "footer.php"; ?>
</body>

</html>