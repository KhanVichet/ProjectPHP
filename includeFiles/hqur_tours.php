<?php 
    include("dbCon.php");

    $categoryId = 4;
    $limit = 6;


    $qw = "SELECT * FROM tbldata WHERE CategoryID = $categoryId ORDER BY DateIn Desc LIMIT $limit";
    $rw = $dbCon->query($qw);

    if ($rw->num_rows > 0) {
        while ($row = $rw->fetch_assoc()) {
        echo '<div class="image">';
        echo '<img src="'.$row["ImgURL"].'" alt="">';
        echo '<div class="title">';
        echo '<h3>'.$row["ProductName"].'</h3>';
        echo '</div>';
        echo '<div class="detail">';
        echo ''.$row["Description"].'';
        echo '</div>';
        echo '</div>';
        }
        $rw->free_result();
    }else
        echo '0 results';

    $dbCon->close();
?>