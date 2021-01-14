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
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Result of search '<?php if (isset($_GET['q'])){echo $_GET['q'];} ?>'</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
        body{
            padding-top:150px;
            background:url('images/bg.jpg')
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
    </style>
</head>
<body>
<?php include('header.php'); ?>
<?php

if (isset($_GET['q'])) {

    $connect=mysqli_connect('localhost','root','root');
    mysqli_select_db($connect, 'biblio');

    $q=htmlentities(htmlspecialchars($_GET['q']));

    $affichage="SELECT * FROM listeDocuments, listeAbonnes WHERE noms REGEXP '$q' or cni REGEXP '$q' or phone REGEXP '$q' or forfait REGEXP '$q' or dateAjout REGEXP '$q' or auteur REGEXP '$q' or titre REGEXP '$q' or anneePublication REGEXP '$q'";
    $exec=mysqli_query($connect, $affichage) or die(mysqli_error($connect));
	$nombre=mysqli_num_rows($exec);
	
if ($nombre>=1)  {
    while ($test=mysqli_fetch_array($exec)) {
        $result=$test['titre']." de ".$test['auteur']." - ".$test['anneePublication'];
    }
}else{
    $affichage="SELECT * FROM listeDocuments ";
    $exec=mysqli_query($connect, $affichage) or die(mysqli_error($connect));

	$result='<h3><font color="red"><span class="glyphicon glyphicon-warning-sign" style="font-size:50px;padding-top:10px"></span>&nbsp;&nbsp; Aucun résultat pour cette recherche</font></h3>
	<br> Nous vous suggérons les ouvrages suivants : <br> <ul>';

	while ($test=mysqli_fetch_array($exec)) {
        $result=$result.'<li><font color="blue">'.$test['titre']." de ".$test['auteur'];
    }
    $result=$result."<br>";
}

}

?>
	
    <div class="col-lg-8" style="margin-left:40px; background:rgba(255,255,255,0.7); ">
    <h3>Résultats de la recherche: &nbsp;&nbsp;<?php echo '"'.$q.'"' ?>
    <hr style="height:2px;background-color:black;"> 
   <?php if(isset($result)){echo $result;} ?> </h3>
    </div>
    	<div class="col-lg-8 specialBurger">
			<ul>
				<ul class="Hiden">
					<a href="listeDocuments.php"><li>Liste documents disponibles</li></a>
					<a href="ajouterAbonne.php"><li>Ajouter un nouvel abonné</li></a>
					<a href="listeAbonnes.php"><li>Liste des abonnés</li></a>
					<a href="enregistrerEmprunt.php"><li>Enregistrer un emprunt</li></a>
					<a href="listeEmprunts.php"><li>Liste des emprunts</li></a>
            	</ul>
	           
			
</div>
<?php include('footer.php'); ?>
</body>
</html>