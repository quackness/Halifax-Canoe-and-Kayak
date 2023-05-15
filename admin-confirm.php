<body>
  <?php include "header.php"; ?>
  <div style="
        width: 500px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 250px;
      ">
  </div>

  <?php
  $heading = $_POST['heading'];
  $tripdate = $_POST['tripdate'];
  $duration = $_POST['duration'];
  $summary = $_POST['summary'];

  // echo "$heading  $tripdate  $duration  $summary ";
  
  $sql = "INSERT INTO adventures(summary, tripdate, duration, summary)
  -- (summary, tripdate, duration, summary)
  VALUES ('$heading', '$tripdate', '$duration', '$summary ')";

  if (mysqli_query($conn, $sql)) {
    echo "<h3>Date has been added successfully to a database.</h3>";
  } else {
    echo "error " . $sql . " " . mysqli_error($conn);

  }

  ?>
  <div>
    <h1>Admin - Confirm</h1>
    <hr>
    </hr>
    <h3>Date has been added successfully to a database.</h3>
    <h2><a href="/assignments/kayak_club/all-adventures.php">View All Adventures</h2>
  </div>

  <?php include "footer.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>