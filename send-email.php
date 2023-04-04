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
  <?php session_start();

  if (isset($_POST['customeremail'])) {
    $_SESSION['customeremail'] = $_POST['customeremail'];
  }

  if (isset($_SESSION) == 'customeremail') {
    printf("<br><p>New account has been created</p>
     ");
  }




  ?>

</body>

</html>