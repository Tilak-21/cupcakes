

<!--Name: Tilak K Chudasma-->
<!--Date: 04/04/2024-->
<!--URl: https://tchudasama.greenriverdev.com/GreenRiverDev/328/cupcakes/-->
<!--Program Desc: This HTML document presents a form for a cupcake fundraiser, allowing users to select their desired cupcake flavors. Upon submission, the selected flavors along with the user's name are sent to a server-side script for processing.-->

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


