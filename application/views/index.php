<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Portfólio - Breno Macedo Barkokebas</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body style="background-color:darkgrey">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

	<div class="container">

		<div class="row">
			<div class="col-4">
				<div class="text-center">c</div>
			</div>
			<div class="col-8">
				<h3>Meus Projetos</h3>

				<?php foreach($projetos as $projeto){ ?>
				
				<div style="color:white; width=80%" class="card">
					<div class="card-body">
						<h4 style="color:black"><?php echo $projeto->titulo ?></h6>
						<hr style="color:black">
						<p style="color:black"><b>Descrição:</b> <?php echo $projeto->descricao ?></p>
						<p style="color:black"><b>Status:</b>
						<?php
							if($projeto->status == 0){
								echo "Em andamento";
							} else {
								echo "Finalizado";
							}
						?>
						</p>
						<p style="color:black" ><b>Link:</b><a href="<?php echo $projeto->link ?>" target="_blank">&nbsp; Github</a></p>
					</div>
				</div>
				
				<br>
				
				<?php } ?>
			</div>
		</div>

	</div>

</body>
</html>
