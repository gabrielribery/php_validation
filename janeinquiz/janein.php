<?php //nein 1 ja 0...

function ynquestion($qid, $questionTxt, $answers, $correctAnswerIndex) {
    echo "<p>&nbsp;</p>
    <p>$questionTxt</p>
    <input type='radio' id='r-$qid-0' name='radio-$qid' value='$answers[0]'>
    <label for='r-$qid-0'>$answers[0]</label><br>
    <input type='radio' id='r-$qid-1' name='radio-$qid' value='$answers[1]'>
    <label for='r-$qid-1'>$answers[1]</label><br><br>";

    echo "<input type='hidden' name='correctAnswerIndex' value='$correctAnswerIndex'>";

}

$qid = "01";  //frage id 
$questionTxt = "Bist du dumm?";
$answers = array("ja", "nein");
$correctAnswerIndex = 0;
// $points = 1;

ynquestion($qid, $questionTxt, $answers, $correctAnswerIndex)
?>


