<?php
  require 'functions.php';

  include 'header.php';
  include 'menu.php';

  testName();

?>

<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <label for="username">Name:</label>
  <input type="text" name="username" />
  <input type="submit" value"submit" />
</form>

<p>This is a body paragraph.  We will include some files
  above and below this using PHP.</p>

<<<<<<< HEAD
  <p>This is a paragraph I added from Atom!</p>
=======
<p>This is a paragraph I added from GitHub!</p>
>>>>>>> bfc56cb6c6e8a11cfe92123dd76ed9fb1247d33a

<?php
  include 'footer.php';
?>
