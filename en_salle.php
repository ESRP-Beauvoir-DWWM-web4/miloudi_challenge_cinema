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
      <h2>Films en salle</h2>
      <ul id="liste_films">
        <?php
        foreach ($films as $film) {
          $titre = $film['titre'];
          $image = $film['image'];

          echo "<li>
                  <a href='salle.php?film={$film['salle']}'>
                    <img src='./images/$image' alt='$titre'>
                  </a>
                </li>";
        }
        ?>
      </ul>
    </section>
  </main>

  <?php include 'footer.php'; ?>
</body>
</html>
