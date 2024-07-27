<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ebookdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);
    $sql = "SELECT * FROM books WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $book = $result->fetch_assoc();
        echo "<h1>" . $book['title'] . "</h1>";
        echo "<h4>" . $book['author'] . "</h4>";
        echo "<h4>" . $book['genre'] . "</h4>";
        echo "<p>" . $book['description'] . "</p>";
    } else {
        echo "Book not found";
    }
} else {
    echo "No book ID provided";
}

$conn->close();
?>
