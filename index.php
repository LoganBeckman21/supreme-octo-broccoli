<?php

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
<!-- Title to page -->
        <h1> Welcome to Instrument Tracker </h1>

        <p> This application will allow you to enter what type, brand, and model of the instrument and add it to the list of instruments. </p> 

        
        <!-- form input for type, brand, and model -->
        <form action="instrumentList.php" method="post">
            <p> Type: <input type="text" name="instrumentType" value=""></p>
            <p>Brand:  <input type="text" name="instrumentBrand" value=""> </p>
            <p>Model:  <input type="text" name="instrumentModel" value=""> </p>
            <input type="submit" value="Submit Order">
        </form>
        <br>
        
        <!-- button to go to instrument list  -->
        <a href="retrieve_item.php" class="btn btn-info" role="button">Go back to instrument list</a>   <br>     

        
            
    

    </body>
</html>
