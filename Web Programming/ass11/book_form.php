<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Book Details Form</title>
    <style>
        label {
            display: block;
            margin-top: 10px;
        }
        input, textarea, select {
            width: 300px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h2>Enter Book Details</h2>
    
    <form method="post" action="book_form.php">
        <label>Date:</label>
        <input type="date" name="book_date" required>

        <label>Book Name:</label>
        <input type="text" name="book_name" required>

        <label>Author Name:</label>
        <input type="text" name="author_name" required>

        <label>Publisher Name:</label>
        <input type="text" name="publisher_name" required>

        <label>Category:</label>
        <select name="category" required>
            <option value="">--Select Category--</option>
            <option value="Fiction">Fiction</option>
            <option value="Non-Fiction">Non-Fiction</option>
            <option value="Science">Science</option>
            <option value="Biography">Biography</option>
            <option value="Others">Others</option>
        </select>

        <label>Synopsis:</label>
        <textarea name="synopsis" rows="5" required></textarea>

        <br><br>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

    <?php
    // Display submitted data after form submission
    if(isset($_POST['submit'])) {
        echo "<h3>Submitted Book Details:</h3>";
        echo "Date: " . htmlspecialchars($_POST['book_date']) . "<br>";
        echo "Book Name: " . htmlspecialchars($_POST['book_name']) . "<br>";
        echo "Author Name: " . htmlspecialchars($_POST['author_name']) . "<br>";
        echo "Publisher Name: " . htmlspecialchars($_POST['publisher_name']) . "<br>";
        echo "Category: " . htmlspecialchars($_POST['category']) . "<br>";
        echo "Synopsis: " . nl2br(htmlspecialchars($_POST['synopsis'])) . "<br>";
    }
    ?>
</body>
</html>
