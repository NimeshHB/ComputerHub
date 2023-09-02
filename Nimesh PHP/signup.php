<?php 
include_once 'header.php';
?>

  <div class="form">
    <img src="logo-01 1.png" alt="Logo" width="350" height="72" >
    <h1>Welcome ComputerHub</h1>
    <form action ="includes/login.inc.php" method="post">
      <input type="text" id="fname" name="firstname" placeholder="Name">
      <input type="text" id="lname" name="lastname" placeholder="Email">
      <input type="text" id="lname" name="lastname" placeholder="Username">
      <input type="text" id="lname" name="lastname" placeholder="Password">
      <input type="text" id="lname" name="lastname" placeholder="Repeat Password">
      <button name="submit" type="submit" >Login</button>
  </form>
   <p> Already have an account? <a href="login.php">Log in.</a> </p>
</div>

<?php 
 include_once 'footer.php';
?>