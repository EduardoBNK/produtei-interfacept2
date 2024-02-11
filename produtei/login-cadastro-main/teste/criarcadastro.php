<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

function CadastroUsuarios($usuario,$senha){
$conexao = new PDO("mysql:host=localhost;dbname=test","root","");
$query ="INSERT INTO usuarios(usuario,senha) VALUE('".$usuario."','".$senha."')";
$conexao ->exec($query);
$ultimo_id = $conexao->lastInsertid();

}
CadastroUsuarios($usuario,$senha);