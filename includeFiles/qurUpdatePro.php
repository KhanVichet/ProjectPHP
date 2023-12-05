<?php
    include('dbCon.php');
    $sfId = $_POST["txtId"];
    $queryUpdate = 'Update tbldata SET 
    ProductName = "'.$_POST["txtProName"].'", 
    CategoryID = "'.$_POST["CatType"].'", 
    Description = "'.$_POST["des"].'", 
    DesURL = "'.$_POST["txtDesLink"].'" 
    WHERE ID="'.$sfId.'"';

    if (mysqli_query($dbCon, $queryUpdate)) {
        $dbCon->close();
        header("location:../../EditProduct.php");
    } 
    else 
        echo "Error: " . $queryUpdate . "<br>" . mysqli_error($dbCon);

?>