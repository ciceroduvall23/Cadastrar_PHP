<?php 

if (isset($_POST['create'])) {
	include "../../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
  /* vamos fazer as validadações e conectart com os campos do banco */
	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$telefone = validate($_POST['telefone']);
	$nascimento = validate($_POST['nascimento']);



	$user_data = 'name='.$name. '&email='.$email. '&email='.$email. '&nascimento='.$nascimento ;

	if (empty($name)) {
		header("Location: ../index.php?error=Name is required&$user_data");
	}else if (empty($email)) {
		header("Location: ../index.php?error=Email is required&$user_data");
	
	}else if (empty($telefone)) {
		header("Location: ../index.php?error=telefone is required&$user_data");
	
	}else if (empty($nascimento)) {
		header("Location: ../index.php?error=nascimento is required&$user_data");
	}else {
	
       $sql = "INSERT INTO users(name, email,telefone,nascimento) 
               VALUES('$name', '$email',  '$telefone', '$nascimento')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: registros.php?success=Criado com sucesso");
       }else {
          header("Location: ../index.php?error=Ocorreu um erro desconhecido&$user_data");
       }
	}

}
