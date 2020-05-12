<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo "O nome não pode ser vazio";
    return;
}
if(strlen($nome) < 3)
{
    echo "O nome tem que ter pelo menos 3 caracteres";
    return;
}
if (strlen($nome) > 40)
{
    echo "O nome é muito extenso";
    return;
}
if (!is_numeric($idade))
{
    echo "O valor deve ser numérico";
    return;
}

if ($idade >= 6 && $idade <=12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo "O nadador ". $nome. " compete na categoria ". $categorias[$i];
    }
}
elseif ($idade >= 13 && $idade <=18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
            echo "O nadador     ". $nome. " compete na categoria ". $categorias[$i];
    }
}
else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
            echo "O nadador ". $nome. " compete na categoria ". $categorias[$i];
    }
}