<?php
public class Funcoes(){
	public __construct(){
	}
	public dataHora(){
		return date('Y-m-d H:i');
	}
	public function IsValidEmail($email){
		$conta = "^[a-zA-Z0-9\._-]+@";
		$domino = "[a-zA-Z0-9\._-]+.";
		$extensao = "([a-zA-Z]{2,4})$";
		$pattern = $conta.$domino.$extensao;
		return (ereg($pattern, $email))?true:false;
	}
}
?>
