<?php
// initializing meals again for access to prices
$meals = [
    'Chickenjoy1Spaghetti' => ['Small' => 135, 'Medium' => 150, 'Large' => 165, 'Description' => '1-pc Chickenjoy with Jolly Spaghetti and Drink'],
    'Chickenjoy1' => ['Small' => 85, 'Medium' => 95, 'Large' => 105, 'Description' => '1-pc Chickenjoy with Drink'],
    'Chickenjoy2' => ['Small' => 169, 'Medium' => 185, 'Large' => 199, 'Description' => '2-pc Chickenjoy with Drink'],
    'YumSpaghettiFriesDrink' => ['Small' => 139, 'Medium' => 155, 'Large' => 170, 'Description' => 'Yumburger, Half Jolly Spaghetti & Fries with Drink'],
    'CheesyYumburger' => ['Small' => 72, 'Medium' => 82, 'Large' => 92, 'Description' => 'Cheesy Yumburger with Fries and Drink'],
    'Yumburger' => ['Small' => 42, 'Medium' => 52, 'Large' => 62, 'Description' => 'Yumburger with Fries and Drink']
];

// retrieving form data
$customer_id = $_POST['customer_id'];
$customer_name = $_POST['customer_name'];
$meal = $_POST['meal'];
$size = $_POST['size'];
$quantity = $_POST['quantity'];
$extras = isset($_POST['extra']) ? $_POST['extra'] : [];

// current date and time
$currentDateTime = date('Y-m-d H:i:s');

// calculations
$basePrice = $meals[$meal][$size];
$extrasCount = count($extras);
$totalPrice = ($basePrice * $quantity) + ($extrasCount * 15);
?>

<?php include'header.php'; ?>

<style>
    body {
        background-color: #fff8f0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        color: #333;
    }
    .summary-container {
        background: white;
        border-radius: 10px;
        padding: 30px 40px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        max-width: 450px;
        width: 90%;
        text-align: center;
        margin: 80px auto 50px; /* margin-top leaves space below navbar */
    }
    h2 {
        color: #d10000;
        margin-bottom: 25px;
    }
    strong {
        display: inline-block;
        margin-top: 12px;
        margin-bottom: 6px;
        font-size: 1.05rem;
    }
    p, a {
        font-size: 1rem;
        margin: 4px 0 12px;
        color: #555;
    }
    a {
        text-decoration: none;
        color: #d10000;
        font-weight: bold;
    }
    a:hover {
        text-decoration: underline;
    }
</style>

<div class="summary-container">
    <h2>Order Summary</h2>
    <strong>Customer ID:</strong>
    <p><?= htmlspecialchars($customer_id) ?></p>

    <strong>Customer Name:</strong>
    <p><?= htmlspecialchars($customer_name) ?></p>

    <strong>Meal:</strong>
    <p><?= $meals[$meal]['Description'] ?></p>

    <strong>Size:</strong>
    <p><?= htmlspecialchars($size) ?></p>

    <strong>Quantity:</strong>
    <p><?= htmlspecialchars($quantity) ?></p>

    <strong>Extras:</strong>
    <p><?= $extras ? implode(', ', $extras) : 'None' ?></p>

    <strong>Order Date & Time:</strong>
    <p><?= $currentDateTime ?></p>

    <strong>Total Price:</strong>
    <p>₱<?= number_format($totalPrice, 2) ?></p>

    <a href="P5_ordering.php" class="btn btn-danger mt-3">← Back to Order</a>
</div>

<?php include'footer.php'; ?>
