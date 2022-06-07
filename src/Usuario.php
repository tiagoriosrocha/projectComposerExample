<?php

declare(strict_types=1);

namespace tiagoriosrocha\testcomposer;

class Usuario
{
    public int $id;
    
    public string $nome;
    
    public string $email;

    public function __construct(string $nome, string $email){
        $this->nome = $nome;
        $this->email = $email;    
    }

    public function validarEmail(string $email) : bool{
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}