<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>Contratado</title>
<link rel="stylesheet" type="text/css"  href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/stylebotstrap.css">
</head>
<body>
<nav class="navbar sticky-top navbar-light bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="../html/index.html" style="font-family: Cambria,'Times New Roman'">
      <img src="../css/img/logo.png" alt="logo" id="logo">
    </a>
	  <ul class="navbar-nav">
        <li class="nav-item">
			<a class="nav-link" href="https://instagram.com/redlanterndesign?igshid=gftbe239iijfindex.html">
				<img src="../css/img/instagram1.png" id="insta" alt="logo do insta empresa">
			</a>
        </li>
	  </ul>
  </div>
</nav>	
<center>		
<?php
$host = "localhost";
$user = "root";
$pass = "123";
$banco = "contrato";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die (mysql_error());
?>
<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$celular=$_POST['celular'];
$estado=$_POST['estado'];
$cidade=$_POST['cidade'];

$sql = mysql_query("INSERT into usuarios(nome, email, celular, estado, cidade)
values('$nome','$email','$celular', '$estado', '$cidade')");
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<h1 class="titulos" style="font-size:70px"> Contração bem sucedida! <img src="../css/img/joinha.jpg"</h1>
</center>
</body>
</html>
