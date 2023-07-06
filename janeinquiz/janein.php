<?php

$questionTxt = "Geht es dir heute scheisse?";
$answers = array("ja", "nein");

echo "<p>&nbsp;</p>
    <p>$questionTxt</p>
    <input type='radio' id='ja' name='radio-01' value='$answers[0]'>
    <label for='ja'>$answers[0]</label><br>
    <input type='radio' id='nein' name='radio-01' value='$answers[1]'>
    <label for='nein'>$answers[1]</label><br><br>";

?>
