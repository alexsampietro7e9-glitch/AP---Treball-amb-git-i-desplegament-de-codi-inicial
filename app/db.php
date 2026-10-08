*** DB.PHP ***

<?php
$servername = "locahost";
$username = "root";
$password = "root";
$dbname = "crud_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
?>
AP Projecte ASIXc2Codi en PHP

*** Estructura del projecte i codi a desplegar ***
app/
 ├── db.php         (connexió a la BBDD)
 ├── index.php      (llista usuaris + formulari per afegir-ne)
 ├── add.php        (afegeix usuari)
 ├── delete.php     (elimina usuari)
 └── edit.php       (edita usuari)
?>
