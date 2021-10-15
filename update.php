<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/backgound.css">
</head>
</head>
<body>
	<div class="container">
		<form action="php/update.php"  style="background-color: #080202a1;;color: #fff;width: auto;font-size: 20px;border: 3px solid #3d5d91;"
		      method="post">
            
		   <h4 class="display-4 text-center">Atualizar dados</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="razaosocial">Razão Social</label>
		     <input type="name" 
		           class="form-control" 
		           id="razaosocial" 
		           name="razaosocial" 
		           value="<?=$row['razaosocial'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="cnpj">CNPJ</label>
		     <input type="number" 
		           class="form-control" 
		           id="cnpj" 
		           name="cnpj" 
		           value="<?=$row['cnpj'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="telefone">Telefone</label>
		     <input type="number" 
		           class="form-control" 
		           id="telefone" 
		           name="telefone" 
		           value="<?=$row['telefone'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="email">E-mail</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="email" 
		           value="<?=$row['email'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="endereco">Endereco</label>
		     <input type="text" 
		           class="form-control" 
		           id="endereco" 
		           name="endereco" 
		           value="<?=$row['endereco'] ?>" >
		   </div>
		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Atualizar</button>

		    <a style="padding: 8px;font-size: 15px;background: #007bff;color: #fff;border-radius: 4px;margin: 13px 7px;"
			 href="read.php" class="link-primary">Ver registros</a>
	    </form>
	</div>
</body>
</html>