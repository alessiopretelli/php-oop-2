<?php

require_once 'db.php';

class Amministratore extends User {

    public function __construct($_nome, $_cognome, $_eta, $_sesso, $_indirizzo, $_numero_telefono, $_codice_fiscale)
    {
        parent::__construct($_nome, $_cognome, $_eta, $_sesso);
        $this->indirizzo = $_indirizzo;
        $this->numero_telefono = $_numero_telefono;    
        $this->codice_fiscale = $_codice_fiscale;        
    }

}