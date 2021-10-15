<?php include "php/read.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/backgound.css">
</head>
<body>
	<div class="container">
		<div class="box" style="background-color: #080202a1;;color: #fff;width: auto;font-size: 20px;border: 3px solid #3d5d91;">
			<h4 class="display-4 text-center">Empresas Cadastradas</h4><br>
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
			
				<th scope="col"></th>
			      <th scope="col">Razão Social</th>
			      <th scope="col">CNPJ</th>
			      <th scope="col">Telefone</th>
				  <th scope="col">E-mail</th>
				  <th scope="col">Endereço</th>
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
				  
				  <td><?php echo $rows['razaosocial']; ?></td>
			      <td><?php echo $rows['cnpj']; ?></td>
				  <td><?php echo $rows['telefone']; ?></td>
				  <td><?php echo $rows['email']; ?></td>
				  <td><?php echo $rows['endereco']; ?></td>

			      <td><a href="update.php?id=<?=$rows['id']?>" 
			      	     style="background: #6ec9e059;color:
						    #fff;padding: 4px;line-height: 50px;border-radius: 7px;border: 2px solid #ffffff87;">Atualizar</a>

			      	  <a href="php/delete.php?id=<?=$rows['id']?>" 
						style="background: #6ec9e059;color:
						#fff;padding: 4px;line-height: 50px;border-radius: 7px;border: 2px solid #ffffff87;">Deletar</a>

			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			<div class="link-right">
				<a href="index.php" style="padding: 5px;background: #5297a9;color: #fff;border-radius: 6px;margin: 13px 49px;">Cadastrar</a>
			</div>
		</div>
	</div>
</body>
</html>