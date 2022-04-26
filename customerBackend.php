<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hanselman's Statues</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="data:,">
</head>
<body>
    <div style="text-align:center">
        <h1>Hanselman's Statues</h1>
        <h3>Rock Solid Statues</h3>
    </div>

    <div style="width:50%;margin-top: 80px; text-align:center">
        <h3>Thank you for your purchase!</h3>
    </div>

</body>
    <?php
        //get product quantities
        $numSmallStatues = $_POST["small-Qty"];
        $numMediumStatues = $_POST["medium-Qty"];
        $numLargeStatues = $_POST["large-Qty"];

        //get cost by product
        $costSmall = $numSmallStatues * 10;
        $costMedium = $numMediumStatues * 25;
        $costLarge = $numLargeStatues * 50;

        //get shipping method and cost
        $shippingMethod = $_POST["shipping-method"];
        $shippingCost = 0;
        if($shippingMethod == "Three Day") {
            $shippingCost = 5;
        }
        if($shippingMethod == "Over Night") {
            $shippingCost = 50;
        }

        //get total cost
        $totalCost = $costSmall + $costMedium + $costLarge + $shippingCost;
        

        //print receipt
        echo "<table style='margin:auto'><tr><th/><th>Quantity</th><th>Cost per Item</th><th>Sub Total</th></tr>";
        echo "<tr><th>Small Statue</th><td>$numSmallStatues</td><td>$10.00</td><td>\$$costSmall.00</td>";
        echo "<tr><th>Medium Statue</th><td>$numMediumStatues</td><td>$25.00</td><td>\$$costMedium.00</td>";
        echo "<tr><th>Large Statue</th><td>$numLargeStatues</td><td>$50.00</td><td>\$$costLarge.00</td>";
        echo "<tr><th>Shipping</th><td colspan='2'>$shippingMethod</td><td>\$$shippingCost.00</td>";
        echo "<tr><th colspan='3'>Total Cost</th><td>\$$totalCost.00</td>";
        echo "</table>";
        
    ?>
</html>