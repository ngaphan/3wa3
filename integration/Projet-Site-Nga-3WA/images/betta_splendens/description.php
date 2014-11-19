<?php
///////////////////////////////////////////////////////////////
// Nom du fichier
///////////////////////////////////////////////////////////////
$filename = 'contact.txt';

///////////////////////////////////////////////////////////////
// Réception et traitement des données
///////////////////////////////////////////////////////////////

if (isset($_POST['submit'])) 
{

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
	$message = isset($_POST['message']) ? $_POST['message'] : '';
	
// Si toutes les valeurs sont non vide, on écrit dans le fichier

    if (!empty($name) && !empty($firstname) && !empty($email)&&!empty($message)) 
	{

        // mode ajout de texte
        $mode = 'a';

        // ouverture du fichier
        $handle = fopen($filename, $mode);

        if ($handle) 
		{

            // écriture de la ligne dans le fichier
            $line = "$name::$firstname::$email::   $message". PHP_EOL;			
            fwrite($handle, $line);
			
            // fermeture du fichier
            fclose($handle);
			
        }
		echo'Votre message a été bien reçu. Il sera traité dans les meilleurs délais.';
		
    }	
	
}

///////////////////////////////////////////////////////////////
// Récupération du contenu sous forme d'un tableau
///////////////////////////////////////////////////////////////
$content = array();

if (file_exists($filename))
    $content = file($filename);

///////////////////////////////////////////////////////////////
// Parcours et affichage du fichier
///////////////////////////////////////////////////////////////
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Contact</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
        <style>
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
        </style>

    </style>
    <link href="assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">

        <div class="row">

            <div class="span12">

                <form class="well" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                    <label for="name">Nom : </label>
                    <input type="text" id="name" name="name" />

                    <label for="firstname">Prénom : </label>
                    <input type="text" id="firstname" name="firstname" />

                    <label for="email">Email : </label>
                    <input type="text" id="email" name="email" />
					
					<td colspan=2>
						<p>Message:<br>   
						<textarea name="message" rows="10" style="padding: 3px; width: 50%;"> </textarea></p>
   		
					<input type ="submit" name="submit" value="Envoyer" class="btn btn-large 	 btn-primary" />
					</td>
					
                </form>

            </div>						
                            
        </div>
		
		<div class="row">

            <div class="span12">

                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                    <th>Nom</th><th>Prénom</th><th>Email</th><th>Message</th>
                    </thead>
                    <tbody>
                        <?php foreach ($content as $line) : ?>

                            <?php list($name, $firstname, $email,$message) = explode('::', $line); ?>

                            <?php echo "<tr><td>$name</td><td>$firstname</td><td>$email</td><td>$message</td></tr>"; ?>

                        <?php endforeach ?>
                    </tbody>
                </table>

            </div>

        </div>
		           
    

	</div> <!-- /container -->

</body>
</html>