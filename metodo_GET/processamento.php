<?php


if(isset($_GET['nome'])){
    
    $nome = $_GET['nome'];

}else{

    $nome = "Vazio";
}
?>

<h1>Seu nome é <?php echo $nome ?></h1>