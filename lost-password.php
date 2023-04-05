<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Lost password</title>
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
    <form method="get" action="send-email.php">
    <div class="mb-3">
      <label for="email">Your email:</label>
      <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
      <label for="message">Your message:</label>
      <textarea name="message" id="message" class="form-control"></textarea>
    </div>
      <input type="hidden" name="lostPassword" value="lostPassword">
      <input type="submit" name="submit" value="Reset password" class="btn btn-primary" style="background-color:#818abf">
    </form>
  </div>

  <?php include "footer.php"; ?>
</body>

</html>