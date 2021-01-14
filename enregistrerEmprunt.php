<?php
session_start();

if (isset($_GET['connexion']) OR !isset($_SESSION['name']) OR !isset($_SESSION['time'])) {
	session_destroy();
	header("location:index.php");
}
$msg='';
if (isset($_POST['submit'])) {

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$cni=$_POST['CNI'];
$titre=$_POST['titre'];
$auteur=$_POST['auteur'];


if(!empty($nom) AND !empty($prenom) AND !empty($cni) AND !empty($titre) AND !empty($auteur)){

		if($connect = mysqli_connect("localhost","root","","biblio")){
			$req="INSERT INTO emprunt(nom, prenom, numCNI, titrelivre, auteurLivre) VALUES('$nom', '$prenom', '$cni', '$titre', '$auteur')";
			$exec=mysqli_query($connect, $req) or die(mysqli_error($connect));

			$msg='<font color="green" size="4px">Emprunt enregistré avec succès!</font>';
		}else{
			mysqli_error();
		}
	
}else{
	$msg='<font color="red" size="4px">Les champs doivent tous être remplis</font>';
}

	}
?>
<!DOCTYPE html PUBLIC "­//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1­strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta charset="utf-8">
	<title>Enregistrer un nouvel emprunt</title>
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
.formContainer{
	width: 65%;
	padding: 20px;
	background: rgba(255,255,255,0.8);
	/*border-radius: 15px;*/
	border: 1px solid black
}
form input[type="text"]{
	border: 1px solid black;
}
.first{
	width: 100%;
}

	</style>
</head>
<body>
<?php 
$title="Enregistrer un nouvel emprunt";
include('header.php'); 
?>

<div class="row conteneur">
	<div class="col-lg-4 hamburger">
		<img src="images/Books.gif" width="100px">
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
		<div class="row">
			<div class="col-lg-4">
				<div class="monMenu">
					Contactez-nous
					<hr wid5h="60%" style="" align="left">
					<span class="title">Fac Sciences</span>
				</div>
			</div>
		


		<div class="col-lg-8 formContainer">
		    <form method="post" class="form-horizontal form col-lg-8">
		    	<fieldset>
				    <div class="form-group">
						<legend><u><b>Formulaire d'enregistrement d'emprunt</b></u></legend>
					</div>
					<div class="row">
						<div class="form-group">
						<label for="noms" class="col-lg-4">Nom : </label>
							<div class="col-lg-8">
							<input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom...">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="form-group">
						<label for="noms" class="col-lg-4">Prénom : </label>
							<div class="col-lg-8">
							<input type="text" class="form-control" id="noms" name="prenom" placeholder="Entrez votre prénom...">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="form-group">
						<label for="cni" class="col-lg-4">Numéro CNI: </label>
							<div class="col-lg-8">
							<input type="text" class="form-control" id="cni" name="CNI" placeholder="Entrez le numéro de la CNI">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="form-group">
						<label for="titre" class="col-lg-4">Titre Livre : </label>
							<div class="col-lg-8">
							<input type="text" class="form-control" id="titre" name="titre" placeholder="Entrez le titre du livre">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="form-group">
						<label for="auteur" class="col-lg-4">Auteur Livre : </label>
							<div class="col-lg-8">
							<input type="text" class="form-control" id="auteur" name="auteur" placeholder="Entrez le nom de l'auteur">
							</div>
						</div>
					</div>

			 	<?php if(isset($msg)) echo $msg; ?>

			        <button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Ajouter une nouvel emprunt</button>
			        
		        </fieldset>
		    </form>
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