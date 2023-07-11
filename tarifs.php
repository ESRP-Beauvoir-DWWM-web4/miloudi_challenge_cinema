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

  <main id="tarifs">
    <section>
      <h2>Tarifs</h2>
      <div class="flex">
        <ul>
          <li>Tarif Plein : 8,30 €</li>
          <li>Tarif Réduit : 6,80 €</li>
          <li>Tarif Enfant : 4,50 €</li>
          <li>Supplément 3D : 1 €</li>
        </ul>
        <ul>
          <li>Abonnement 5 places : -10%</li>
          <li>Abonnement 5 places -25ans : -20%</li>
        </ul>
      </div>
      <p>
        Tarif Réduit pour les personnes de + de 60 ans et de moins de 16 ans<br>
        Tarif Enfant pour les - de 14 ans
      </p>
    </section>
    <section>
      <h2>Selon votre âge</h2>
      <table>
        <thead>
          <tr>
            <th>Votre âge</th>
            <th>Votre tarif</th>
            <th>Avec abonnement</th>
          </tr>
        </thead>
        <tbody>
          <?php
          for ($age = 1; $age <= 99; $age++) {
            $tarif = '';
            $tarifAbonnement = '';

            if ($age >= 16 && $age < 60) {
              $tarif = 'Tarif Plein : 8,30 €';
              $tarifAbonnement = 'Tarif Abonnement : 7,47 €';
            } elseif ($age >= 14 && $age < 16) {
              $tarif = 'Tarif Réduit : 6,80 €';
              $tarifAbonnement = 'Tarif Abonnement : 6,12 €';
            } elseif ($age >= 0 && $age < 14) {
              $tarif = 'Tarif Enfant : 4,50 €';
              $tarifAbonnement = 'Tarif Abonnement : 4,05 €';
            } elseif ($age >= 60) {
              $tarif = 'Tarif Réduit : 6,80 €';
              $tarifAbonnement = 'Tarif Abonnement : 6,12 €';
            }

            echo "<tr>
                    <td>$age ans</td>
                    <td>$tarif</td>
                    <td>$tarifAbonnement</td>
                  </tr>";
          }
          ?>
        </tbody>
      </table>
    </section>
    <section>
      <h2>Consommations</h2>
      <table>
        <thead>
          <tr>
            <th>Produit</th>
            <th>Contenance</th>
            <th>Prix</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($consommations as $consommation) {
            $produit = $consommation[0];
            $contenance = $consommation[1];
            $prix = $consommation[2];

            echo "<tr>
                    <td>$produit</td>
                    <td>$contenance</td>
                    <td>$prix €</td>
                  </tr>";
          }
          ?>
        </tbody>
      </table>
    </section>
  </main>

  <?php include 'footer.php'; ?>
</body>
</html>
