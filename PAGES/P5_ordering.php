<?php
// initializing meals for the dropdown and prices
$meals = [
    'Chickenjoy1Spaghetti' => [
        'Small' => 135, 'Medium' => 150, 'Large' => 165,
        'Description' => '1-pc Chickenjoy with Jolly Spaghetti and Drink'
    ],
    'Chickenjoy1' => [
        'Small' => 85, 'Medium' => 95, 'Large' => 105,
        'Description' => '1-pc Chickenjoy with Drink'
    ],
    'Chickenjoy2' => [
        'Small' => 169, 'Medium' => 185, 'Large' => 199,
        'Description' => '2-pc Chickenjoy with Drink'
    ],
    'YumSpaghettiFriesDrink' => [
        'Small' => 139, 'Medium' => 155, 'Large' => 170,
        'Description' => 'Yumburger, Half Jolly Spaghetti & Fries with Drink'
    ],
    'CheesyYumburger' => [
        'Small' => 72, 'Medium' => 82, 'Large' => 92,
        'Description' => 'Cheesy Yumburger with Fries and Drink'
    ],
    'Yumburger' => [
        'Small' => 42, 'Medium' => 52, 'Large' => 62,
        'Description' => 'Yumburger with Fries and Drink'
    ]
];

// current date and time
$currentDateTime = date('Y-m-d H:i:s');

include 'header.php';

?>

<div class="container mt-4">
    <div class="meal-item text-center">
        <img src="jabeemenu.png" alt="jabeemenu" class="img-fluid">
        <h4>JOLLYBEE VALUE MEALS</h4>
        <p>Starts at ₱42.00</p>
    </div>

    <!-- meal price table -->
    <table class="table table-bordered mt-3">
        <thead class="table-warning">
            <tr>
                <th>Meal Description</th>
                <th>Small (₱)</th>
                <th>Medium (₱)</th>
                <th>Large (₱)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($meals as $meal): ?>
                <tr>
                    <td><?= htmlspecialchars($meal['Description']) ?></td>
                    <td><?= htmlspecialchars($meal['Small']) ?></td>
                    <td><?= htmlspecialchars($meal['Medium']) ?></td>
                    <td><?= htmlspecialchars($meal['Large']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <form id="order-form" action="P6_ordersumm.php" method="post" class="mt-4">
        <label for="customer_id" class="form-label">Customer ID:</label>
        <input type="text" name="customer_id" id="customer_id" class="form-control" required>

        <label for="customer_name" class="form-label">Customer Name:</label>
        <input type="text" name="customer_name" id="customer_name" class="form-control" required>

        <label for="meal" class="form-label">Meal:</label>
        <select name="meal" id="meal" class="form-select" required>
            <option value="">-- Select Meal --</option>
            <?php foreach ($meals as $key => $data): ?>
                <option value="<?= htmlspecialchars($key) ?>"><?= htmlspecialchars($data['Description']) ?></option>
            <?php endforeach; ?>
        </select>

        <label for="size" class="form-label">Size:</label>
        <select name="size" id="size" class="form-select" required>
            <option value="">-- Select Size --</option>
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
        </select>

        <label for="quantity" class="form-label">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1" value="1" class="form-control" required>

        <label for="extra" class="form-label mt-3">Extra (additional ₱15 each):</label>
        <div class="form-check">
            <input type="checkbox" name="extra[]" value="Mayonnaise" id="extra1" class="form-check-input">
            <label for="extra1" class="form-check-label">Mayonnaise</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="extra[]" value="Ketchup" id="extra2" class="form-check-input">
            <label for="extra2" class="form-check-label">Ketchup</label>
        </div>
        <div class="form-check mb-3">
            <input type="checkbox" name="extra[]" value="Gravy" id="extra3" class="form-check-input">
            <label for="extra3" class="form-check-label">Gravy</label>
        </div>

        <input type="submit" value="Submit Order" class="btn btn-danger">
    </form>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
