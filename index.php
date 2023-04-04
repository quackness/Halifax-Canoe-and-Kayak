<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <link rel="stylesheet" href="main.css" type="text/css" />
  <title>Admin Index Page</title>
</head>

<body>

  <?php
  session_start();

  ?>

  <div>
    <form method="post" action="logout.php">
      <button class="btn-logout" type="submit" name="logout">Logout</button>
    </form>

    <form method="post" action="/assignments/kayak_club/problem.php">
      <label for="title">Title</label><br>
      <select id="title" name="title"><br>
        <option value="mr">Mr</option>
        <option value="ms">Mrs</option>
        <option value="miss">Miss</option>
      </select><br>
      <label for="fname">First name:</label><br>
      <input type="text" id="fname" name="fname"><br>
      <label for="lname">Last name:</label><br>
      <input type="text" id="lname" name="lname"><br>
      <label for="role">Role</label><br>
      <select id="role" name="role"><br>
        <option value="admin">Admin</option>
        <option value="manager">Manager</option>
        <option value="ceo">CEO</option>
      </select><br>
      <input type="submit" name="submit" value="Submit">
    </form>

    <div>
      <?php include "footer.php"; ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>