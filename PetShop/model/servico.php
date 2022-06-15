<?php

   public class Animal {
     private $codigo;
     private $indicacao;
     private $preco;
     private $disponibilidade;
     private $desconto;


	public function getIndicação() {
    return $this->nome;
  }
  
  	public function setNome($name) {
    $this->nome= $name;
  }	   

	public function getTipo() {
    return $this->tipo;
  }
  
  	public function setTipo($tipo) {
    $this->tipo= $login;
  }	

	public function getRaça() {
    return $this->raca;
  }
  
  	public function setRaça($raca) {
    $this->raca= $raca;
  }

	public function getTamanho() {
    return $this->tamanho;
  }
  
  	public function setTamanho($tamanho) {
    $this->tamanho= $tamanho;
  }

	public function getPeso() {
    return $this->peso;
  }
  
  	public function setPeso($peso) {
    $this->peso= $peso;
  }

	public function getIdade() {
    return $this->idade;
  }
  
  	public function setIdade($idade) {
    $this->idade= $idade;
  }


}
     
?>