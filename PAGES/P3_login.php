<?php
$page_title = "Login";
include 'header.php';
?>

<div class="container mt-4">
    <h2>Login</h2>
    <form action="P4_loginresult.php" method="post" class="form">
       <input type="text" name="username" placeholder="Username" class="form-control mb-2" required>
       <input type="password" name="password" placeholder="Password" class="form-control mb-2" required>
       <input type="submit" value="Login" class="btn btn-danger w-100">
    </form>
</div>

<?php include 'footer.php'; ?>
