<!DOCTYPE html>
<html>

<body>

<div class="container">
<?php
$page = "roeitrainer";

include_once('../Templates/defaults/header.php');
include_once('../Templates/defaults/head.php');
include_once ('../Templates/defaults/menu.php');
?>
<br>
<?php

try{
    $db = new PDO("mysql:host=localhost;dbname=healthone"
    ,"root");
    $query = $db->prepare("SELECT * FROM Product WHERE id = 1");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as &$data){
        echo "Productnummer is: " . $data['id'] . "<br>";
        echo "Naam is: " . $data['name'] . "<br>";
        echo "Beschrijving is: " . $data['description'] . "<br>";
    }
  
} catch(PDOException $e) {
    die("Error!: " . $e->getmessage());
}
?>
<br>
<img id="roeitrainer1" src="img/categories/crosstrainer/cr2.jpg" width="400px" height="300px">
<br><br>
<?php

try{
    $db = new PDO("mysql:host=localhost;dbname=healthone"
    ,"root");
    $query = $db->prepare("SELECT * FROM Product WHERE id = 2");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as &$data){
        echo "Productnummer is: " . $data['id'] . "<br>";
        echo "Naam is: " . $data['name'] . "<br>";
        echo "Beschrijving is: " . $data['description'] . "<br>";
    }
  
} catch(PDOException $e) {
    die("Error!: " . $e->getmessage());
}
?>
<br>
<img id="roeitrainer1" src="img/categories/crosstrainer/cr6.jpg" width="400px" height="300px">
<br><br>
<a href="categories.php">Terug naar categories</a>
<br><br>
<?php
    include_once ('../Templates/defaults/footer.php');
?>
</div>

</body>
</html>