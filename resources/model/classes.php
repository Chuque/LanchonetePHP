<?php 

	abstract class Pessoa
	{
		private var $cpf;
		private var $nome;
		private var $sexo;
		private var $dataNasc;
		private var $email;
		private var $telefone;
		private var $cep;
		private var $rua;
		private var $numero;
		private var $bairro;
		private var $cidade;
		private var $estado;
		private var $complemento;
		
		function setCpf($cpf)
		{
			$this->cpf = $cpf;
		}

		function setNome($nome)
		{
			$this->nome = $nome;
		}
		
		function setSexo($sexo)
		{
			$this->sexo = $sexo;
		}

		function setDataNasc($dataNasc)
		{
			$this->dataNasc = $dataNasc;
		}
		
		function setEmail($email)
		{
			$this->email = $email;
		}
		
		function setTelefone($telefone)
		{
			$this->telefone = $telefone;
		}
		
		function setCep($cep)
		{
			$this->cep = $cep;
		}
		
		function setRua($rua)
		{
			$this->rua = $rua;
		}
		
		function setNumero($numero)
		{
			$this->numero = $numero;
		}
		
		function setBairro($bairro)
		{
			$this->bairro = $bairro;
		}
		
		function setCidade($cidade)
		{
			$this->cidade = $cidade;
		}
		
		function setEstado($estado)
		{
			$this->estado = $estado;
		}
		
		function setComplemento($complemento)
		{
			$this->complemento = $complemento;
		}
		
		function getCpf()
		{
			return $this->cpf;
		}
		
		function getNome()
		{
			return $this->nome;
		}

		function getSexo()
		{
			return $this->sexo;
		}

		function getDataNasc()
		{
			return $this->dataNasc;
		}
		
		function getEmail()
		{
			return $this->email;
		}
		
		function getTelefone()
		{
			return $this->telefone;
		}
		
		function getCep()
		{
			return $this->cep;
		}
		
		function getRua()
		{
			return $this->rua;
		}
		
		function getNumero()
		{
			return $this->numero;
		}
		
		function getBairro()
		{
			return $this->bairro;
		}
		
		function getCidade()
		{
			return $this->cidade;
		}
		
		function getEstado()
		{
			return $this->estado;
		}
		
		function getComplemento()
		{
			return $this->complemento;
		}
		
	}

?>