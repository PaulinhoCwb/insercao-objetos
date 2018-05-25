<?php 
include'Person.php';

$person = new Person('Joao','Curitiba', 27);

$pdo = new PDO('mysql:host=localhost;dbname=teste','root','');
$stm = $pdo->prepare();
$stm->execute((array) $person);

 ?>
