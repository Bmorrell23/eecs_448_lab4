<?php

//quiz calculator
function quiz_score($q) {

  $total = ($q / 5 ) * 100;
  echo "<br>You Scored " . $q . " Out of 5<br>";
  return $total;

}

//grab html element data

$nadal = $_POST["nadal"];
$doc_nadal = "Professional Tennis Player";

$wimb = $_POST["location"];
$doc_wimb = "London";

$ace = $_POST["ace"];
$doc_ace = "Scoring serve without your oppenent touching the ball";

$games = $_POST["set"];
$doc_games = "6";

$roger = $_POST["roger"];
$doc_roger = "38";

$m_quiz = 0;

echo "Who is Rafael Nadal?<br>";
echo "Your Answer: " . $nadal . "<br>";
echo "Correct Answer: " . $doc_nadal . "<br>";

echo "<br>Where is Wimbledon played each year?<br>";
echo "Your Answer: " . $wimb . "<br>";
echo "Correct Answer: " . $doc_wimb . "<br>";

echo "<br>What is an 'ace'?<br>";
echo "Your Answer: " . $ace . "<br>";
echo "Correct Answer: " . $doc_ace . "<br>";

echo "<br>How many games in a set?<br>";
echo "Your Answer: " . $games . "<br>";
echo "Correct Answer: " . $doc_games . "<br>";

echo "<br>How old is Roger Federer?<br>";
echo "Your Answer: " . $roger . "<br>";
echo "Correct Answer: " . $doc_roger . "<br>";

if($nadal == $doc_nadal)
{
  $m_quiz++;
}

if($wimb == $doc_wimb)
{
  $m_quiz++;
}

if($ace == $doc_ace)
{
  $m_quiz++;
}

if($games == $doc_games)
{
  $m_quiz++;
}

if($roger == $doc_roger)
{
  $m_quiz++;
}
echo "<br>Score: " . quiz_score($m_quiz) . "%";
?>