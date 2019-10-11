<?php
echo "<link rel='stylesheet' type='text/css' href='style.css' />";
$cookie = $_POST["cookie"];
$ccd = $_POST["ccd"];
$ccc = $_POST["ccc"];
$ship = $_POST["ship"];

$sum = ($cookie * 2)+($ccd * 3)+($ccc * 7);
if($ship == "overnight")
{
  $sum = $sum + 50;
  $Cost = 50;
}
else if($ship == "days3")
{
  $sum = $sum + 5;
  $Cost = 5;
}

echo "<br>";
echo "Thank you for your purchase. Here is your receipt<br><br>";
echo "<table border = 1 style = \"width:30%\">";
echo "<tr>";
echo "<th> </th>";
echo "<th>Quantity</th> <th>Cost Per Item</th> <th>Sub Total</th></tr>";
echo "<tr>";
echo "<th>Chocolate Chip Cookies</th>";
echo ("<td>$" . $cookie . "</td>");
echo ("<td>$2.00</td>");
echo ("<td>$" . $cookie * 2 . "</td>");
echo "</tr><tr>";
echo "<th>Cream Cheese Donuts</th>";
echo ("<td>$" . $ccd . "</td>");
echo ("<td>$3.00</td>");
echo ("<td>$" . $ccd * 3 . "</td>");
echo "</tr><tr>";
echo "<th>Chocolate Cheese Cake</th>";
echo ("<td>$" . $ccc . "</td>");
echo ("<td>$7.00</td>");
echo ("<td>$" . $ccc * 7 . "</td>");
echo "</tr><tr>";
echo "<th>Shipping</th><td colspan = 2>" . $ship . "</td><td>$" . $Cost . "</td></tr><tr>";
echo "<th colspan = 3 >Total Cost</th>";
echo ("<td>$" . $sum . "</td>");
echo "</tr>"
echo "</table>";
?>
