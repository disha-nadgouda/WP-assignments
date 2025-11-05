<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $text = $_POST['text'];
    $color = $_POST['color'];
    $font = $_POST['font'];
    $size = $_POST['size'];
    $saveCookie = $_POST['saveCookie'];

    // If user wants to save preferences in cookie
    if($saveCookie == "yes") {
        setcookie("text", $text, time() + 86400 * 30); // 30 days
        setcookie("color", $color, time() + 86400 * 30);
        setcookie("font", $font, time() + 86400 * 30);
        setcookie("size", $size, time() + 86400 * 30);
        setcookie("saveCookie", "yes", time() + 86400 * 30);
    } else {
        // Clear cookies if they exist
        setcookie("text", "", time() - 3600);
        setcookie("color", "", time() - 3600);
        setcookie("font", "", time() - 3600);
        setcookie("size", "", time() - 3600);
        setcookie("saveCookie", "no", time() - 3600);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formatted Text</title>
</head>
<body>
    <h2>Your Formatted Text:</h2>
    <p style="color: <?php echo htmlspecialchars($color); ?>;
              font-family: <?php echo htmlspecialchars($font); ?>;
              font-size: <?php echo htmlspecialchars($size); ?>;">
        <?php echo nl2br(htmlspecialchars($text)); ?>
    </p>
    <br>
    <a href="index.php">Go Back</a>
</body>
</html>
