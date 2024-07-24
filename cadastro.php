<?php
session_start();
$conectar = mysql_connect('localhost','root','');
$banco = mysql_select_db('academia');

if (isset($_POST['cadastrar']))
{
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  if ($nome != "" and $email != "" and $senha != "")
  {
       //gravar no banco as informacoes
   $sql = "INSERT INTO cliente (nome,email,senha)
   VALUES ('$nome','$email','$senha')";
   
   $resultado = mysql_query($sql);
   if ($resultado === TRUE)
   {
      echo 'Cadastro realizado com Sucesso';
   }
  }
  else
  {
     echo 'Erro ao gravar dados.';
  }
}

?>
