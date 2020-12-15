<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack</title>
  </head>
  <body>

    <!-- DESCRIZIONE:
        Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
        conosciamo nella documentazione) che:
        1. name sia più lungo di 3 caratteri,
        2. che mail contenga un punto e una chiocciola
        3. e che age sia un numero.
        Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    -->

    <h2>PHP Snack</h2>

    <?php
    // query --> ?name=&mail=&age=
    $user = [
      'name' => 'Pippo',
      'email' => 'pippo@gmail.com',
      'age' => 30,
    ];

    // Parametri GET
      $get_name = $_GET['name'];
      $get_email = $_GET['email'];
      $get_age =  $_GET['age'];

      var_dump($user);

      // Condition: name > 3
      if (strlen($get_name) > 3 || strlen($get_name) >= 3) {
        echo ' Il nome contiene tre o più di tre caratteri ';
      } else {
        echo ' Il nome contiene un numero inferiore a tre caratteri. ';
      }

      // Condition: email contiene '@' e '.'?
      if (empty($get_email) ) {
        echo ' Errore, nessun parametro per l\' indirizzo email è presente ';
      } elseif (strpos($get_email, '@') === false || strpos($get_email, '.') === false) {
        echo ' Accesso negato ';
      } else {
        echo ' Accesso riuscito ';
      }

      // Condition: age è un numero?
      // is_int($get_age)
      if (is_numeric($get_age) ) {
        echo ' Il valore è numerico ';
      } else {
        echo ' Il valore NON è numerico ';
      }




    ?>

    <p> </p>

  </body>
</html>
