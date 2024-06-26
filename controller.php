<?php
include '/bdd/database.php';

function getProductsByGenre($genre) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM produit WHERE genre = ?");
    if ($stmt === false) {
        die('prepare() failed: ' . htmlspecialchars($conn->error));
    }
    $stmt->bind_param("s", $genre);
    $stmt->execute();
    $result = $stmt->get_result();

    $products = [];
    if ($result === false) {
        die('execute() failed: ' . htmlspecialchars($stmt->error));
    } else {
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    }
    $stmt->close();
    return $products;
}
?>
