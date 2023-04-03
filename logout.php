<?php 
session_start();
$_SESSION['username'] = 'Karolina';
echo "\n";
$_SESSION = [];
session_destroy();
echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Session destroyed';
?>


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
  <!-- <?php include "header.php"; ?> -->


  <div class="logout-p">
    <p>You have been logged out</p>
  </div>
    
  <?php include "footer.php"; ?>
</body>
</html>


