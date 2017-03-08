<?php
   $host = "localhost";
   $database = "stream2";
   $user = "Loki";
   $pass = "comedian100%";
	
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }
?>
