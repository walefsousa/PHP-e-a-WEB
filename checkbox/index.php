<?php
    if(isset($_POST['ingredientes'])){
        
        $ingredientes = $_POST['ingredientes'];
        
        print_r($ingredientes);    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div>
            <input type="checkbox" name="ingredientes[]" value="tomate"> Tomate
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="alface"> Alface
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="cebola"> Cebola
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="milho"> Milho
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html> 