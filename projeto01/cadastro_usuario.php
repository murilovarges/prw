<?php
    include('conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    echo "<h1> Cadastro de Usuários</h1>";
    echo "<p> Nome: " . $nome . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Telefone: " . $telefone . "</p>";
	
	$sql = "INSERT INTO usuario (nome_usuario,email_usuario,telefone_usuario) 
	        VALUES ('".$nome."','".$email."','".$telefone."')";
	    
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados inseridos com sucesso";
	else
		echo "Erro ao inserir no banco de dados: ".mysqli_error($con);
?>