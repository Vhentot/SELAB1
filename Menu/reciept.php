<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $order = $_POST['order'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];

    $prices = [
        'Burger' => 50,
        'Fries' => 75,
        'Steak' => 150
    ];
y
    $total_price = $prices[$order] * $quantity;

    $change = $cash - $total_price;

    $datetime = date('m/d/Y h:i:s a', time());

    echo "<h1>RECEIPT</h1>";
    echo "<p>Total Price: $total_price</p>";
    echo "<p>You Paid: $cash</p>";

    if ($change >= 0) {
        echo "<p>CHANGE: $change</p>";
    } else {
        echo "<p>Insufficient cash. Please pay at least $total_price.</p>";
    }
    
    echo "<p>$datetime</p>";
}
