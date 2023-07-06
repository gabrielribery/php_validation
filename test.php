<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>
    <?php
        $title= "Bitte fülle die Felder oder wähle aus.";
        
        echo "<strong>$title</strong>"; // Fettgedruckt
        echo "<b>$title</b>"; // Fettgedruckt
        echo "<i>$title</i>"; // Kursiv
        echo "<u>$title</u>"; // Unterstrichen
        echo "<em>$title</em>"; // Betont
        echo "<mark>$title</mark>"; // Markiert
        echo "<span style='color: red;'>$title</span>"; // Benutzerdefinierte CSS-Stile
    ?>
</p>
</body>
</html>


<?php
// formular abgesendet
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
        echo "Ausgewählte Farben: ";
        $selectedColors = [];

        if ($redSelected) {
            $selectedColors[] = "Rot";
        }
        if ($whiteSelected) {
            $selectedColors[] = "Weiss";
        }
        if ($otherSelected) {
            $selectedColors[] = "Andere";
        }

        echo implode(", ", $selectedColors);
    } else {
        echo "Keine Farben ausgewählt.";
    }
}
?>