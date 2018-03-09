<?php 
//print_r($_POST);
if (!isset($_POST['name'])){
	echo 'Erreur de récupération du formulaire.';
	exit();
}


require 'bdd/myBase.php';

$tab = null;


if(empty($newTab)){
	echo 'La table de donnée est vide';
	exit();
}



if(!empty($_POST['name'])){
  

  foreach ($newTab as $key => $person) {
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

	//header('Location: localhost:8000?tab=$tab');

// ------------------- RESULTAT ----------------------


?>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>

      <?php 
      if(empty($tab)){
        require 'inc/all_person.php';
      }
      else{
        require 'inc/selected_person.php';
      }
      ?>
      
    </tbody>
  </table>

  
  
