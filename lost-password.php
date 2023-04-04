<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css" type="text/css" />
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
    <form method="get" action="send-email.php">
      <label for="email">Your email:</label>
      <input type="email" name="email">

      <label for="message">Your message:</label>
      <textarea name="message" id="message"></textarea>

      <input type="hidden" name="lostPassword" value="lostPassword">

      <input type="submit" name="submit" value="Send message">
    </form>
  </div>

  <?php include "footer.php"; ?>
</body>

</html>