<?php
	session_start();
	ob_start();
?>
<html>
	<head>
		<title>Rogier E-BOOK || Content Management Systeem </title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/cms_login.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
	</head>
<body>
	<nav class="navbar navbar-default" role="navigation">

	 </nav>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 text-center">
			
			<h1>Beheeromgeving Rogier</h1>
			<table class='table'>
				<form method='POST' action='' class="form-signin" role="form">
				<tr><td class='vertical-align'>Gebruikersnaam</td><td> <input type='text' class="form-control" placeholder='Gebruikersnaam' name='gebruikersnaam' required autofocus/></td></tr>
				<tr><td class='vertical-align'>Wachtwoord </td><td><input type='password' class="form-control" placeholder='Wachtwoord' name='wachtwoord'  required/></td></tr>
				<tr><td></td><td><input type='submit'  class='btn btn-default' name='inloggen' value='Inloggen' /></td></tr>
						<?php
					
						if(isset($_POST['inloggen'])){
						
							if($_POST['gebruikersnaam'] == "ROGIER" && $_POST['wachtwoord'] == "inloggen"){
								session_start();
								$_SESSION['username'] = "SBP";
								header('Location: index');
							}else{
								echo "<td colspan='2' class='alert alert-danger'><strong>Fout!</strong> Inloggegevens kloppen niet!</td>";
							}
						
						}
					
						?>
				</form>
			</table>
        </div>
    </div>
</div>
</body>
</html>