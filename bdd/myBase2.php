<?php
$nb_fichier = 0;

if($dossier = opendir('./image'))
{

	require 'bdd/myBase.php'; // récupération du tableau des personnes


	while(false !== ($fichier = readdir($dossier))){
		if($fichier != '.' && $fichier != '..' && $fichier != 'index.php' && $fichier != 'Promo Février 2018.pptx'){
				$nb_fichier++; 

					// récupération du nom 
					$tab = explode(' ',$fichier);
					$tab2 = explode ('.',$tab[1]);
					$name = ($tab2[0]);
					//echo $name.'<br>';

					// --------------- Construction du tableau --------------------
					//print_r($persons);
					 $key = array_search($name, array_column($persons, 'nom'));
					 //print_r($persons);
					 if($key !== false){
					 	$persons[$key]['image']=$fichier;
					 }
					 else{
					 	echo 'no match <br>';
					 }
					 //print_r($key);



				//echo '<li><a href="./mondossier/' . $fichier . '">' . $fichier . '</a></li>';

		}

		
	}

closedir($dossier);

/*?><pre><?php print_r($persons);?></pre><?php */
 
}
 
else {
	 echo 'erreur d\'importation des images.';
}
    // *************** REnvoie le tableau avec les photos en plus */
?>
