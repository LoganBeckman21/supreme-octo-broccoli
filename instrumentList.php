<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'bestbye';


//connects to the database to insert the information from index.php to mySQL database 
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retrieve data from the form
    $type = $_POST['instrumentType'];
    $brand = $_POST['instrumentBrand'];
    $model = $_POST['instrumentModel'];

    // Insert data into the database
    $query = "INSERT INTO items (type, brand, model) VALUES (:type, :brand, :model)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':brand', $brand);
    $stmt->bindParam(':model', $model);
    $stmt->execute();

    echo "Data added successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
} finally {
    // Close the database connection
    $conn = null;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css"
    />
        
        <style>
            body {
                background-color: lightblue ; 
                text-align: center; 
            }
    </style>
    </head>
    
    <body>
        
        <!-- sends you to the instrument list  -->
<form action="retrieve_item.php" method="post">
            <input type="submit" value="Confirm">
        </form>

        
    </body>
    
</html>