<?php
// Check if cookie exists and prefill values
$text = $color = $font = $size = "";
$saveCookie = "";

if(isset($_COOKIE['text'])) $text = $_COOKIE['text'];
if(isset($_COOKIE['color'])) $color = $_COOKIE['color'];
if(isset($_COOKIE['font'])) $font = $_COOKIE['font'];
if(isset($_COOKIE['size'])) $size = $_COOKIE['size'];
if(isset($_COOKIE['saveCookie'])) $saveCookie = $_COOKIE['saveCookie'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Text Formatter</title>
</head>
<body>
    <h2>Enter Text and Preferences</h2>
    <form action="display.php" method="post">
        <label>Text:</label><br>
        <textarea name="text" rows="5" cols="50"><?php echo htmlspecialchars($text); ?></textarea><br><br>

        <label>Color:</label>
        <select name="color">
            <option value="black" <?php if($color=="black") echo "selected"; ?>>Black</option>
            <option value="red" <?php if($color=="red") echo "selected"; ?>>Red</option>
            <option value="blue" <?php if($color=="blue") echo "selected"; ?>>Blue</option>
            <option value="green" <?php if($color=="green") echo "selected"; ?>>Green</option>
        </select><br><br>

        <label>Font:</label>
        <select name="font">
            <option value="Arial" <?php if($font=="Arial") echo "selected"; ?>>Arial</option>
            <option value="Verdana" <?php if($font=="Verdana") echo "selected"; ?>>Verdana</option>
            <option value="Times New Roman" <?php if($font=="Times New Roman") echo "selected"; ?>>Times New Roman</option>
            <option value="Courier New" <?php if($font=="Courier New") echo "selected"; ?>>Courier New</option>
        </select><br><br>

        <label>Size:</label>
        <select name="size">
            <option value="14px" <?php if($size=="14px") echo "selected"; ?>>14px</option>
            <option value="18px" <?php if($size=="18px") echo "selected"; ?>>18px</option>
            <option value="24px" <?php if($size=="24px") echo "selected"; ?>>24px</option>
            <option value="30px" <?php if($size=="30px") echo "selected"; ?>>30px</option>
        </select><br><br>

        <label>Save preferences for next visit?</label>
        <input type="radio" name="saveCookie" value="yes" <?php if($saveCookie=="yes") echo "checked"; ?>> Yes
        <input type="radio" name="saveCookie" value="no" <?php if($saveCookie=="no") echo "checked"; ?>> No
        <br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
