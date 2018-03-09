<?php


$trombi = [

];

$content = '
Steven Grillon steven.grillon.45@gmail.com Edwin Gerard edwin.gerard1@gmail.com Brice Jaugin contact@bricej3d.fr Matthieu Carlevaris matth.carlevaris@gmail.com Emilie Berger emibgr@gmail.com Alabed ahmoud ziadoof@gmail.com Yoan Beauchamp yoan.beauchamp@gmail.com Damien Sedira es.todo78@yahoo.fr Sébastien Huet sebstn.hkzt@laposte.net Benjamin Berthier benjamin.berthier.mail@gmail.com Clement Paquin clement.paquin@gmail.com 
Anas Grina 
anas.grina@hotmail.fr 
Raphael Mouton 
raphaelmouton@live.fr 
Julien Hoste 
hostejulien@gmail.com 
Julia Limousin 
julia.limousin@gmail.com 
Anthony Sottejeau 
anthony.sottejeau@gmail.com 
Erwann Danguy 
erwann0danguy@gmail.com 
Cyril Do 
cyrildo@yahoo.fr 
Julien Bourgadel 
bjulien00@gmail.com 
Anthony Pointu 
p.anthony18@live.fr 
Julien Alexandre 
julien.alexandre26@gmail.com 
Thomas Hubert 
mr.thomas.hubert@gmail.com 
Louise Roy 
louise.roy@hotmail.fr 
Jérôme Legrand 
jerome.legrand4537@hotmail.com 
Xavier Meckler 
xmeckler@gmail.com 
Nicolas Juin 
juin.nicolas@gmail.com 
Maxime Goyard 
maxime.goyard@live.fr 
Thomas Essoungou 
essoungou_thomas@hotmail.fr 
Arnaud Gauthier 
vilc86@hotmail.com 
Quentin Picart 
quentin.picart@gmail.com
';

$myTab = explode(" ",$content);
$newTab = null;
foreach($myTab as $key => $value){
	$myTab[$key] = trim($value);

} 
$i=0;
foreach ($myTab as $key => $value){
	
	
	if( $key % 3 == 0 ){ // prenom
		//$newTab= [$i]['prenom' => $value ];
		$newTab[$i]['prenom'] = $value;
		
	}
	if( $key % 3 == 1 ){ // nom
		$newTab[$i]['nom'] = $value;
	}
	if( $key % 3 == 2 ){ // mail
		$newTab[$i]['mail'] = $value;
		$i++;
	}

}
/*?><pre><?php print_r($newTab); ?></pre>*/


