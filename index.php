<?php
declare(strict_types = 1);

//Declare an array and populate w/ storage unit details
$unit = [
    '001' => ['size' => '5x5', 'rent' => 60.00, 'rented' => true],
    '002' => ['size' => '10x5', 'rent' => 100.00, 'rented' => false],
    '003' => ['size' => '10x15', 'rent' => 190.00, 'rented' => true],
];

//Declare a tax variable and set value
$tax = 0.20;

//Function to return message based on unit rented status
function get_unit_available_message(bool $rented): string
{
    return ($rented) ? 'Rented' : 'Available';
}

//Function to calculate total cost from rent amount and tax rate
function get_total_rent(float $rent, float $tax): float
{
    return ($rent + ($rent * $tax));
}

?>

<!DOCTYPE html>
<!-- 
Name: Eric Miller
Class: CIS-239
Date: 9/4/2024
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>The Storage Place</h1>
    <h2>Rental Status</h2>
    <table>
        <tr>
            <th>Unit</th><th>Size</th><th>Rent</th><th>Rented</th><th>Total Cost</th>
        </tr>
        <?php foreach ($unit as $unit_name => $data) { ?>
          <tr>
          <td><?= $unit_name ?></td>
          <td><?= $data['size'] ?></td>
          <td><?= $data['rent'] ?></td>
          <td><?= get_unit_available_message($data['rented']) ?></td>
          <td><?= get_total_rent($data['rent'], $tax) ?></td>
          </tr>
          <?php } ?>
    </table>
</body>
</html>




