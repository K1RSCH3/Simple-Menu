<?php
include 'header.php'; 
?>

<div class="container mt-4">
    <h3>Registration Info:</h3>
    <ul class="list-group">
        <?php foreach ($_POST as $key => $value): ?>
            <li class="list-group-item"><strong><?= ucfirst($key) ?>:</strong> <?= htmlspecialchars($value) ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<?php include 'footer.php';  // closes </body> and </html> ?>
