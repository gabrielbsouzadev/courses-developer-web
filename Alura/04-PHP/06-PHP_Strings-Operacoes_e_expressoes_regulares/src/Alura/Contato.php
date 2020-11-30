<?php

namespace App\Alura;

class Contato 
{

    private $email;
    private $endereco;
    private $cep;
    private $telefone;

    public function __construct(string $email, string $endereco, string $cep, string $telefone)
    {
        $this->email = $email;
        

        if ($this->validaEmail($email) !== false) {
            $this->setEmail($email);
        } else {
            $this->email = "Email inválido";
        }

        if ($this->validaTelefone($telefone)) {
            $this->setTelefone($telefone);
        } else {
            $this->setTelefone("Telefone Inválido");
        }

        $this->endereco = $endereco;
        $this->cep = $cep;
    }

    private function validaTelefone(string $telefone): int
    {
        //Validar celular preg_match(‘/^[0-9]{5}-[0-9]{4}/’);
        return preg_match('/^[0-9]{4}-[0-9]{4}$/', $telefone, $encontrados);
    }

    private function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }

    private function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getUsuario(): string
    {
        $posicaoArroba = strpos($this->email, "@");

        if ($posicaoArroba === false) {
            return "usuario Inválido";
        }

        return substr($this->email, 0, $posicaoArroba);
    }

    private function validaEmail(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function getEmail(): string 
    {
        return $this->email;
    }

    public function getEnderecoCep(): string
    {
        //extrair apenas o cep por expressão regular preg_match('/[0-9]{5}-[0-9]{3}/',$endereco,$encontrados);
        $enderecoCep = [$this->endereco, $this->cep];
        return implode(" - ", $enderecoCep);
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

}

?>