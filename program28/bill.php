
<?php
$units = (int)$_POST['units'];
$rate = (float)$_POST['rate'];

$total = $units * $rate;

echo "<h2>Electricity Bill</h2>";
echo "Units Consumed: " . $units . " kWh<br>";
echo "Tariff Rate: $" . number_format($rate, 2) . " per kWh<br>";
echo "Total Cost: $" . number_format($total, 2);
?>
