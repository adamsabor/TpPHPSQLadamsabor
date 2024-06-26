<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "MangaShop";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function getProducts() {
    global $conn;
    $sql = "SELECT * FROM produit";
    $result = $conn->query($sql);

    $products = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    }
    return $products;
}
function getProductsByGenre($genre) {
    global $conn;
    $sql = "SELECT * FROM produit where genre = '$genre'";

    $result = $conn->query($sql);

    $products = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    }
    return $products;
}
?>
