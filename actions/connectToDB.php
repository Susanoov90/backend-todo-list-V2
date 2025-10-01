<?php
$servername = "localhost";
$username = "root";
$password = "";
$db ="taskmanager";

try {
   $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "<script>console.log('Connect success')</script>"; //Je veux que le message de succes ou d'echec au niveau de la connexion à la BD s'affiche dans la console
} catch(PDOException $e) {
   $message = "Connection failed: " . $e->getMessage();
   echo "<script> console.log("+ $message  +")</script>"; //Meme chose ici
}
?>