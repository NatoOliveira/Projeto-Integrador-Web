<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css"  href="estilohome.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Transcoder</title>
</head>
<body>
    <header>
        <nav id="menu-principal">
        <input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<i class="fas fa-bars"></i>
		</label>
            <figure id="logo">
                <h1><a href="index.php">
                <img src="img/transcoderpng.png" alt="transcoder logo marca"></a></h1>
            </figure>
            <ul id="lista-menu">
                <li><a href="principallogin.php">Login</a></li>
                <li><a href=#>Sobre nós</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <center>
            <img id="titulo" src="img/transcodertitle.png" alt="transcoder título">
            <form action="script.php" method="post">      
                <fieldset class="field1">
                    <label class="traduzir" for="traduzir">Traduzir de:</label>
                        <select class="escolha1" name="traduzir" id="traduzir" required>
			                <option value=""></option>
                            <!-- C# -->
			                <option value="c#"
                            <?php
                            if (isset($_SESSION['traduzir'])){
                                if($_SESSION['traduzir'] == 'c#'){
                                    echo "selected=selected";
                                }   
                            }
                            ?>
                            >C#</option>
                            <!-- Java -->
			                <option value="java"
                            <?php
                            if (isset($_SESSION['traduzir'])){
                                if($_SESSION['traduzir'] == 'java'){
                                    echo "selected=selected";
                                }   
                            }
                            ?>
                            >Java</option>
                            <!-- JavaScript -->
			                <option value="javascript"
                            <?php
                            if (isset($_SESSION['traduzir'])){
                                if($_SESSION['traduzir'] == 'javascript'){
                                    echo "selected=selected";
                                }   
                            }
                            ?>
                            >JavaScript</option>
                            <!-- PHP -->
			                <option value="php"
                            <?php
                            if (isset($_SESSION['traduzir'])){
                                if($_SESSION['traduzir'] == 'php'){
                                    echo "selected=selected";
                                }   
                            }
                            ?>
                            >PHP</option>
                            <!-- Python -->
			                <option value="python"
                            <?php
                            if (isset($_SESSION['traduzir'])){
                                if($_SESSION['traduzir'] == 'python'){
                                    echo "selected=selected";
                                }   
                            }
                            ?>
                            >Python</option>
		                </select>
	            <br><br>
		            <label class="comando" for="comando">Comando:</label>
		            <input class="digiteocomando" type="text" id="comando" name="comando" placeholder="Ex: Console.Read();" value="<?php echo isset($_SESSION['comando']) ? $_SESSION['comando'] : '' ?>" required>
                </fieldset>
                <fieldset class="field2">
                    <label class="para" for="traduzido">Para:</label>
		                <select class="escolha2"name="traduzido" id="traduzido" required>
			                <option value=""></option>
                            <!-- C# -->
			                <option value="c#"
                            <?php
                            if (isset($_SESSION['traduzido'])){
                                if($_SESSION['traduzido'] == 'c#'){
                                    echo "selected=selected";
                                }   
                            }
                            ?>
                            >C#</option>
                            <!-- Java -->
			                <option value="java"
                            <?php
                            if (isset($_SESSION['traduzido'])){
                                if($_SESSION['traduzido'] == 'java'){
                                    echo "selected=selected";
                                }   
                            }
                            ?>
                            >Java</option>
                            <!-- JavaScript -->
			                <option value="javascript"
                            <?php
                            if (isset($_SESSION['traduzido'])){
                                if($_SESSION['traduzido'] == 'javascript'){
                                    echo "selected=selected";
                                }   
                            }
                            ?>
                            >JavaScript</option>
                            <!-- PHP -->
			                <option value="php"
                            <?php
                            if (isset($_SESSION['traduzido'])){
                                if($_SESSION['traduzido'] == 'php'){
                                    echo "selected=selected";
                                }   
                            }
                            ?>
                            >PHP</option>
                            <!-- Python -->
			                <option value="python"
                            <?php
                            if (isset($_SESSION['traduzido'])){
                                if($_SESSION['traduzido'] == 'python'){
                                    echo "selected=selected";
                                }   
                            }
                            ?>
                            >Python</option>
		                </select>
                <br><br>        
		            <label class="traducoes" for="traducao">Tradução:</label>
		            <p id="traducao" class="traducao" name="traducao">
                        <?php
		                    $mensagemDeSucesso = isset($_SESSION['mensagem_de_sucesso']) ? $_SESSION['mensagem_de_sucesso'] : '';
                            $mensagemDeErro = isset($_SESSION['mensagem_de_erro']) ? $_SESSION['mensagem_de_erro'] : '';
		                    if (!empty($mensagemDeSucesso)) {
			                    echo $mensagemDeSucesso;
		                    }
                            if ($_SESSION['comandoValido'] == false) {
                                echo $mensagemDeErro;
                            }
	                    ?> 
                    </p>
                </fieldset>
                <br>
                    <button id="botao" type="submit">TRADUZIR</button>
            </form>
        </center>
    </section>
</body>
</html>