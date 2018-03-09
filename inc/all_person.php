	<?php foreach ($newTab as $value){ ?>

      <tr data-toggle="modal" data-target="#myModal">
        <td><?php echo $value['prenom'];?></td>
        <td><?php echo $value['nom']; ?></td>
        <td><?php echo $value['mail'];?></td>
      </tr>
 

  		<?php } ?>