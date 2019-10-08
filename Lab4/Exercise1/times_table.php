<?php

$row = 1;
$col = 1;

//prints a muliplication table from 0 - 100
function tableoftime() {
  echo '<table>';
  echo '<tr>';

  for($s = 0; $s <= 100; $s++)
  {
    echo '<td>' . $s . '</td>';
  }

  for($row = 0; $row <= 100; $row++)
  {
    for($col = 0; $col <= 100; $col++)
    {
        if($col == 0)
        {
          echo '<tr><td>' . $row . '</td>';
        }
        else
        {
          echo '<td>' . $row * $col . '</td>';
        }
    }
  }

  echo '</tr>';
  echo '</table>';
}

tableoftime();
?>