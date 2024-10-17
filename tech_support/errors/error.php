<?php include '../view/header.php'; ?>
<main>
    <h1>Error</h1>
    <p><?php echo htmlspecialchars($error); ?></p> <!-- This ensures the error message is safe for display -->
</main>
<?php include '../view/footer.php'; ?>
