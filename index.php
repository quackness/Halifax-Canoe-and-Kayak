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
  <?php include "header.php"; ?>
  <div>
    <button class="btn-logout" type="button">Log out</button>
    <form method="post" action="/problem.php">
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