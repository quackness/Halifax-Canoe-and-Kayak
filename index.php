<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css" type="text/css" />
  <title>Admin Index Page</title>
</head>

<body>

  <?php
  session_start();

  // if (isset($_POST['role'])) {
  //   $_SESSION['role'] = $_POST['role'];
  // }

  // if (isset($_SESSION['role'])) {
  //   if ($_SESSION['role'] == 'admin') {
  //     header("location: new-account.php");
  //   }
  //   if ($_SESSION['role'] == 'ceo') {
  //     header("location: need-help.php");
  //   }
  //   if ($_SESSION['role'] == 'manager') {
  //     header("location: lost-password.php");
  //   }
  // }
  ?>

  <div>
    <form method="post" action="">
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
</body>

</html>