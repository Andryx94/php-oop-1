<?php
require_once(__DIR__ . '/Traits.php');
  require_once(__DIR__ . '/User.php');
  require_once(__DIR__ . '/Staff.php');

  // Database array utenti
  $array_utenti = [
    [
      'username' => 'Andryx94',
      'email' => 'email@andrea.com',
      'messaggi_inviati' => "1000",
      'data_registrazione' => '26/08/2020 16:24',
      'online' => true,
    ],
    [
      'username' => 'Laycos88',
      'email' => 'email@michela.com',
      'messaggi_inviati' => "2000",
      'data_registrazione' => '27/08/2020 17:24',
      'online' => false,
    ],
    [
      'username' => 'Joy00',
      'email' => 'email@gioia.com',
      'messaggi_inviati' => "3000",
      'data_registrazione' => '28/08/2020 18:24',
      'online' => false,
    ],
  ];
?>

<!-- foreach utente in array utenti -->
<?php
  foreach ($array_utenti as $utente) {
    $user = new User($utente['username'], $utente['password'], $utente['email'], $utente['data_registrazione']);
    $user->online = $utente['online'];
    $user_data = $user->getUserData();
    ?>

    <!-- username utente -->
    <div class="user">
      <h1><?php echo $user_data['username'] ?></h1>

      <!-- lista dati utente -->
      <ul>
        <li>Messaggi inviati: <?php echo $utente['messaggi_inviati'] ?> </li>
        <li>Data registrazione: <?php echo $user_data['data_registrazione'] ?> </li>
        <li>Status: <?php echo $user_data['online'] ?> </li>
      </ul>
    </div>
  <?php }

  // Moderatore
  $moderator = new Staff('Moderatore', 'Nome moderatore','password', 'email@moderatore.com','25/08/2020 15:24');
  $moderator->ruolo = "Moderatore";
  $moderator->eta = 26;
  $moderator->getSconto();
  var_dump($moderator);
?>
