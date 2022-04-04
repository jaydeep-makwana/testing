<?php
session_start();
 
   if ($_SERVER['REQUEST_METHOD'] == "POST") {
     $_SESSION['username'] = $_POST['username'];
      if ($_SESSION['username']) {
       header('location:session_2.php');
      }
   }
?>

 
 <form  action="session.php" method="post">
 

  <input type="text" name="username">
  <button type="submit"  >submit</button>

</form>
 