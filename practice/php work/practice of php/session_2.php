<?php

 session_start();
 
 
 echo $_SESSION['username'];
 
 

 // Session timeout duration in seconds
 // Specify value lesser than the PHPs default timeout of 24 minutes

 $timeout = 10;
     
 // Check existing timeout variable
 if( isset( $_SESSION[ 'name' ] ) ) {

	// Time difference since user sent last request
	$duration = time() - intval( $_SESSION[ 'name' ] );

	// Destroy if last request was sent before the current time minus last request
	if( $duration > $timeout ) {

  // Clear the session
		session_unset();

		// Destroy the session
		session_destroy();
   
    

		// Restart the session
		session_start();
	}
 }

 // Set the last request variable
 $_SESSION['name'] = time();
 
 ?>

 <br>

 <a href="session.php"><button>go--to--home</button></a>

<!-- // session_unset();
// session_destroy(); -->