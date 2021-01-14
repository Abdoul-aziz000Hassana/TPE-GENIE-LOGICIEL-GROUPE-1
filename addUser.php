<?php

session_start();
if (isset($_POST['submit'])) {
	
$pseudo=$_POST['pseudo']; // le nom de l'utilisateur
$password=$_POST['password']; // le mot de passe
$password2=$_POST['password2']; // confirmation du mot de passe

if(!empty($pseudo) AND !empty($password) AND !empty($password2)){
	if ($password==$password2) {
		if($connect = mysqli_connect("localhost","root","root","biblio")){
			$req="INSERT INTO users(pseudo, password) VALUES('$pseudo', '$password')";
			$exec=mysqli_query($connect, $req) or die(mysqli_error($connect));

			$msg='<font color="green" size="4px">Utilisateur ajouté avec succès!</font>';
		}else{
			mysqli_error(); // signaler l'erreur
		}
	}else{
		$msg='<font color="red" size="4px">Les deux mots de passe ne correspondent pas, veuillez réessayer!</font>';
	}
}else{
	$msg='<font color="red" size="4px">Les champs doivent tous être remplis</font>';
}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ajout d'un nouveau compte utilisateur</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<script src="jquery.js"></script>
	<style type="text/css">
h3{
	background: linear-gradient(135deg, skyblue, #000801, skyblue);
	color: white;
	padding: 20px;
}
body{
	background:radial-gradient(#eee, steelblue);
	font-family: Verdana;
}
form{
	padding: 5px;			
			
}
div.footer{
	position: absolute;
	bottom: 0;
	width: 100%;
	font-size: 15px;
	font-weight: bold;
	background: linear-gradient(135deg, skyblue, #000801, skyblue);
	color: white;
}
.cotainn{
	padding: 58px;
	background: #ddd;
	height: 410px;
	box-shadow:2px 2px 100px gray
}
img{
	margin-top: 150px;
	margin-left: 20px
}
button.btn-success{
	margin-left: -20px;
	padding-left:51px;
	padding-right: 51px;
}

	</style>
</head>
<body>
<br>
<h3>Gestion d'une bibliothèque</h3><br>
<br>
<div class="row">
	<div class="col-lg-2">
		<br>
		<a href="index.php" style="color:white;"><center><b>Retour à la page de connexion</b></center></a>
		<hr>
		<img src="images/users.png" width="120px">

	</div>

	<div class="col-lg-10 cotainn">
			<!-- Formulaire d'ajout utilisateur  -->
	<form method="POST" class="form-horizontal form col-lg-8">
	<div class="form-group">
		<legend><u><b>Formulaire d'ajout d'un nouvel utilisateur</b></u></legend>
	</div>
	<div class="row">
		<div class="form-group">
		<label for="user" class="col-lg-4">Nom d'utilisateur : </label>
			<div class="col-lg-8">
			<input type="text" class="form-control" id="user" name="pseudo" placeholder="Entrez votre nom d'utilisateur...">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="form-group">
		<label for="pass" class="col-lg-4">Mot de passe : </label>
			<div class="col-lg-8">
			<input type="password" class="form-control" id="pass" name="password" placeholder="Tapez un mot de passe">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="form-group">
		<label for="pass2" class="col-lg-4">Confirmer mot de passe : </label>
			<div class="col-lg-8">
			<input type="password" class="form-control" id="pass2" name="password2" placeholder="Tapez un mot de passe à nouveau">
			</div>
		</div>
	</div>		
	<br>

	<div class="row">
		<div class="col-lg-4">
			<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Ajouter</button>
		</div>
<? if(isset($msg)) echo $msg; ?>
	</div>
	</form>
	</div>
</div>

<div class="row footer">
	<div class="col-lg-4"></div>
	<div class="col-lg-4">
		Copyrights &copy; 
		<script type="text/javascript">
			var Madate=new Date();
			document.write(Madate.getFullYear());
		</script>
		 | Info Fonda Licence 3			
	</div>
	<div class="col-lg-4"></div>
</div>

</body>
</html>
