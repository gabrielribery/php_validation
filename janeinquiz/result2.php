<!DOCTYPE html>
<html>
<head>
    <title>Ja Nein Ergebnisse</title>
</head>
<body>
    <h1>Quiz Ergebnisse</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $ergebnis1 = $_POST["frage1"];
        $ergebnis2 = $_POST["frage2"];

        echo "<h2>Frage 1:</h2>";
        echo "<p>Ist die Erde rund?</p>";
        echo "Antwort: " . $ergebnis1 . "<br>";

        echo "<h2>Frage 2:</h2>";
        echo "<p>Ist Wasser blau?</p>";
        echo "Antwort: " . $ergebnis2 . "<br>";

    } else {
        echo "Alle Fragen beantworten du Depp.";
    }
    ?>
</
