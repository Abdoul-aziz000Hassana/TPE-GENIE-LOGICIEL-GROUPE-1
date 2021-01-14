<?php

session_start();
if (isset($_POST['submit'])) {
	$pass=$_POST['password'];
	$pseudo=$_POST['pseudo'];
	
	if($connect = mysqli_connect("localhost","root","root","biblio")){

		if (!empty($pass) and !empty($pseudo)) {
			
			$req="SELECT * FROM users WHERE pseudo='$pseudo' AND password='$pass'";
			$exec=mysqli_query($connect, $req) or die(mysqli_error($connect));
			$number=mysqli_num_rows($exec);
			if ($number==0) {
				$msg="Mot de passe Incorrect ou Utilsateur inexistant!";
			}
			else{
					$_SESSION['name']=$pseudo;
					$_SESSION['time']=date('H:i:s');
					header("location:accueil.php");
			}
		}else{
				$msg="Remplissez tous les champs svp!";
		}
	}else{
		die("<br>Erreur de connexion à la base de données !");
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Page de connexion</title>
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
	background:radial-gradient(#eee,skyblue);
	font-family: Verdana;
}

.formulaire{
	padding: 30px;
	box-shadow: 3px 5px 20px green;
	background:radial-gradient(#eee,steelblue) ;
	color: white;
	box-shadow: 0 0 1px white, inset 0px 0px 5px white, 0 0 10px 10px #eee ;
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
input.password:focus{
	font-size: 20px
}
input.password, input#hidee{
	border: 1px solid black;
}
input.password{
	color: green;
	transition: .3s			
}
<!-- code CSS du clignotement -->
#Clignote{
	animation: Clignote 200ms linear infinite;
	color: #fff;
	border: 0px;
	background-color: #337ab7;
	margin-top: 20px;
	transition: 0.1s;
}

#Clignote:hover{
	background-color: blue;
	color: #fff;
	animation: none;
}
#sub{
	margin-left: 10px
}

	</style>
</head>
<body>
<br>
<div class="row">
	<div class="col-lg-4"></div>
		<div class="col-lg-4">
				<img style="position: relative; margin-left: 35% " src="images/Books.gif" width="100px">
		</div>
	<div class="col-lg-4"></div>
</div>

<div class="row">
	<div class="col-lg-12" style="text-align: center">
		<h3>Gestion d'une bibliothèque</h3>
		<? if(isset($msg)) echo '<font color="red" size="6px">'.$msg.'</font>'; ?>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-3"></div>
	<div class="formulaire col-lg-6">
	<!-- Formulaire de connexion -->
	<form method="POST" class="form">

			<div class="row">
				<div class="col-lg-4">Nom d'utilisateur: </div>
				<div class="col-lg-8"><input type="text" class="form-control" id="hidee" name="pseudo" placeholder="Entrez votre nom d'Utilsateur"></div>
			</div>

			<div class="row">
				<div class="col-lg-4">Mot de passe: </div>
				<div class="col-lg-8"><input type="password" class="password form-control" name="password" placeholder="Enter the password to log-in..."> </div>

			</div>

			<div class="row">
				<div class="col-lg-4">
					<input type="submit" id="sub" class="btn btn-warning" name="submit" value="Se connecter">
				</div>
			</div>
	</form>	
	</div>
	<div class="col-lg-3"></div>
</div>
	
<div class="row">
	<div class="col-lg-6">
		<a href="addUser.php"><br><button type="button" class="btn" id="Clignote">Ajouter un nouveau compte utilisateur</button></a> 
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
