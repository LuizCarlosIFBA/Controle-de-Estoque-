<?php
//Oculta os notices
ini_set( 'display_errors', 0 );
//
$user = $_POST['user'];
$pass = $_POST['pass'];
 include("bd.php");
/*if($valida[$user]==$pass){*/
if($valida[$user]==$user and $valida[$pass]==$pass){
  setcookie("logado", "1");
  echo "<script>location.href='main.php'</script>";
  }else{?>
     <script languague ="javascript">alert("Dados incorretos! Clique em Ok para sair!");
                                   location.href='index.php';
				   </script>";<?php
     }
 /*echo "<font face=verdana size=2>";
 echo "Usu�rio ou senha incorretos!";
 echo "<br>";
 echo "<a href=/>";
 echo "Clique aqui</a> para tentar novamente.";
 echo "</a></font>";*/
 

?>
