
<!-- connects to the database to get the information for the table.  -->
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

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title></title>

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"
        />

<!-- table styles -->
    <style>
        
        thead {
	background-color: #333;
	color: white;
	font-size: 20px;
	letter-spacing: 2%;
}

        

        tbody th {
            background-color: #36c;
            color: #fff;
            text-align: left;
        }

        caption {
            border: 2px solid black;
            padding: 8px;
            text-align: center;
            background-color: white;
        }

        td {
            border: 2px solid black;
            padding: 25px;
            text-align: center;
            background-color: lightgreen;

        }
        table {
            width: auto;
            margin-left: auto;
            margin-right: auto;
        }

        body {
            background-color: lightblue ;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        


    </style>
</head>

<body>

    <h1>Instrument List </h1>

<!-- instrument list displaying the information from the database  -->
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Action </th>
            </tr>  
        </thead>   

        <tbody>
            <?php foreach ($items as $item): ?>

                <tr>
                    <td><?php echo $item['type'] ?> </td>
                    <td><?php echo $item['brand'] ?> </td>
                    <td><?php echo $item['model'] ?> </td>
                    <td><a href="form.php?delete=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>

            <?php endforeach ?>
        </tbody>
    </table>     

    <!-- button to go back to the home page if you want to enter another instrument -->
    
    <p> If you want to enter another instrument click the button below to go back to the home page </p> 
   
        <a href="index.php" role="button">Go back to home page</a>
    
</body>
</html>

