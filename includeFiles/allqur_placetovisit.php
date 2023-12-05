<?php 
    include("dbCon.php");

    $categoryId = 2;


    $qw = "SELECT * FROM tbldata WHERE CategoryID = $categoryId ORDER BY DateIn Desc ";
    $rw = $dbCon->query($qw);


    if ($rw->num_rows > 0) {
        while ($row = $rw->fetch_assoc()) {
            echo '<div class="box">';
                echo '<div class="title">';
                    echo '<a href="'.$row["DesURL"].'"><h3>'.$row["ProductName"].'</h3></a>';
                echo '</div>';
                echo '<div class="box-content">';
                    echo '<div class="image">';
                        echo '<img src="'.$row["ImgURL"].'" alt="">';
                    echo '</div>';
                    echo '<div class="des">';
                        echo '<h4>'.$row["Description"].'</h4>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        }
        $rw->free_result();
    }else
        echo '0 results';


    $dbCon->close();
?>

