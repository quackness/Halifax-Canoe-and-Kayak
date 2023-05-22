<?php include "header.php"; ?>

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
  <header id="header_top">
    <nav>
      <ul>
        <li><img id="hamburger" src="images/hamburger.png" /></li>
        <li id="header_text">Halifax Canoe and Kayak</li>
        <li><img src="images/paddle-white.png" alt="Paddle logo" /></li>
      </ul>
    </nav>
  </header>
  <div style="
        width: 1200px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 120px;
        margin-bottom: 100px;
      ">


    <div id="sidebar" style="width: 700px; background-color: #818abf">
      <aside>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Book trip</a></li>
          <li><a href="index.php">Admin Login</a></li>
        </ul>
      </aside>
    </div>

    <main>
      <article>
        <header>
          <img src="images/canoe.jpg" alt="canoe on the lake" />
          <div class="center">Come experience Canada</div>
          <h1>Upcoming adventures</h1>
        </header>

        <hr />
        <?php
        $entries = "SELECT * FROM adventures";
        $result = mysqli_query($conn, $entries);
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<h3>" . $row['heading'] . "</h3>";
            echo "<div class='date'><p>Date: " . $row['tripdate'] . "</p></div>";
            echo "<div class='date'><p>Duration: " . $row['duration'] . " days</p></div>";
            echo "<h3>Sumary: </h3><p>" . $row['summary'] . "</p>";
            echo "<hr>";
          }
        }
        ;
        ?>
      </article>
    </main>
  </div>
  <footer class="ftr"></footer>
  <!-- //toggle jquery -->
  <script>
    $(document).ready(function () {
      $("#hamburger").click(function () {
        $("#sidebar").toggle();
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
    crossorigin="anonymous"></script>
</body>

<?php include "footer.php"; ?>

</html>