<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    include "php/db_conn.php";

if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);
    
    if(empty($op)){
      header("Location: change-password.php?error=Contraseña anterior es obligatoria");
	  exit();
    }else if(empty($np)){
      header("Location: change-password.php?error=La nueva contraseña es obligatoria");
	  exit();
    }else if($np !== $c_np){
      header("Location: change-password.php?error=Las contraseñas no coinciden");
	  exit();
    }else {
    	$op = $op;
    	$np = $np;
        $id = $_SESSION['id'];

        $sql = "SELECT password FROM users WHERE id='$id' AND password='$op'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE users SET password='$np' WHERE id='$id'";
        	mysqli_query($conn, $sql_2);
        	header("Location: change-password.php?success=Tu contraseña se ha reestablecido con exito 😁");
	        exit();

        }else {
        	header("Location: change-password.php?error=Contraseña incorrecta");
	        exit();
        }

    }

    
}else{
	header("Location: change-password.php");
	exit();
}

}else{
     header("Location: index.php");
     exit();
}