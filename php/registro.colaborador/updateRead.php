<?php include 'update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/backgound.css">
</head>
</head>
<body>
	<div class="container">
		<form action="update.php" style="background-color: #080202a1;color: #fff;font-size: 20px;"
		      method="post">
            
		   <h4 class="display-4 text-center">Atualizar dados</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="name">Nome Completo</label>
		     <input type="name" 
		           class="form-control" 
		           id="name" 
		           name="name" 
		           value="<?=$row['name'] ?>" >
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
		     <label for="nascimento">Nascimento</label>
		     <input type="date" 
		           class="form-control" 
		           id="nascimento" 
		           name="nascimento" 
		           value="<?=$row['nascimento'] ?>" >
		   </div>

		 
		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Atualizar</button>
		    <a href="registros.php" 
			style="padding: 8px;background: #007bff;color: #fff;border-radius: 4px;margin: 13px 7px;">Ver registros</a>
	    </form>
	</div>
</body>
</html>