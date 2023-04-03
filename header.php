<?php
session_start();

// Check if the user is logged in, if not then redirect him to login page
// if ( !isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ) {
//     header("location: login.php");
//     exit;
// }
?>


<header id="header_top">
      <nav>
        <ul>
          <li><img id="hamburger" src="images/hamburger.png" /></li>
          <li id="header_text">Halifax Canoe and Kayak</li>
          <li><img src="images/paddle-white.png" alt="Paddle logo" /></li>
        </ul>
      </nav>
</header>
