<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Form Result</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
<?php
include 'includes/header.php';
?>

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-4">
        <h2>Spalte 1</h2>
        <p>Platzhalter evtl</p>
      </div>
      <div class="col-md-4">
        <h2>Spalte 2</h2>
        <p>Ausgabe der form mit den errors</p>
      </div>
      <div class="col-md-4">
        <h2>Spalte 3</h2>
        <p>Platzhalter maybe</p>
      </div>
    </div>
  </div>

  <?php
include 'includes/footer.php';
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
