<?php include('conecta.php'); ?>

<?php

$id = $_POST['id'];

$a = apagar($id);

?>

<html>
<head>
<meta http-equiv="refresh" content="1; url=buscar.php">
</head>
</html>