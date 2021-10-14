<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
  /* vamos fazer as validadações e conectart com os campos do banco */
	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
    $cnpj = validate($_POST['cnpj']);
	$telefone = validate($_POST['telefone']);
    $razaosocial = validate($_POST['razaosocial']);
	$nascimento = validate($_POST['nascimento']);



	$user_data = 'name='.$name. '&email='.$email. '&email='.$email. '&cnpj='.$cnpj. '&razaosocial='.$razaosocial. '&nascimento='.$nascimento ;

	if (empty($name)) {
		header("Location: ../index.php?error=Name is required&$user_data");
	}else if (empty($email)) {
		header("Location: ../index.php?error=Email is required&$user_data");
	}else if (empty($cnpj)) {
		header("Location: ../index.php?error=cnpj is required&$user_data");
	}else if (empty($telefone)) {
		header("Location: ../index.php?error=telefone is required&$user_data");
	}else if (empty($razaosocial)) {
		header("Location: ../index.php?error=razaosocial is required&$user_data");
	}else if (empty($nascimento)) {
		header("Location: ../index.php?error=nascimento is required&$user_data");
	}else {
	
       $sql = "INSERT INTO users(name, email,cnpj,telefone,razaosocial,nascimento) 
               VALUES('$name', '$email', '$cnpj', '$telefone', '$razaosocial', 'nascimento')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}
