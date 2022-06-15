<?php 

   public class Cliente {
       private $codigo;
       private $nome;
       private $login;
       private $cpf;
       private $senha;
       private $telefone;
       private $email;

	public function getNome() {
    return $this->nome;
  }
  
  	public function setNome($name) {
    $this->nome= $name;
  }	   

	public function getLogin() {
    return $this->login;
  }
  
  	public function setLogin($login) {
    $this->login= $login;
  }	

	public function getCPF() {
    return $this->cpf;
  }
  
  	public function setCPF($cpf) {
    $this->cpf= $name;
  }

	public function getSenha() {
    return $this->senha;
  }
  
  	public function setSenha($senha) {
    $this->senha= $senha;
  }

	public function getTelefone() {
    return $this->telefone;
  }
  
  	public function setTelefone($telefone) {
    $this->telefone= $telefone;
  }

	public function getEmail() {
    return $this->nome;
  }
  
  	public function setEmail($email) {
    $this->email= $email;
  }

   } 


 ?>   
