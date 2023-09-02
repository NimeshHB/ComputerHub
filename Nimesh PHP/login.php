<?php 
include_once 'header.php';
?>

  <div class="form">
    <img src="logo-01 1.png" alt="Logo" width="350" height="72" >
    <h1>Welcome ComputerHub</h1>
    <form action ="includes/login.inc.php" method="post">
      <input type="text" id="fname" name="firstname" placeholder="Email / Username">
      <input type="password" id="lname" name="pwd" placeholder="Password">
      <button name="submit" type="submit" >Login</button>
  </form>
  <p>New Here ? <a href="signup.php">Register</a> </p>
</div>

<?php 
 include_once 'footer.php';
?>