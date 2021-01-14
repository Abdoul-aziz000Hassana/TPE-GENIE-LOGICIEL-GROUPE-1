<style>

	div.couleurParDefo ul li{
		width: 140px;
		align-content: center;
    }
    div.couleurParDefo ul.nav li:hover span{
		color: #9cca1f;/*#5bc0de;*/
	}

	div.couleurParDefo ul.nav li a{
		color: #fff;
		transition: 0.1s
	}
	div.couleurParDefo ul.nav li:hover a{
		transform: scale(1.2);
	}
	div.couleurParDefo ul.nav li:hover ul li a{
		transform: scale(1);
	}
	div.couleurParDefo ul.nav li:hover span{
		color: #9cca1f;/*#5bc0de;*/
	}
	div.navbar-fixed-top {
		background: #6793a4/*#213748 #337ab7 /*linear-gradient(to bottom,#63727e,#f0e284,#63727e) /*#213748*/;
	}
	div.couleurParDefo ul.nav ul.dropdown-menu li:hover a{
		color:#fff;
		transform: scale(1.2);
		background-color: #ff000000;
	}
	.couleurParDefo ul span.glyphicon{
		font-size: 15px;
	}
	span a{
		margin-top:28px;
	}
	div.couleurParDefo form{
		margin-top:30px;
	}

	form input.input-sm{
		border: 2px solid black
	}
.titre{
	margin-top: 5px;
	font-family: comic sans ms;
}
img.connected1{
	margin-left: 100px;
}

</style>

<script src="jquery.js"></script>
<script>
	$(document).ready(function(){
		$("#search").click(function(){
			$("html").hide(1000);
		});
	});
</script>
<div class="navbar navbar-inverse navbar-fixed-top couleurParDefo">
	<ul class="nav navbar-nav">		
		
		<span class="titre">
			<font size="5px" style="line-height:100px" color="white">
			<?php 
				if(isset($title)) echo $title."</font>";

				echo "\t \t \t".'<font size="5px" color="white" ><img src="images/connected1.png" class="connected1" width="20px"> ';
				echo $_SESSION['name']." - Le bibliothécaire - Connecté depuis ".$_SESSION['time']."</font>";
			?>				
			</span>
		
	</ul>

<div class="formulaire">
	<form class="navbar-form pull-right" method="GET" action="rechercher.php">
		<input type="text" class="form-control" style="width:150px" class="input-sm form-control" name='q' placeholder="Recherche">
		<button type="submit" id="search" class="btn btn-info btn-sm">
		<span class="glyphicon glyphicon-search"></span> 
		Chercher</button>
	</form>	
</div>

</div>
