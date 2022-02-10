<?php
session_start();

$traduzir = $_POST['traduzir'];
$traduzido = $_POST['traduzido'];
$comando = $_POST['comando'];
$teste = array (
  array("linguagem", "throw", "function/void", "stringtoint", "inttostring", "stdin", "stdout"),
  array("c#", "throw;", "void()=>;", "int.Parse", ".ToString();", "Console.Read();", "Console.Write();"),
  array("java", "throw;", "void(){}", "Integer.parseInt();", "Integer.toString();", "new Scanner(System.in.nextInt();)", "System.out.print();"),
  array("javascript", "throw;", "function(){}", "parseInt();", ".toString();", "Não existe", "console.log()"),
  array("php", "throw;", "function(){}", "intval();", "strval();", "fgets();", "echo;"),
  array("python", "raise", "def():", "int()", "str()", "input()", "print()")
);
$contador = count($teste);
$coluna;
$linha;
$_SESSION['comandoValido'] = false;

for ($i = 0; $i < $contador; $i++) {
  for ($j = 0; $j < $contador+100; $j++) {
    if ($traduzido == $teste[$i][$j]) {
      $linha = $i;
    }
    if($comando == $teste[$i][$j]){
      $coluna = $j;
      $_SESSION['comandoValido'] = true;
    }
  }
}

$_SESSION['traduzir'] = $traduzir;
$_SESSION['traduzido'] = $traduzido;
$_SESSION['comando'] = $comando;
$_SESSION['linguagem'] = $traduzir;
$_SESSION['mensagem_de_sucesso'] = $teste[$linha][$coluna];
header("location: index.php");
return;

?>