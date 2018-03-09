<?php 
//print_r($_POST);
if (!isset($_POST['name'])){
	echo 'Erreur de récupération du formulaire.';
	exit();
}

if(empty($_POST['name'])){
	exit();
}

require 'bdd/myBase.php';

$tab = null;


if(empty($newTab)){
	echo 'La table de donnée est vide';
	exit();
}


foreach ($newTab as $key => $person) {
  if (strpos($person['prenom'] ,$_POST['name'] ) ){
    $tab[]=$key;
  }
 if (strpos($person['nom'] , $_POST['name'] )){
    $tab[]=$key;
  } 
}

if(empty($tab)){
	echo 'Pas de résultats';
	exit();
}

$tab = array_unique($tab);

/*?><pre><?php print_r($tab);?><pre>*/

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
    	<?php foreach ($tab as $indice){ ?>
      <tr data-toggle="modal" data-target="#myModal">
        <td><?php echo $newTab[$indice]['prenom'];?></td>
        <td><?php echo $newTab[$indice]['nom']; ?></td>
        <td><?php echo $newTab[$indice]['mail'];?></td>
      </tr>
  		<?php } ?>
      
    </tbody>
  </table>

  
  
