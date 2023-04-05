<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css" type="text/css" />
  <title>Logout</title>
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
    $_SESSION['username'] = 'Karolina';
    echo "\n";
    $_SESSION = [];
    session_destroy();
    echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Session destroyed';
    printf("<br><h3>You have been logged out.</h3>
<br><h3><a href=index.php>Return to the home page 🔙 </a></h3>")
      ?>
  </div>
  <?php include "footer.php"; ?>
</body>
</html>