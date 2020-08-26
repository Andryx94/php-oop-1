<!-- Todo List:
1- ultimare classe User;
2- implementare metodi;
3- ottimizzare attributi, costruttore e codice; -->

<?php
  require_once(__DIR__ . '/class.php');

  $utente1 = new User("Andrea", "Andryx94", "password", "email@andrea.com", "26/08/2020 16:24");
  $utente1->cognome = "Maschio";
  $utente1->data_nascita = "21/12/1994";
  $utente1->messaggi_inviati = "1000";
  $utente1->online = "1";
  $utente1->ultimo_accesso = "26/08/2020 16:30";

  var_dump($utente1);
?>
