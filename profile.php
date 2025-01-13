<?php
      $users = [
            [
                  'id' => 1,
                  'name' => 'Gino Paoli',
                  'email' => 'gino@paoli.careers',
                  'password' => 'pass',
            ],
            [
                  'id' => 2,
                  'name' => 'Peppe Giallo',
                  'email' => 'peppe@giallo.careers',
                  'password' => 'pass',
            ],
            [
                  'id' => 3,
                  'name' => 'Mario Luigi',
                  'email' => 'mario@luigi.careers',
                  'password' => 'pass',
            ],
      ];

      $isLoggedIn = false;
      foreach ($users as $key => $user) {
            if (
                  $_POST['email'] == $user['email']
                  &&
                  $_POST['password'] == $user['password']
            ) {
                  $isLoggedIn = true;
                  $_SESSION['email'] = $user['email'];
                  $_SESSION['name'] = $user['name'];
            }
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Profilo</title>

</head>
<body>
      <header>
            Il mio profilo
      </header>
      <main>
            <?php
                  if ($isLoggedIn) {
            ?>
                  <h1>Benvenuto sul profilo di <?php echo $_SESSION['name'] ?> </h1>
                  <a href="logout.php">
                        Esci
                  </a>
            <?php
                  }
                  else {
                        echo '<h1>Accesso negato</h1>';
                  }
            ?>
      </main>
      <footer>
      </footer>
</body>
</html>