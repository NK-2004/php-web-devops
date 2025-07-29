<?php
$name = $_POST['name'];
$msg = $_POST['message'];
?>
<h2>Thank You, <?php echo htmlspecialchars($name); ?>!</h2>
<p>Your message: <?php echo nl2br(htmlspecialchars($msg)); ?></p>
<a href="index.php">Back to Home</a>