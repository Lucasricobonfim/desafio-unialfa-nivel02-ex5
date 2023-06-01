<?php

if (isset($_POST)) {
    //tira os espaços para cair na validação corretamente
    $nome = str_replace(' ', '', $_POST["nome"]);
    $email =  $_POST["email"];
    $idade = $_POST["idade"];
    $hobbie = $_POST["hobbie"];
    if (strlen($nome) <= 6) {
        // echo 'Nome invalido, menor de 6 letras'; 
        die("Nome invalido, menor de 6 letras");
    }
    if ($idade < 18) {
        // echo 'menor de 18 anos / invalido';
        die("menor de 18 anos / invalido");
    }

    echo "Nome: " . $nome;
    echo '<br>';
    echo "email: " . $email;
    echo '<br>';
    echo "Idade: " . $idade;
    echo '<br>';
    echo "Hobbie: " . $hobbie;
}
