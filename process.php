<?php

$name = $_POST['username'];
$cupcakes = $_POST['flavour'];
$total = 0;
$COST = 3.5;
$TotalCost = 0;

echo "Thank you, $name, for your order! <br>";
echo "<br>Order Summary:";

foreach ($cupcakes as $cupcake2) $total++;

foreach($cupcakes as $cupcake) echo " <li>
$cupcake


</li>";
$TotalCost = $total * $COST;
echo "<br>Order Total: $$TotalCost.";


