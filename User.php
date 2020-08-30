<?php
  // classe User
  class User {

    use Sconto;

    public $nome;

    public $cognome;

    public $data_nascita;

    public $username;

    protected $password;

    public $email;

    public $data_registrazione;

    public $messaggi_inviati;

    public $online = false;

    public $ultimo_accesso;

    public function __construct($_username, $_password, $_email, $_data_registrazione) {
      $this->username = $_username;
      $this->password = $_password;
      $this->email = $_email;
      $this->data_registrazione = $_data_registrazione;
    }

    // funzione ottenimento status
    public function getStatus($_online) {
      if ($this->online === true) {
        return 'Online';
      }
      else {
        return 'Offline';
      }
    }

    // funzione ottenimento dati utente
    public function  getUserData() {
      return [
        'username' => $this->username,
        'messaggi_inviati' => $this->messaggi_inviati,
        'online' => $this->getStatus($online),
        'data_registrazione' => $this->data_registrazione,
      ];
    }
  }
?>
