<?php
  // classe Staff estende classe User
  class Staff extends User {
    public $ruolo;

    public function __construct($_ruolo, $_username, $_password, $_email, $_data_registrazione) {
      $this->ruolo = $_ruolo;
      $this->username = $_username;
      $this->password = $_password;
      $this->email = $_email;
      $this->data_registrazione = $_data_registrazione;
    }
  }
?>
