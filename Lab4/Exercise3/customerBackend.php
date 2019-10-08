<?php

function full_price($q1, $q2, $q3, $q4, $q5)
{
  $price_all = $q1 + $q2 + $q3 + $q4 + $q5;
  return $price_all;
}

function price($cost, $num)
{
  $m_price = $cost * $num;
  return $m_price;
}

$raquets = $_POST["raquet"];
$towels = $_POST["towel"];
$balls = $_POST["ball"];
$ppartner = $_POST["partner"];

$email= $_POST["email"];
$m_pass = $_POST["password"];

$shipping = $_POST["shipping"];

$raq_cost = price($raquets, 500);
$towel_cost = price($towels, 100);
$ball_cost = price($balls, 10);
$pp_cost = price($ppartner, 5);

if ($shipping == "free")
{
 $ship_cost = 0;
}
else if ($shipping == "threeDay")
{
 $ship_cost = 5;
}
else if ($shipping == "overnight")
{
 $ship_cost = 50;
}

echo "<html> <head> <link href='customerstyle.css' rel='stylesheet' type='text/css'/>";
echo "</head><body style='text-align:center; background:black; color:orange'>";

echo "Email: " . $email . "<br>";
echo "Password: " . $m_pass . "<br>";
echo "Summary of Order: <br><br>";
echo "<table style='text-align:center;'><tr><th></th><th>Quantity</th><th>Cost/Item</th>";
echo "<th>Sub Total</th></tr>";

echo "<tr text-align: center;><th>Tennis Raquets Signed by Blake Morrell</th>";
echo "<td>" . $raquets . "</td><td>$500.00</td>";
echo "<td>$" . $raq_cost . "</td></tr>";

echo "<tr><th>Used Towels from 1980</th>";
echo "<td>" . $towels . "</td><td>$100.00</td>";
echo "<td>$" . $towel_cost . "</td></tr>";

echo "<tr><th>3 year old never flat tennis ball</th>";
echo "<td>" . $balls . "</td><td>$10.00</td>";
echo "<td>$" . $ball_cost . "</td></tr>";

echo "<tr><th>Automated Practice Partner 3000</th>";
echo "<td>" . $ppartner . "</td><td>$5.00</td>";
echo "<td>$" . $pp_cost . "</td></tr>";

echo "<tr><th style='text-align:center;'>Shipping</td><td colspan='1'>" . $shipping . "</td><td>$" . $ship_cost . ".00</td></tr>";
echo "<tr><th>Total Cost</th>";
echo "<th colspan='3' style='font-size:48px;'>$" . full_price($raq_cost, $towel_cost, $ball_cost, $pp_cost, $ship_cost) . "</th>";
echo "</tr></table></body></html>";
?>


