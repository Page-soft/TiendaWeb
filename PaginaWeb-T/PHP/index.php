<?php
    session_start();
    if (!isset($_SESSION['username']) && !isset($_SESSION ['id'])) { ?>
    <?php
include "Header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="../CCS/Estilos.css">
</head>
<style>
	body {
background-image: url("../Imagenes/Fondo1.jpeg");
background-size: cover;
background-repeat: no-repeat;
}
</style>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <form class="border shadow p-3 rounded" action="check-login.php" method="POST" style="width: 450px;">
            <h1 class="text-center p-3">Login</h1>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert-danger" role="alert">
                <?=$_GET['error'] ?>
                </div>
            <?php } ?>
            <div class="mb-3">
                    <label for="username" class="from-label">Username </label>
                    <input type="text" class="from-control" name="username" id="username">
            </div>
            <div class="mb-3">
                    <label for="password" class="from-label">password </label>
                    <input type="password" class="from-control" name="password" id="password">
            </div>
            <div class="mb-1">
                    <label class="from-label">Selecciona tu tipo de Usuario </label>
            </div>
            <select class="form-select mb-3" name="role" aria-label="Seleccion">
                <option selected value="user">Usuario</option>
                <option value="admin">Admin</option>
            </select>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="registro.php" >¿Todavía no tienes cuenta?</a></p>
        </form>
            </div>
</body>
<?php
    include "Footer.php";
    ?>
</html>
<?php } else{
    header("Location: home.php");
} ?>