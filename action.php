<?php 
//print_r($_POST);
if (!isset($_POST['name'])){
	echo 'Erreur de récupération du formulaire.';
	exit();
}


require 'bdd/myBase.php';
require 'bdd/myBase2.php';

$tab = null;


if(empty($persons)){
	echo 'La table de donnée est vide';
	exit();
}



if(!empty($_POST['name'])){
  

  foreach ($persons as $key => $person) {
    if (stristr($person['prenom'] ,$_POST['name'] ) ){
      $tab[]=$key;
    }
   if (stristr($person['nom'] , $_POST['name'] )){
      $tab[]=$key;
    } 
  }

  if(empty($tab)){
  	echo 'Pas de résultats';
  	exit();
  }

  $tab = array_unique($tab);

}
else {
  $tab = null;
}
/* ?><pre><?php print_r($tab);?><pre> <? */

	//header('Location: localhost:8000?tab=$tab')

/**/
// ------------------- RESULTAT ----------------------


?>


      <?php 
      if(empty($tab)){
        require 'inc/all_person.php';
      }
      else{
        require 'inc/selected_person.php';
      }
      ?>
      

    
  
  
