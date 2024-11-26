<?php
include '../includes/header.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>


<div class="container mt-5 text-center">
    <h2 class="pt-4">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p class="mb-1">The dashboard is currently under construction.</p> <p> We apologize for any inconvenience caused!</p>
    <a href="logout.php" class="btn btn-danger">Logout</a>
</div>

<?php include '../includes/footer.php'; ?>
