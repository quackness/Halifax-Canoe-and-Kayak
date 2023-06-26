<?php include "header.php"; ?>
<div style="
        width: 500px;
        margin-left: auto;
        margin-right: auto;
      ">
  <?php include "buttonToLogout.php"; ?>
  <form method="post" action="problem.php">
    <div class="mb-3">
      <label for="title">Title</label><br>
      <select id="title" name="title" class="form-control"><br>
        <option value="Mr">Mr</option>
        <option value="Mrs">Mrs</option>
        <option value="Miss">Miss</option>
      </select><br>
    </div>
    <div class="mb-3">
      <label for="fname">First name:</label><br>
      <input type="text" id="fname" name="fname" class="form-control"><br>
    </div>
    <div class="mb-3">
      <label for="lname">Last name:</label><br>
      <input type="text" id="lname" name="lname" class="form-control"><br>
    </div>
    <div class="mb-3">
      <label for="role">Role</label><br>
      <select id="role" name="role" class="form-control"><br>
        <option value="admin">Admin</option>
        <option value="manager">Manager</option>
        <option value="CEO">CEO</option>
      </select><br>
    </div>
    <input type="hidden" name="formSubmitted" value="formSubmitted">
    <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="background-color:#818abf">
  </form>
</div>

</div>

<?php include "footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>