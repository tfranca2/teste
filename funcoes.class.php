<?php
public class Funcoes(){
	public __construct(){
	}
	public dataHora(){
		return date('Y-m-d H:i');
	}
	public hash($string){
		return md5($string);
	}
}
?>