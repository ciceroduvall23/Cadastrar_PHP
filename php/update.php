<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
    include "../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$razaosocial = validate($_POST['razaosocial']);
	$cnpj = validate($_POST['cnpj']);
        $telefone = validate($_POST['telefone']);
        $email = validate($_POST['email']);
        $endereco = validate($_POST['endereco']);
	$id = validate($_POST['id']);

	if (empty($razaosocial)) {
		header("Location: ../update.php?id=$id&error=Razão Social é obrigatório");
	}else if (empty($cnpj)) {
		header("Location: ../update.php?id=$id&error=CNPJ é obrigatório");
        }else if (empty($telefone)) {
		header("Location: ../update.php?id=$id&error=Telefone  é obrigatório");
        }else if (empty($email)) {
		header("Location: ../update.php?id=$id");
        }else if (empty($endereco)) {
		header("Location: ../update.php?id=$id");
	}else {

       $sql = "UPDATE users
               SET razaosocial='$razaosocial', cnpj='$cnpj', telefone='$telefone', email='$email', endereco='$endereco'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=Atualização bem sucedida");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: read.php");
}