<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<!-- HEADER -->
<?php 
    include "./includes/header.php"; 
    include "./includes/tools.php"; 
?>
<!-- END:HEADER -->

<div class="container my-4 text-start">
  <p class="mt-5">

      <?php 
        /*
          P03: Gib die ge-posteten Key-Value-Paare als Liste aus.
        */
        prettyPrint($_POST);
 
      ?>

      Willkommen <?php echo $_POST["name"]; ?>!<br>
      Deine Email-Adresse lautet <?php echo $_POST["email"]; ?>.<br>
      Geht es dir heute gut: <?php echo $_POST["radio-01"]; ?>.<br>

      Du hast folgende Farben gewählt: 
      <?php
    //formular abgesendet abfrage für echo keine farbe ausgewählt
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $redSelected = false;
      $whiteSelected = false;
      $otherSelected = false;
      $hasSelection = false;
    // check farb
    foreach ($_POST as $key => $value) {
        if (str_contains($key, "color-")) {
            $hasSelection = true;

            if ($value == "rot") {
                $redSelected = true;
            } elseif ($value == "weiss") {
                $whiteSelected = true;
            } else {
                $otherSelected = true;
            }
        }
    }
    //gibt liste aus
    if ($hasSelection) {
        echo "";
        $selectedColors = [];

        if ($redSelected) {
            $selectedColors[] = "Rot";
        }
        if ($whiteSelected) {
            $selectedColors[] = "Weiss";
        }
        if ($otherSelected) {               //andere da andere ja falsch sind da rot und weiss die gesuchten farben sind
            $selectedColors[] = "<span style='color:red;'>(Und)falsche Farben du Idiot</span>";
        }

        echo implode(", ", $selectedColors); //implode funtkion fürs komma
    } else {                                //deshalb oben die false abfragen für alle antworten / farben
        echo "<span style='color:red;'>Keine Farben ausgewählt du Depp.</span>";
    }
}
      /*
        P04: Die ausgewählten Farbwerte herausfiltern und als einfache Liste 
        ausgeben. Es werden nur die Werte mit 'color-' im Schlüssel (Key) 
        erkannt. Die Liste wird durch Kommas getrennt.

        In der foreach-Schleife werden jeweils auch Farbwerte geprüft und
        die Variablen 'redSelected', 'whiteSelected', 'otherSelected' und
        'hasSelection' entsprechend auf true gesetzt. Ist die Auswahl falsch,
        dann wird ein kurzes Feedback ausgegeben.

        Für foreach siehe auch https://www.w3schools.com/php/php_looping_foreach.asp
        Wir verwenden die erweiterte Form von foreach ($_POST as $value) {},
        nämlich foreach ($_POST as $key => $value) {}.

        Für str_contains() siehe auch https://www.php.net/manual/en/function.str-contains.php
      */
      

      echo "<br><br>";

      /*
        P05: Zum gewählten Tier 'mammal' wird ein Feedback ausgegeben. Dazu verwenden wir
        switch() Verzweigungen.
      */
      $selectedMammal = $_POST["mammal"];
      switch ($selectedMammal) {
        case "Rind":
            echo "Mag ich auch, aber nur vom Grill.";
            break;
        case "Pferd":
            echo "Ist lecker vom heißen Stein.";
            break;
        case "Ziege":
            echo "Auch das kann man essen, aber ich habe lieber Gizi.";
            break;
        case "Mensch":
            echo "Dümmstes Tier der Welt.";
            break;
        default:              //wenn depp nichts ausgewählt
            echo "Zu dumm, um etwas auszuwählen?";
    }
    
      

      echo "<br><br>";


      /*
        P06: Im "comment"-Feld prüfen wir, ob gewisse Schimpfwörter wie
        "fuck" oder "arschloch" verwendet wurden und überschreiben
        jedes dieser Schimpfwörter mit "#%$@".

        Verwendete PHP Hilfsfunktionen: strlen(), strtolower(), str_replace()
      */
      $comment = $_POST["comment"];
      $swearWords = array("fuck", "arschloch", "wixxer");
      
      foreach ($swearWords as $word) {        //str_replace ist dafür und str_ireplace für einfache erkennung
          $censoredComment = str_ireplace($word, "#%$@", $comment);
          $comment = $censoredComment;
      }
      
      echo "Kommentar: " . $censoredComment;
      ?><br>
      

  </p>
</div>

<!-- FOOTER -->
<?php include "./includes/footer.php"; ?>
<!-- END:FOOTER -->

</body>

</html>