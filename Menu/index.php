<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Menu</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Menu</h1>
    <table>
        <tr>
            <th>Order</th>
            <th>Amount</th>
        </tr>
        <tr>
            <td>Burger</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Fries</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Steak</td>
            <td>150</td>
        </tr>
    </table>

    <form action="handleOrder.php" method="POST">
        <p>Select an order:
            <select name="order">
                <option value="Burger">Burger</option>
                <option value="Fries">Fries</option>
                <option value="Steak">Steak</option>
            </select>
        </p>
        <p>Quantity: <input type="number" name="quantity" value="1" min="1"></p>
        <p>Cash: <input type="number" name="cash" value="0" min="0"></p>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
