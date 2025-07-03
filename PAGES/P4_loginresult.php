<?php
session_start();
$_SESSION['login_time'] = date("Y-m-d H:i:s");

$page_title = "Login Result";
include 'header.php';
?>

<div class="container mt-4">
    <h3>Logged In Successfully!</h3>
    <p><strong>Username:</strong> <?= htmlspecialchars($_POST['username']) ?></p>
    <p><strong>Login Time:</strong> <?= $_SESSION['login_time'] ?></p>

    <a href="P5_ordering.php" class="btn btn-danger mt-3">Go to Order</a>
</div>

<?php include 'footer.php'; ?>
