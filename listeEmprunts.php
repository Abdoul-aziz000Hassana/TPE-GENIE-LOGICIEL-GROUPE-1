<?php
session_start();

if (isset($_GET['connexion']) OR !isset($_SESSION['name']) OR !isset($_SESSION['time'])) {
	session_destroy();
	header("location:index.php");
}
?>

<!DOCTYPE html PUBLIC "­//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1­strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta charset="utf-8">
	<title>Liste des emprunts</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<script src="jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styles/style1.css">

	<style type="text/css">
	html {
		background-image: url(images/bg.jpg);
		background-size: 100%;
		background-repeat: no-repeat;
		padding-top: 23px;
		width: 100%;
		background-attachment: fixed;
	}
	body{

		padding-top: 10px;
		background:rgba(255,255,255,0.5); /*rgba(33,55,72,0.7);*/;
		box-shadow: 0px 0px 10px #fff;
		margin: 7em 0px 0px 20%;
		border: 1px solid #000;
		position: relative;
		width: 78.5%;
		background-attachment: fixed;
	}
	.specialBurger{
	margin-top: 120px;
	padding: 2% 3%;
	width: 340px;
}
.specialBurger ul li{
	transition: .2s;
}
.specialBurger ul li:hover{
	transform: scale(1.1);
	text-shadow: 3px 3px 3px #5bc0de;

}
.specialBurger span{
	color: #fff;
	font-size: 30px;
	float: left;
	margin: 16px 10px 0px -10px;
}
.specialBurger ul{
	list-style-type: none;
	margin: 0px -10px;
}
.add{
	margin:120px 20px;
}
.specialBurger ul ul{
	list-style-type: none;
	position: absolute;
	width: 65%;
	left: -45px;
	top:-120px;
	padding: 10px 15px;
	background-color: #eee;
	border: 1px solid black;
	border-radius: 5px;
	box-shadow: 0px 0px 25px 0px #5bc0de;
}
.specialBurger a{
	color: #000;
	font-size: 15px;
}
.acc{
	padding-right: 32px;
	padding-left: 32px;
}

	</style>
</head>
<body>
<?php 
$title="Liste des emprunts";
include('header.php'); 
?>

<div class="row conteneur">
	<div class="col-lg-4 hamburger">
		<img src="images/Books.gif" width="100px"><br>
				<br><br>
		<a href="accueil.php" class="btn acc btn-warning">
				 <span class="glyphicon glyphicon-home"></span> Accueil 
		</a>
		<button onclick="goBack()" class="btn btn-success acc">
		<span class="glyphicon glyphicon-arrow-left"></span> Retour
		</button>
		<a href="accueil.php?connexion=off" class="btn btn-danger">
				<span class="glyphicon glyphicon-log-out"></span> Déconnexion
		</a>

		<br>
		<br><br>

		<div class="col-lg-8 specialBurger">
			<ul>
				<ul class="Hiden">
					<a href="listeDocuments.php"><li>Liste documents disponibles</li></a>
					<a href="ajouterAbonne.php"><li>Ajouter un nouvel abonné</li></a>
					<a href="listeAbonnes.php"><li>Liste des abonnés</li></a>
					<a href="enregistrerEmprunt.php"><li>Enregistrer un emprunt</li></a>
					<a href="listeEmprunts.php"><li>Liste des emprunts</li></a>
            	</ul>
	           
			</ul>
		</div>
	</div>

	<div class="col-lg-8 first">
		<div class="monMenu">
			Contactez-nous
		<hr wid5h="60%" style="" align="left">
			<span class="title">Fac Sciences	</span>
		</div>
		
	</div>
</div>

<!--************************************************************************************-->

<?php include('footer.php'); ?>

<script type="text/javascript">
	function goBack(){
		history.back();
	}
</script>
</body>
</html>