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