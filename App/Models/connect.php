<?php

/**
 * Conexão com o banco de dados
 */
 class Connect
 {
 	
 	var $localhost = "localhost";
 	var $root = "root";
 	var $passwd = "";
 	var $database = "controlestoque";
 	var $SQL;
 	


 	public function __construct()
 	{
 		$this->SQL = mysqli_connect($this->localhost, $this->root, $this->passwd);
		mysqli_select_db($this->SQL, $this->database);
		if(!$this->SQL){
			die("Conexão com o banco de dados falhou!:" . mysqli_connect_error($this->SQL)); 
		}
 	}

 	function login($username, $password){

        //Primeiro consulta a tabela de usuário, verificando o resultado linha por linha, se encontrado, vai pra senha.
        //Retornando automaticamnete 
 		$this->query  = "SELECT * FROM `usuario` WHERE `Username` = '$username'";
 		$this->result = mysqli_query($this->SQL, $this->query) or die(mysqli_error($this->SQL));
 		$this->total  = mysqli_num_rows($this->result);

 		if($this->total){

            //Pega todo o array resultante e desfaz a criptografia para analisar a senha correspondente.
            //Aceitando, retorna uma sessão para o id desse usuário, seu nome, foto e a permissão que ele detém.
            //Redirecioando para o index da pasta view.
 			$this->dados = mysqli_fetch_array($this->result);
 			if(!strcmp($password, $this->dados['Password'])){

 				$_SESSION['idUsuario'] = $this->dados['idUser'];
 				$_SESSION['usuario']   = $this->dados['Username'];
 				$_SESSION['perm']      = $this->dados['Permissao'];
 				$_SESSION['foto']      = $this->dados['imagem'];
 				
 				header("Location: ../views/");
 			}else{
                 
            //Resusando senha, atualiza a página retornando um alerta de senha inválida.
 				header("Location: ../login.php?alert=2");
 			}
 		}else{
             
            //Resusando usuário, atualiza a página retornando um alerta de usuário inválido.
 				header("Location: ../login.php?alert=1");
 			}
 	}
 	
 }
$connect = new Connect; 
