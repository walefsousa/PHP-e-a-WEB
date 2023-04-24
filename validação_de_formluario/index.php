<?php
    
    $validacoes = [];

    if(count($_POST) > 0){   
        
        if($_POST['nome'] === ""){
            $validacoes[] = "Por favor, Preencha o seu nome!";
        }
        if($_POST['senha'] != $_POST['confirmacao']){
            $validacoes[] = "Senhas digitadas estão diferentes!";
        }
    
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
    
    <?php if(count($validacoes)):?>
        <ul>
            <?php foreach($validacoes as $validacao): ?>
            
                <li><?= $validacao ?></li>            
        
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>    
    <form action="index.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Digite o seu nome">
        </div><br>
        <div>
            <input type="text" name="email" placeholder="Digite o seu Email">
        </div><br>
        <div>
            <input type="password" name="senha" placeholder="Digite a sua senha">
        </div><br>
        <div>
            <input type="password" name="confirmacao" placeholder="confirme sua senha">
        </div><br>
        <div>
            <input type="submit" value="Enviar">
        </div><br>
    </form>
</body>

</html>