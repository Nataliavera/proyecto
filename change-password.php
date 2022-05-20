<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cambiar Contraseña</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<form action="change-p.php" method="post">
     	<h2>Cambiar Contraseña</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

     	<label>Contraseña Anterior</label>
     	<input type="password" name="op" placeholder="Contraseña Anterior"><br>

     	<label>Nueva Contraseña</label>
     	<input type="password"  name="np" placeholder="Nueva Contraseña"><br>

     	<label>Confirmar Contraseña</label>
     	<input type="password" name="c_np" placeholder="Confirma Nueva Contraseña"><br>

     	<button type="submit">Cambiar</button>
		<a href="home.php" class="ca">HOME</a>
     </form>
</body>
</html>

<?php 
}else{
     header("Location: index1.php");
     exit();
}
 ?>