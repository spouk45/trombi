	<?php foreach ($tab as $indice){ ?>

      <tr data-toggle="modal" data-target="#myModal">
        <td><?php echo $newTab[$indice]['prenom'];?></td>
        <td><?php echo $newTab[$indice]['nom']; ?></td>
        <td><?php echo $newTab[$indice]['mail'];?></td>
      </tr>
 

  		<?php } ?>