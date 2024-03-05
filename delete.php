<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'bestbye';

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT id, brand, type, model FROM items";
$stmt = $conn->prepare($query);
$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
//header("instrumentList.php")

$item_id_to_delete = $_POST['item_id'];
$delete_query = mysqli_query($link, "DELETE FROM items WHERE type = $item_id_to_delete");
if ($delete_query) {
    echo "Item deleted successfully!";
} else {
    echo "Error deleting item.";
}

?>