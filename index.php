<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet"/>
  <title>Trombi.yoyo</title>
  <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed|Muli" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
</head>

<body>
<div class="container">
<section class="text-center">

	 <form action="action.php" method="POST" id="form">

	 
	  <div class="form-group text-center">
	  	<h1>Qui cherchez vous ?</h1>
	    <label for="name"></label>
	    <input type="text" class="form-control" id="name" name="name" placeholder="Entrez un nom ou prénom">
	  </div>
	   
	  <button type="submit" name="formWho" class="btn btn-primary m-4">Rechercher</button>	 
	  <button type="button" id="all-persons" name="all-persons" class="btn btn-primary ml-4 mr-1">Afficher la liste</button>
	   <button type="button" id="toogle-trombi" name="toogle-trombi" class="btn btn-primary m-1">Trombinoscope</button>
	</form> 

</section>
<section id="trombi" class="mt-5">
	<?php require 'inc/trombi.php';
	?>
</section>

<section id="resultContent" class="mt-5">
	<div class="row">
		<div class="col-12" id="result">
				
		</div>
	</div>
</section>

<section id="modal-group" class="mt-5">

	<?php foreach ($persons as $key => $value){ ?>

  <!-- The Modal -->
  <div class="modal fade" id="<?php echo 'modal'.$key;?>">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><?= $value['prenom']. ' '.$value['nom'];?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <img src="./image/<?php echo $value['image'];?>" alt="image" class="img-thumbnail">
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  <?php } ?>
</section>	

</div>
<footer>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
	
	
		$('#form').submit(function(e){
			e.preventDefault();
			var $this = $(this);
			var url = $this.attr("action");
			$.post(url,$this.serialize()).done(function(data){
				$('#result').html(data);
			});
			$('#resultContent').show();
			$('#trombi').hide();
			
		});
	

	$('#name').keyup(function(){
		$('#form').trigger("submit");
		$('#trombi').hide();
	});

	$('#toogle-trombi').click(function(){
		$('#trombi').toggle();
		$('#resultContent').hide();
	});

	$('#all-persons').click(function(){
		$('#trombi').hide();
		$('#name').val('');
		$('#form').trigger("submit");
	});


</script>
</body>
</html>


