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
    <title>Home</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Hola, <?php echo $_SESSION['name']; ?></h1>
     <nav class="home-nav">
         <img src="img/f.jpg" alt="">
     	<a href="change-password.php">Cambiar Contraseña</a>
        <a href="logout.php">Cerrar Sesión</a>
     </nav>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>