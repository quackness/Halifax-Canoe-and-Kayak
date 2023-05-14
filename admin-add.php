<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="main.css" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <title>Admin Index Page</title>
</head>

<body>
  <?php include "header.php"; ?>
  <div style="
        width: 500px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 250px;
      ">


    <?php
    $heading = $POST['heading'];
    $tripdate = $POST['tripdate'];
    $duration = $POST['duration'];
    $summary = $POST['summary'];

    echo "$heading . $tripdate . $duration . $summary";

    ?>

    <form method="post" action="admin-confirm.php ">
      <div class="mb-3">
        <label for="heading">Heading:</label><br>
        <input type="text" id="heading" name="heading" class="form-control"><br>
      </div>
      <div class="mb-3">
        <label for="tripdate">Trip date:</label><br>
        <input type="date" value="YYYY-MM-DD" name="tripdate" />
      </div>
      <div class="mb-3">
        <label for="duration">Duration:</label><br>
        <input type="text" id="duration" name="duration" class="form-control"><br>
      </div>
      <div class="mb-3">
        <label for="summary">Summary:</label><br>
        <input type="text" id="summary" name="summary" class="form-control"><br>
      </div>
      <input type="hidden" name="formSubmitted" value="formSubmitted">
      <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="background-color:#818abf">
    </form>
    <!-- </div>

  </div> -->

    <?php include "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>