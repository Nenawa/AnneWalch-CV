<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ANNE WALCH</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;800&display=swap">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<!-- HEADER-->
  <?php
  include("entete.php");
  ?>

  <!-- A propos -->
  <?php
  include("aPropos.php");
  ?>

  <!-- Mes compétences -->
  <?php
  include("competences.php");
  ?>

  <!-- Mes expériences -->
  <?php
  include("experiences.php");
  ?>

  <!-- Mes réalisations -->
  <?php
  include("realisations.php");
  ?>

  <!-- Curriculum vitae version Print -->
  <?php
  include("cvPrint.php");
  ?>

  <!-- Footer -->
  <?php
  include("footer.php");
  ?>
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="js/lightbox.min.js"></script>
  <script src="js/annewalch.js"></script>
</body>

</html>