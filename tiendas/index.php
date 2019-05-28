<?php
include('common/utils.php');

if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
    <?php } ?>

    <form action="php/process_login.php" method="post">
        <input type="text" name="username" placeholder="Usuario">
        <input type="password" name="password" placeholder="Clave">
        <button>Ingresar</button>
        <div>
        <a href="registration.php">Registrar mi tienda</a>    
        </div>
    </form>
    
</body>
</html>
