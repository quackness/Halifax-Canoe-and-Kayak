<?php include "header.php"; ?>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
  integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
<?php include "footer.php"; ?>

</html>