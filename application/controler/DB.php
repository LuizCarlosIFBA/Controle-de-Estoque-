<?php

class DB {
	
	private $server;
	private $db;
	private$user;
	private $pass;
	public $conexao;
	public $baseurl;
	
	function __construct() {
		
		$this->server="localhost";
		$this->db="controle_estoque";
		$this->user="root";
		//usuário de banco modificado
		$this->pass="";
		$this->Conectar();
	
	}
	
	
	
	function Conectar(){
		
		$this->conexao=mysql_connect($this->server,$this->user,$this->pass) or die('Erro ao se conectar');
		mysql_select_db($this->db,$this->conexao) or die('Erro ao selecionar a DB');
		
	}
	
	
	function PesquisaTabela($tabela){
		
		return mysql_query("Select * from $tabela");
		
	}
	
	function PesquisaCampos($campos, $tabela){
		
		return mysql_query("Select $campos from $tabela");
	}
	
	function PesquisaUnica($tabela,$id="0"){

        //echo "Select * from $tabela where id=$id";
	
		return(mysql_fetch_array(mysql_query("Select * from $tabela where id=$id")));
	}
	
	
	function ExecutaQuery($query){
		
		return mysql_query($query);
	}
	
	function Nlinhas($query){
		return mysql_num_rows($query);
		
	}
	
	function ListarCampos($tabela)
	{
		
	$result = mysql_query("SHOW COLUMNS FROM ".$tabela);
	 
	$field = "";
	while($resultado=mysql_fetch_array($result)) {
		//print_r($resultado);
		
	 	foreach($resultado as $campo=>$valor){
	 		
	 		if($campo=='0')
	 		$field.=$valor.",";
	 	}
	 	
	 }
	return $field;
	}
	

}

?>
