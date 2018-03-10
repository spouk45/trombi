<?php

require 'bdd/myBase.php';
require 'bdd/myBase2.php';
 ?><div class="row">

 	<?php
 foreach ($persons as $key => $value){ ?>


 	<div class="col-sm-3 col-12">
	<figure class="img-thumbnail" data-toggle="modal" data-target="<?php echo '#modal'.$key;?>">
		<img src="image/<?php echo $value['image'];?>" alt="image" class="img-fluid">
		<figcaption class="text-center"><?php echo $value['prenom']. ' ' . $value['nom'];?></figcaption>
	</figure>
</div>

<?php } ?>

</div>