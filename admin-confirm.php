<!-- <body> -->
<?php include "header.php"; ?>
<div style="
        width: 500px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 100px;
      ">
  <?php

  if (isset($_POST['heading'])) {
    $heading = $_POST['heading'];
  } else {
    $heading = "";
  }

  if (isset($_POST['tripdate'])) {
    $tripdate = $_POST['tripdate'];
  } else {
    $tripdate = "";
  }

  if (isset($_POST['duration'])) {
    $duration = $_POST['duration'];
  } else {
    $duration = "";
  }

  if (isset($_POST['summary'])) {
    $summary = $_POST['summary'];
  } else {
    $summary = "";
  }


  if (!$heading || !$tripdate || !$duration || !$summary) {
    printf("Some fields are empty");
    printf("<br><a href=./admin-add.php>Return to the form page </a>");
    exit();
  }

  $sql = "INSERT INTO adventures(heading, tripdate, duration, summary)
  VALUES ('$heading', '$tripdate', '$duration', '$summary ')";


  if (mysqli_query($conn, $sql)) {
    echo "<h3>Adventure has been added successfully to database.</h3>";
  } else {
    echo "error " . $sql . " " . mysqli_error($conn);
  }
  ?>
  <div>
    <h2><a href="index.php">View All Adventures</h2>
  </div>
</div>
<?php include "footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>