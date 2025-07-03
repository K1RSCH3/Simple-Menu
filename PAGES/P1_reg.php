<?php include 'header.php'; ?>

<div class="container mt-4">
    <h2>Registration</h2>
    <form action="P2_regresult.php" method="post" class="row g-3">
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <input type="text" name="name" class="form-control" placeholder="Full Name" required>
        <input type="text" name="address" class="form-control" placeholder="Address" required>
        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
        <select name="gender" class="form-select" required>
            <option value="">Select Gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Prefer not to say</option>
        </select>
        <input type="text" name="mobile" class="form-control" placeholder="Mobile Number" required>
        <label>Date of Birth:</label>
        <input type="date" name="dob" class="form-control" required>
        <input type="submit" value="Register" class="btn btn-danger">
    </form>
</div>

<?php include 'footer.php'; ?>
