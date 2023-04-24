<?php

$usuario = [

    'nome' => 'walef',
    'senha'=> '1234'
];
if($usuario){
    $nome = $usuario['nome'];
    $senha = $usuario['senha'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="">
            <div>
                <input type="texte" name="nome" placeholder="Digite seu nome" value="<?php echo $nome; ?>"></input>
            </div>

        </form> 
</body>
</html>