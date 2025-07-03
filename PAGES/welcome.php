<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Welcome to Jollybee PH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
<style>
    body {
        background-color: #fff8f0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #d10000;
        text-align: center;
    }
    h1 {
        margin-bottom: 40px;
        font-weight: bold;
    }
    .btn-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        max-width: 600px;
    }
    .btn {
        min-width: 140px;
        font-weight: 600;
    }
    .logo {
        max-width: 700px;
        width: 100%;
        height: auto;
        margin-bottom: 20px;
    }
</style>

</head>
<body>
    <img src="jabeelogo.png" alt="Jollybee Logo" class="logo">
    <h1>Welcome to Jollybee PH</h1>
    <div class="btn-container">
        <a href="P1_reg.php" class="btn btn-danger">Register</a>
        <a href="P3_login.php" class="btn btn-danger">Login</a>
        <a href="P5_ordering.php" class="btn btn-danger">Place Order</a>
    </div>
    
    <?php include 'footer.php'; ?>

</body>
</html>
