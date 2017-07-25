<?php

  function testName() {
    if (isset($_GET['username'])) {
      echo "<p>Welcome, " . $_GET['username'] . "!</p>";
    } else {
      echo "Please enter your name.";
    }
  }

 ?>
