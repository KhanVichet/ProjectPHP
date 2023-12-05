<?php 
    include("dbCon.php");

    $categoryId = 1;


    $qw = "SELECT * FROM tbldata WHERE CategoryID = $categoryId ORDER BY DateIn Desc ";
    $rw = $dbCon->query($qw);


    if ($rw->num_rows > 0) {
        while ($row = $rw->fetch_assoc()) {
            echo '<div class="box">';
                echo '<div class="box-contain-left">';
                    echo '<div class="image">';
                        echo '<img src="'.$row["ImgURL"].'" alt="">';
                    echo '</div>';
                    echo '<div class="star">';
                        echo '<i class="fa-solid fa-star"></i>';
                        echo '<i class="fa-solid fa-star"></i>';
                        echo '<i class="fa-solid fa-star"></i>';
                        echo '<i class="fa-solid fa-star"></i>';
                        echo '<i class="fa-solid fa-star"></i>';
                    echo '</div>';
                echo '</div>';
                echo '<div class="box-contain-right">';
                    echo '<div class="title">';
                        echo '<a href="'.$row["DesURL"].'">';
                            echo '<h2>'.$row["ProductName"].'</h2>';
                        echo '</a>';
                    echo '</div>';
                    echo '<div class="description">';
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