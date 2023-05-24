<?php

if (isset($_POST)) {
    //tira os espaços para cair na validação corretamente
    $nome = str_replace(' ', '', $_POST["nome"]);
    $email =  $_POST["email"];
    $idade = $_POST["idade"];
    $hobbie = $_POST["hobbie"];
    if (strlen($nome) >= 6) {
        //deixer a idade como >maior que 18 como estava no desafio, e não >= maior igual a 18
        if ($idade > 18) {
            echo "<script>alert('Salvo com sucesso!!')</script>";
            echo "<script>location.href='formulario.php'</script>";
        } else {
            echo "<script>alert('Precisa ser maior de 18 anos')</script>";
            echo "<script>location.href='formulario.php'</script>";
        }
    } else {
        echo "<script>alert('Nome com menos de 6 letras | Invalido!')</script>";
        echo "<script>location.href='formulario.php'</script>";
    }
}
