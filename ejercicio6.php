<?php
// Start a PHP session
session_start();


if (isset($_SESSION['visitar'])) {
    $_SESSION['visitar']++;
} else {
    $_SESSION['visitar'] = 1;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contador</title>
</head>
<body>
    <h1>Hola</h1>

    <p>has visitado <?php echo $_SESSION['visitar']; ?> veces.</p>
</body>
</html>