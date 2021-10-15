<?php include "read.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/main.css">

</head>
<body>
	<div class="container">
		<div class="box" style="background-color:white;width:100%;">
			<h4 class="display-4 text-center">Colaboradores registrados</h4><br>
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nome</th>
			      <th scope="col">Telefone</th>
			      <th scope="col">E-mail</th>
				  <th scope="col">Data de nascimento</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
			      <td><?=$rows['name']?></td>
			      <td><?php echo $rows['telefone']; ?></td>
				  <td><?php echo $rows['email']; ?></td>
				  <td><?php echo $rows['nascimento']; ?></td>
			      <td><a href="updateRead.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-success">Atualizar</a>

			      	  <a href="delete.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-danger">Deletar</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			<button style="color:white";>
				<a href="index.php" class="link-primary">Cadastrar</a>
			</button>
		</div>
	</div>
</body>
</html>