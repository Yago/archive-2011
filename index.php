<?php
/*
    Document   : ${name}
    Created on : ${date}, ${time}
    Author     : ${user} @eikonEMF
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="shortcut icon" type="image/x-icon" href="images/yago_50PX.png" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Yago-Art</title>
<link type="text/css" rel="stylesheet" media="screen" href="css/styles.css"/>

<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.script.js"></script>
<script type="text/javascript" src="js/jquery.flash.js"></script>

<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.1.js"></script>

<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.1.css" media="screen" />
<script>

 $(document).ready(
	function() {
		$('#myFlash').flash('loader.swf');
	}

);
</script>
<script>

$(document).ready(function(){
		
		
		$("a#contact").fancybox({
			'hideOnContentClick': false
		});

})
</script>


</head>

<body lang="fr">
 <div id="general">
		<div id="myFlash">
			The "You don't have flash" message.
			Or any other backup content.
		</div>
		<adress>
			<a id="blog" href="blog.php">Le blog</a>
			<a id="contact" href="#contactContenu">Contact</a>
		</adress>
		<div style="display: none;">
			<div id="contactContenu" style="width:500px;overflow:auto;">
				<p>
					Formulaire de contact
				</p>
				<form action="php/sendForm.php" method="post" id="formulaireContact">
                	<fieldset class="donnees">
                       	<input type="text" name="nom" id="nom" value="Nom" onfocus="javascript:this.value=''" /><br />
                       	<input type="text" name="prenom" id="prenom" value="Prénom" onfocus="javascript:this.value=''" /><br />
                       	<input type="text" name="email" id="email" value="E-mail" onfocus="javascript:this.value=''" /><br />
                       	<textarea name="remarque" rows="8" cols="70" onfocus="javascript:this.value=''">
Votre message ...
                       	</textarea>
                	</fieldset>
                	<fieldset id="bouton">
                       	<input type="submit" name="envoyer" value="Envoyer" id="envoyer" />
                	</fieldset>
       			</form>
			</div>
		</div>
		
		<div id="logoSite">
		
		</div>
 </div>
</body>
</html>
