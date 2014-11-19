<section id="home">
	
	<p class="top_right"><a class="button" href="index.php?action=newTask">+</a></p>

	<div id="tasks_list">
		<?php
			// On récupère la date du jour au format AAAA-MM-JJ
			$nowDate = date("Y-m-d");
			
			// On initialise la date qui servira de date de référence
			// de la dernière tache affichée
			// pour pouvoir la comparer avec la date de la tache
			// en cours (que l'on va afficher)
			$taskDateLast = "";

			// Puisqu'on a classé nos dates par ordre croissant
			// dans le fichier "actions.php",
			// on utilise foreach pour récupérer les index correspondants,
			// sachant que ces index correspondent eux-mêmes
			// à l'index de la tache en cours dans la "grand" tableau $tasksArray
			foreach ($tasksDatesArray as $index => $taskDate)
			{
				// On crée un objet $taskDateTime à partir de la classe DateTime
				$taskDateTime = new DateTime($taskDate);
				
				// On crée un objet $taskDateTime à partir de la classe DateTime
				$nowDateTime = new DateTime($nowDate);
				
				// La classe DateTime possédant une méthode
				// (méthode = fonction d'une classe)
				// diff() permettant de comparer deux objets "DateTime"
				// qui retourne l'intervalle de temps séparant les deux dates.
				// 
				// C'est cette méthode que l'on utilise
				// grace à l'écriture $myObject->myFunction()
				// pour obtenir l'interval de temps séparant
				// $nowDateTime (l'objet représentant la date d'aujourd'hui)
				// de $taskDateTime (l'objet représentant la date de la tache en cours)
				$interval = $nowDateTime->diff($taskDateTime);

				// On récupère cette interval dans un format qui facilement utilisable :
				// nombre de jours positifs ou négatif.
				// 
				// (int) permet de transformer la valeur retournée
				// par la méthode (fonction) format() en un entier,
				// c'est ce qu'on appelle le transtypage.
				// 
				// %R : signe + ou - (différence de temps positive ou négative)
				// %a : différence en nombre de jours
				$timeDifference = (int) $interval->format("%R%a");

				// Si la date de la tache en cours précède celle d'aujourd'hui
				if ($timeDifference < 0)
				{
					// Si on a pas déjà "écrit" le titre "OVERDUE" dans le HTML
					if ($taskDateLast !== -1)
					{
						echo '<h2 class="overdue">OVERDUE</h2>';
						
						// On assigne une valeur -1 (valeur arbitraire)
						// à la variable $taskDateLast
						// pour ne pas réafficher un seconde fois le titre "OVERDUE"
						$taskDateLast = -1;
					}
				}
				
				// Si la date de la tache en cours est celle d'aujourd'hui
				elseif ($timeDifference === 0)
				{
					// Si on a pas déjà "écrit" le titre "URGENT" dans le HTML
					if ($taskDateLast !== 0)
					{
						echo '<h2 class="urgent">URGENT</h2>';

						// On assigne une valeur 0 (valeur arbitraire)
						// à la variable $taskDateLast
						// pour ne pas réafficher un seconde fois le titre "OVERDUE"
						$taskDateLast = 0;
					}
				}
				
				// Si la date de la tache en cours succède celle d'aujourd'hui
				// (puisqu'elle n'est ni précédent ni égale à celle d'aujourd'hui)
				// ET qu'elle est différent de la date de la dernière tache
				elseif ($taskDateLast != $taskDate)
				{
					// On affiche la nouvelle date
					echo '<h2>' . substr($taskDate, 8, 2) . '/' . substr($taskDate, 5, 2) . '/' . substr($taskDate, 0, 4) . '</h2>';

					// ON met à jour notre repère de date pour pouvoir le comparer
					// lors du prochain tour de notre boucle
					// avec la date de la tache suivante
					$taskDateLast = $taskDate;
				}

				echo '		<article>' . "\n";
				echo '			<span>HH:MM</span>' . "\n";
				echo '			<h3>' . $tasksArray[$index][0] . '</h3>' . "\n";
				echo '			<p>' . $tasksArray[$index][1] . '</p>' . "\n";
				echo '			<p>' . "\n";
				echo '				<a class="button_small" href="index.php?action=editTask&taskIndex=' . $index . '">MODIFIER</a>' . "\n";
				echo '				<a class="button_small" href="index.php?action=deleteTask&taskIndex=' . $index . '">SUPPRIMER</a>' . "\n";
				echo '			</p>' . "\n";
				echo '		</article>' . "\n";
			}
		?>
	</div>

</section>
