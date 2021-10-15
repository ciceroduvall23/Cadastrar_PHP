<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="container">
		<form action="php/create.php"  style="background-color:white;    border-radius: 21px;
           border: 3px solid #3d5d91;"
		      method="post">
            
		   <h4 class="display-4 text-center">Cadastrar Empresa</h4><hr><br>
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
		           value="<?php if(isset($_GET['razaosocial']))
		                           echo($_GET['razaosocial']); ?>"
		           placeholder="Digite a Razão Social ou nome da empresa">
		   </div>
         
		   <div class="form-group">
		     <label for="cnpj">CNPJ</label>
		     <input type="number" 
		           class="form-control" 
		           id="cnpj" 
		           name="cnpj" 
		           value="<?php if(isset($_GET['cnpj']))
		                           echo($_GET['cnpj']); ?>"
		           placeholder="Digite o CNPJ">
		   </div>
         
		   <div class="form-group">
		     <label for="telefone">Telefone</label>
		     <input type="number" 
		           class="form-control" 
		           id="telefone" 
		           name="telefone" 
		           value="<?php if(isset($_GET['telefone']))
		                           echo($_GET['telefone']); ?>"
		           placeholder="Digite o número de telefone">
		   </div>

		   <div class="form-group">
		     <label for="email">E-mail</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="email" 
		           value="<?php if(isset($_GET['email']))
		                           echo($_GET['email']); ?>"
		           placeholder="Digite o e-mail da empresa">
		   </div>
        	   <div class="form-group">
		     <label for="endereco">Endereço</label>
		     <input type="text" 
		           class="form-control" 
		           id="endereco" 
		           name="endereco" 
		           value="<?php if(isset($_GET['endereco']))
		                           echo($_GET['endereco']); ?>"
		           placeholder="Digite o endereço da empresa">
		   </div>
		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Cria empresa</button>

		         <a class="link-primary" href="php/registro.colaborador/index.php" class="link-primary">Cadastrar Colaborador</a>
				<a class="link-primary" href="read.php" class="link-secundary">Ver cadastros</a>
				
	    </form>
	
	</div>
</body>
</html>