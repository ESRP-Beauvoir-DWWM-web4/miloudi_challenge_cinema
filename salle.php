<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cinéma Beauvoir</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'header.php'; ?>

  <main>
    <section>
      <?php
      $salleIndex = isset($_GET['film']) ? (int)$_GET['film'] : 0;

      if (isset($films[$salleIndex])) {
        $film = $films[$salleIndex];
        $titre = $film['titre'];
        $image = $film['image'];
        $horaires = $film['horaires'];

        echo "<img src='./images/$image' alt='$titre'>
              <h2>$titre</h2>
              <h3>Horaires :</h3>
              <ul class='horaires'>";
        
        foreach ($horaires as $horaire => $disponible) {
          $statut = $disponible ? 'Disponible' : 'Complet';
          echo "<li>$horaire - $statut</li>";
        }

        echo "</ul>";
      } else {
        echo "<h2>Film non trouvé</h2>";
      }
      ?>
    </section>
  </main>

  <?php include 'footer.php'; ?>
</body>
</html>
