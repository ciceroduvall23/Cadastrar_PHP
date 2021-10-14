<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
	<div class="container">
		<form action="create.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Cadastrar Colaborador</h4><hr><br>
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
		           value="<?php if(isset($_GET['name']))
		                           echo($_GET['name']); ?>" 
		           placeholder="Enter name">
		   </div>
		   <div class="form-group">
		     <label for="telefone">Telefone</label>
		     <input type="number" 
		           class="form-control" 
		           id="telefone" 
		           name="telefone" 
		           value="<?php if(isset($_GET['telefone']))
		                           echo($_GET['telefone']); ?>"
		           placeholder="Digite o seu Número">
		   </div>
		   <div class="form-group">
		     <label for="email">E-mail</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="email" 
		           value="<?php if(isset($_GET['email']))
		                           echo($_GET['email']); ?>"
		           placeholder="Digite o seu  E-mail">
		   </div>

		   <div class="form-group">
		     <label for="nascimento">Data Nascimento </label>
		     <input type="date" 
		           class="form-control" 
		           id="nascimento" 
		           name="nascimento" 
		           value="<?php if(isset($_GET['nascimento']))
		                           echo($_GET['nascimento']); ?>"
		           placeholder="Digite a sua Data de Nascimento">
		   </div>
		 
		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Cadastrar</button>

            <button><a href="../../index.php" class="link-primary">Registrar Empresa</a></button>
			<button><a href="registros.php" class="link-secundary">Ver cadastros</a></button>
	    </form>
	</div>
</body>
</html>