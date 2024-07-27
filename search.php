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

if (isset($_GET['title'])) {
    $title = $conn->real_escape_string($_GET['title']);
    $sql = "SELECT * FROM books WHERE title='$title'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $book = $result->fetch_assoc();
        header("Location: book.php?id=" . $book['id']);
    } else {
        header("Location: index.html?error=1");
    }
}

$conn->close();
?>
