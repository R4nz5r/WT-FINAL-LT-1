<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Page 2[Converter]</h1>
    <h2>Conversion Site</h2>
    <?php include 'header.php';?>
     
    <form action="../controller/page2ndAction.php" method="post" novalidate>
    <h2>Conversion Rate:</h2>
    <lable for="category">Category:</label>
    <input type="text" name="category" id="category">
    <?php echo isset($_SESSION['category_error_msg']) ? $_SESSION['category_error_msg']:""?>
    <br><br>

    <lable for="unit">Unit:</label>
    <input type="number" name="unit" id="unit">
    <?php echo isset($_SESSION['unit_error_msg']) ? $_SESSION['unit_error_msg']:""?>
    <br><br>

    <lable for="rate">Rate:</label>
    <input type="number" name="rate" id="rate">
    <?php echo isset($_SESSION['rate_error_msg']) ? $_SESSION['rate_error_msg']:""?>
    <input type="submit" value="Submit" >
    </form>
</body>
</html>