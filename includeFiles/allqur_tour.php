<?php 
    include("dbCon.php");

    $categoryId = 4;


    $qw = "SELECT * FROM tbldata WHERE CategoryID = $categoryId ORDER BY DateIn Desc ";
    $rw = $dbCon->query($qw);


    if ($rw->num_rows > 0) {
        while ($row = $rw->fetch_assoc()) {
           echo '<div class="box">';
            echo '<div class="title">';
                echo '<a href="'.$row["DesURL"].'"><h2>'.$row["ProductName"].'</h2></a>';
            echo '</div>';
            echo '<div class="date">';
                echo '<h3>Date : <span>'.$row["DateIn"].'</span></h3>';
            echo '</div>';
            echo '<div class="image">';
                echo '<img src="'.$row["ImgURL"].'" alt="">';
            echo '</div>';
            echo '<div class="description"><p>'.$row["Description"].'</p></div>';
           echo '</div>';
        }
        $rw->free_result();
    }else
        echo '0 results';


    $dbCon->close();
?>