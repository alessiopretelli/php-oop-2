<?php

require_once 'trait.php';

class User {
    public $id;
    public $nome;
    public $cognome;
    public $sesso;
    public $eta;
    // indirizzo, numero telefono e codice fiscale sono richiesti esclusivamente agli amministratori
    protected $indirizzo;
    protected $numero_telefono;
    protected $codice_fiscale;
    // 
    private $password;

    public function __construct($_nome, $_cognome, $_eta, $_sesso)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->eta = $_eta;
        $this->sesso = $_sesso;
    }

    use Set_password;
}