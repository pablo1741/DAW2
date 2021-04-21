<?php
include_once 'conectabd.php';
include_once 'funcDAO.php';
include_once 'funcionario.php';

$funcionario= new funcionario();
$funcionario->nome=$_POST["nome"];
$funcionario->email=$_POST["email"];
$funcionario->senha=$_POST["senha"];
$funcionario->nfunc=$_POST["nfunc"];
$funcionario->celular=$_POST["celular"];
$funcionario->adm=$_POST["adm"];

$funcDAO= new funcDao($funcionario);


$resultado=$funcDAO->inserir();
/*
echo "$funcionario"."<br>";
if (!isset($funcionario)) {
    echo "$funcionario";
$fdao= new funcDao();
$fdao->inserir($funcionario);

echo "//////////////////////<br>";
$a=$fdao->retornar();
var_dump($a);
foreach ($a as $value) {
echo $value['nome'].",";
echo $value['email'].",";
echo $value['senha'].",";
echo $value['nfunc'].",";
echo $value['celular'].",";
echo $value['adm']."<br>";
}
}*/
