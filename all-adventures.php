<?php include "header.php"; ?>

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
      </article>
      <hr />
      <h2>Halifax</h2>
      <div class="date">
        <p>Date: 2023-04-12</p>
        <p>Duration:
          <?php $duration ?>
        </p>
      </div>
      <h3>Summary</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget risus
        nibh. Quisque feugiat, urna eget lacinia tincidunt, ipsum orci
        pellentesque felis, nec dapibus urna metus eu quam. Curabitur vitae
        semper risus. Suspendisse vel ligula aliquam, rutrum elit et, iaculis
        nisi. Nam eu nisl eget felis suscipit commodo. Vivamus in pharetra ex.
        Vivamus ac semper nibh. Etiam sed viverra elit, vel lacinia ante. Nunc
        tempus placerat mauris a lobortis. Duis tincidunt lacus in accumsan
        molestie. Quisque et laoreet velit. Aenean vestibulum mattis augue, id
        laoreet augue imperdiet ornare.
      </p>
      <h2>Sydney</h2>
      <div class="date">
        <p>Date: 2023-05-10</p>
        <!-- <p>Duration: 2 days</p> -->
      </div>
      <h3>
        <h3>Summary</h3>
      </h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget risus
        nibh. Quisque feugiat, urna eget lacinia tincidunt, ipsum orci
        pellentesque felis, nec dapibus urna metus eu quam. Curabitur vitae
        semper risus. Suspendisse vel ligula aliquam, rutrum elit et, iaculis
        nisi. Nam eu nisl eget felis suscipit commodo. Vivamus in pharetra ex.
        Vivamus ac semper nibh. Etiam sed viverra elit, vel lacinia ante. Nunc
        tempus placerat mauris a lobortis. Duis tincidunt lacus in accumsan
        molestie. Quisque et laoreet velit. Aenean vestibulum mattis augue, id
        laoreet augue imperdiet ornare.
      </p>
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

</html>