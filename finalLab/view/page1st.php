<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page 1</title>
</head>
<body>
    <h1>Page 1 [HOME]</h1>
    <h2>Home Site</h2> 
    <?php include 'header.php';?>
    
    <form action="../controller/page1stAction.php" method="post" novalidate>
        <h2>Converter:</h2>
        <lable for="category">Select Category:</label>
        <select id="category" name="category" id="category" placeholder="Select a Value">
            <!-- <option value="value">Select a calue</option> -->
        </select>
        <?php echo isset($_SESSION['category_error_msg']) ? $_SESSION['category_error_msg']:""?>
        <br><br>
        <lable for="value">Value:</label>
        <input type="number" name="value" id="value">
        <?php echo isset($_SESSION['value_error_msg']) ? $_SESSION['value_error_msg']:""?>

        <input type="Submit" value="Submit" id="submit" name="submit"><br><br>

        <lable for="result">Result:</label>
        
        
    </form>
    
</body>
</html>