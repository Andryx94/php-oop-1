<?php
  class User {
    public $nome;

    public $cognome;

    public $data_nascita;

    public $username;

    public $password;

    public $email;

    public $data_registrazione;

    public $messaggi_inviati;

    public $online;

    public $ultimo_accesso;

    function __construct($nome, $username, $password, $email, $data_registrazione) {
      $this->nome = $nome;
      $this->username = $username;
      $this->password = $password;
      $this->email = $email;
      $this->data_registrazione = $data_registrazione;
    }
  }
?>
