<?php 

if (isset($_GET['id'])) {
	include "../../db_conn.php";

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
    	header("Location: registros.php");
    }


}else if(isset($_POST['update'])){
    include "../../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$name = validate($_POST['name']);
	$telefone = validate($_POST['telefone']);
        $email = validate($_POST['email']);
        $nascimento = validate($_POST['nascimento']);
	$id = validate($_POST['id']);

	if (empty($name)) {
		header("Location: ../update.php?id=$id&error= Nome é Obrigatório");
	}else if (empty($telefone)) {
		header("Location: ../update.php?id=$id&error=Telefone é Obrigatório");
        }else if (empty($email)) {
		header("Location: ../update.php?id=$id&error=E-mail é Obrigatório");
        }else if (empty($nascimento)) {
		header("Location: ../update.php?id=$id");
	}else {

       $sql = "UPDATE users
               SET name='$name', email='$email'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: registros.php?success=successfully updated");
       }else {
          header("Location: update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: registros.php");
}