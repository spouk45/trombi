	<table class="table table-bordered table-modal">
    <thead>
      <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>

	<?php foreach ($persons as $key => $value){ ?>

      <tr data-toggle="modal" data-target="<?php echo '#modal'.$key;?>">
        <td><?php echo $value['prenom'];?></td>
        <td><?php echo $value['nom']; ?></td>
        <td><?php echo $value['mail'];?></td>
      </tr>
 

  		<?php } ?>

  		</tbody>
  </table>

