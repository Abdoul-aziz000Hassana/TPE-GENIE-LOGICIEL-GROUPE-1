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
	<title>Accueil</title>
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
		width: 78.5%;
		padding-top: 10px;
		background:rgba(255,255,255,0.5); 
		box-shadow: 0px 0px 10px #fff;
		margin: 7em 0px 0px 20%;
		border: 1px solid #000;
		background-attachment: fixed;
		height: 476px
	}
	
#galerie-menu{
	background:radial-gradient(#eee,skyblue);
	font-family: Verdana;
	width:400px;
	/*margin:2em auto;*/
	border:solid;
	border-radius:5px;
	box-shadow:1px 1px 3px gray;
	text-align:right;
}

#galerie-menu a, #galerie-menu:hover a:focus{
	display:block;
	height:40px;
	position:relative;
	overflow:hidden;
	box-shadow:0 0 15px white;
	transition:1s;
	transition-timing-function: cubic-bezier(0.00,0.01,0.00,1.00);
}

#galerie-menu a:hover , #galerie-menu a:focus{
	transition:1s;
	transition-timing-function: cubic-bezier(0.00,0.01,0.00,1.00);
	height:110px;
}

#galerie-menu a:before{
	content:attr(title);
	text-align:center;
	width:400px;
	position:absolute;
	top:0;
	left:0;
	font-size:25px;
	color:white;
	border:1px solid gray;
	box-shadow:0 0 15px white;
	background:rgba(0,0,0,0.3);
	line-height:38px;
}

a img{
	margin-top: 40px;
	width:100px;
}

.btn-default{
	border: 2px solid red;
	box-shadow: 0 0 1px black, inset 0px 0px 5px red, 0 0 5px 5px yellow ;

}
.first div.menu{
	top: 60px;
}
.conteneur .first .row div.menu{
	padding: 40px 70px;
}
.book{
	position: relative;
	margin-bottom: 300px
}
.hamburger img, .hamburger a
{
	margin-left: -10px
}

</style>
</head>
<body>
<?php 
$title="Biblio Tech";
include('header.php'); 
?>


<div class="row conteneur">
	<div class="col-lg-4 hamburger">
		<img src="images/Books.gif" class="book" width="100px">

		<a href="accueil.php?connexion=off" class="btn btn-danger">
				<span class="glyphicon glyphicon-log-out"></span> Déconnexion
		</a>
		<br>
		
	</div>

	<div class="col-lg-8 first">
		
		<div class="row">
			<div class="col-lg-6">
				<div class="monMenu">
					Contactez-nous
				<hr wid5h="60%" style="" align="left">
					<span class="title">Fac Sciences</span>
				</div>
			</div>
			<div class="col-lg-6 menu">
				<div id="galerie-menu">
				<!-- Notre navigation -->
				<nav>
				<a href="listeDocuments.php" tabindex="0" title="Liste des documents disponibles">
					<img src="images/Books.gif" >
				</a>

				<a href="ajouterAbonne.php" tabindex="1" title="Ajouter un nouvel abonné">
					<img src="images/Books.gif">
				</a>

				<a href="listeAbonnes.php" tabindex="3" title="Liste des abonnés">
					<img src="images/Books.gif">
				</a>
				<a href="enregistrerEmprunt.php" tabindex="2" title="Enregistrer un emprunt">
					<img src="images/Books.gif">
				</a>

				<a href="listeEmprunts.php" tabindex="4" title="Liste des emprunts">
					<img src="images/Books.gif">
				</a>
				</nav>
					</div>
			</div>
		</div>
	</div>
</div>


<!--************************************************************************************-->

<?php include('footer.php'); ?>
</body>
</html>