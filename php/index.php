
<?php
        $host = "db";
        $usuario = 'devuser';
        $senha = 'devpass' ;
        $db = 'trabalho';
       
	$mysqli = new mysqli($host,$usuario,$senha,$db);
        if ($mysql -> connect_errno){
                echo "falha na conexao (".$mysqli->connect_errno.")".$mysqli->connect_erro; 
        };

	$name = $_POST['name'];
	$email = $_POST['email'];
	$cpf = $_POST['cpf'];
	$pass = $_POST['senha'];
	$sql = "INSERT INTO login (LOG_USUARIO, LOG_SENHA) VALUES ('$name','$pass')";
	mysqli_query($mysqli,$sql);
?>
<html>
<head>
        <title>Vendas | Login</title>
        <meta charset="utf-8">
       <style>
		body {
  			font-family: Helvetica, Arial, sans-serif;
  			margin: 0 auto;
  			width: 25%;
		}

		.container {
  			width: 100%;
		  	display: block;
  			margin-top: 50%; //200px;
		}
 
		.input-label {
 			 display: block;
 			 color: #b6b6b6;
 			 font-size: 0.8rem;
 			 margin: 20px 0 5px;
		}

		.input-text {
 			 color: #333333;
 			 border: none;
 			 border-bottom: 1px solid #b6b6b6;
 			 font-size: 1rem;
 			 margin: 2px 0 5px;
 			 width: 100%;
		}

		.input-text:focus-visible {
 			 border: none;
 			 border-bottom: 1px solid #333333;
 			 outline: none;
		}


		.button {
			  background-image: linear-gradient(to right, lightblue, purple);
			  border: none;
			  border-radius: 30px;
			  color: #fff;
 			  font-weight: bold;
			  font-size: 1rem;
			  margin: 20px 0;
			  padding: 15px;
			  width: 100%;
		}

		.button:hover {
			  opacity: 70%;
		}

		.button:disabled {
			  color: #dddcdc;
			  background-color: #f6f6f6;
		}
	</style>
</head>
<body>
 <main>
    <div class="container">
      <form method="POST" action="" id="login-form">
        <label for="name" class="input-label">Nome completo (sem abreviações)</label>
        <input type="text" name="name" id="name" class="input-text">
        <label for="email" class="input-label">E-mail</label>
        <input type="email" name="email" id="email" class="input-text">
        <label for="cpf" class="input-label">CPF</label>
        <input type="text" name="cpf" id="cpf" class="input-text">
        <label for="senha" class="input-label">Senha</label>
        <input type="password" name="senha" id="senha" class="input-text">
        <button type="submit" class="button">Cadastrar</button>
      </form>
    </div>
  </main>
</body>
</html>

