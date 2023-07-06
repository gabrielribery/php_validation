<?php

function ynquestion() {
    echo "<p>&nbsp;</p>
    <p>$questionTxt</p>
    <input type='radio' id='r-$qid-0' name='radio-$qid' value='$answers[0]'>
    <label for='r-$qid-0'>$answers[0]</label><br>
    <input type='radio' id='r-$qid-1' name='radio-$qid' value='$answers[1]'>
    <label for='r-$qid-1'>$answers[1]</label><br><br>";

}
$qid = "01";  //frage id 
$questionTxt = "Bist du dumm?";
$answers = array("ja", "nein");
$correctAnswerIndex = 0;
// $points = 1;
?>
