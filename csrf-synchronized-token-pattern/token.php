<?php

  class token {

	  public static function checkToken($token,$sessionIdentifier){

		   $myfile = fopen("saved_tokens.txt", "r") or die("Unable to open file!");
		      list($tok,$sid) = explode(",",chop(fgets($myfile)),2);
		        fclose($myfile);

		          if($tok == $token){
			           if($sessionIdentifier == $sid ) {
		                return true;
			           }
		          }
	   }
  }
?>
