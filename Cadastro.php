<?php 
session_start();

require 'DBConn.php';

echo"Olá " .   utf8_encode($_REQUEST['E-mail']) . "<br>";
echo"Olá " .   utf8_encode($_REQUEST['Nome']) . "<br>";
echo"Olá " .   utf8_encode($_REQUEST['NIF']) . "<br>";
echo"Olá " .   utf8_encode($_REQUEST['Senha']) . "<br>";
echo"Olá " .   utf8_encode($_REQUEST['Tipo']) . "<br>";
echo"Olá " .   utf8_encode($_REQUEST['Area']) . "<br>";

$InsertEmail = $_REQUEST['E-mail'];
$InsertNome = $_REQUEST['Nome'];
$InsertNIF = $_REQUEST['NIF'];
$InsertSenha = md5($_REQUEST['Senha']);
$InsertTipo = $_REQUEST['Tipo'];
$InsertArea = $_REQUEST['Area'];

$sql = "INSERT INTO `usuarios`
(`Email`, `Senha`, `Tipo`, `Area`, `Nif`, `Nome`)
VALUES (
'$InsertEmail',
'$InsertSenha',
'$InsertTipo',
'$InsertArea',
'$InsertNIF',
'$InsertNome'
)";

  if ($conn->query($sql) === TRUE) {
    echo "Usuario cadastrado com sucesso";
  } else {
    echo"<script language='javascript' type='text/javascript'>
    alert('Erro ao cadastrar, tente novamente');window.location
    .href='cadastro.php';</script>";
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
 header('Location: '. 'index.php');
?>

