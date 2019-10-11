<?php
if(isset($_POST['unametxt'],$_POST['passtxt'])){
	$uname = $_POST['unametxt'];
	$pwd = $_POST['passtxt'];
	if($uname == 'admin' && $pwd == 'admin'){
		echo '<h3>You have successfully logged in.</h3>';

	}
	else{
		echo 'Invalid Credentials. Please try again.';
		exit();
	}
}
else{
	header('Location:./login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script>

  	$(document).ready(function(){

  	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
  		if (this.readyState == 4 && this.status == 200) {
  			document.getElementById("token_value").setAttribute('value', this.responseText) ;
  		}


  	};

  	xhttp.open("GET", "token_generator.php", true);
  	xhttp.send();

  	});
  </script>
</head>

<body>

<div class="login-page">
  <div class="form">
    <form class="login-form" action="result.php" method="post" name="update_form">

      <input type="text" id="msgTxt" name="msgTxt" placeholder="Update your status" class="cred"/>
      <input type="hidden" name="token" value="" id="token_value"/>
      <input name="cSubmit" type="submit" value="Update" class="login">

    </form>
  </div>
</div>

</body>
</html>
