<?php $reponse = $_GET["q3"] ?>


<html>
<!----------------------------------HEAD--------------------------------------->

<head>

	<title>Résultat Q3</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="../javascript/script.js" type="text/javascript"></script>

</head>

<!----------------------------------BODY--------------------------------------->

<body>

<!----------------------------------ENTETE--------------------------------------->

	<div>

		<header>

			<a href="../html/accueil.html" id="accueil" onmouseover="onMouseOverButton('accueil');" onmouseout="onMouseNotOverButton('accueil');">
				<img src="../fichiersext/accueil.png">
				Accueil
			</a>
			<a href="../html/info.html" id="info" onmouseover="onMouseOverButton('info');" onmouseout="onMouseNotOverButton('info');">
				<img src="../fichiersext/info.png">
				Informations
			</a>
			<a href="../html/qcm.html" id="qcm" onmouseover="onMouseOverButton('qcm');" onmouseout="onMouseNotOverButton('qcm');">
				<img src="../fichiersext/qcm.png">
				QCM
			</a>
			<a href="../html/contact.html" id="contact" onmouseover="onMouseOverButton('contact');" onmouseout="onMouseNotOverButton('contact');">
				<img src="../fichiersext/contact.png">
				Contact
			</a>

		</header>

	</div>

<!----------------------------------CONTENU--------------------------------------->

	<div class="contenu">

		<h1>RESULTAT</h1>

		<?php echo "Votre réponse : ", $reponse, " pays</br></br>" ; ?>

		<?php 
		if($reponse=="Plus de 181"){
		 	echo("Bonne réponse !");
		 }else{
		 	echo("Mauvaise réponse !</br>");
			echo("Il y a plus de 181 pays dans le monde.");
		 } ?>


	</div>

<!----------------------------------FOOTER--------------------------------------->

    <div>
    	<footer>
	    	<div><a href="https://facebook.com"><img src="../fichiersext/facebook.png"></a></div>
	    	<div><a href="https://twitter.com"><img src="../fichiersext/twitter.png"></a></div>
	    	<div><a href="https://instagram.com"><img src="../fichiersext/instagram.png"></a></div>
	    	<div><a href="https://youtube.com"><img src="../fichiersext/youtube.png"></a></div>
	    </footer>
    </div>

</body>
</html>
</body>
</html>


