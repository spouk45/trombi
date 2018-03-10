	<table class="table table-bordered table-modal">
    <thead>
      <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
	<?php foreach ($tab as $indice){ ?>

       <tr data-toggle="modal" data-target="<?php echo '#modal'.$indice;?>">
        <td><?php echo $persons[$indice]['prenom'];?></td>
        <td><?php echo $persons[$indice]['nom']; ?></td>
        <td><?php echo $persons[$indice]['mail'];?></td>
      </tr>
 

  		<?php } ?>

  		</tbody>
  </table>

