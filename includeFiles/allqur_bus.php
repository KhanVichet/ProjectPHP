<?php 
    include("dbCon.php");

    $categoryId = 3;


    $qw = "SELECT * FROM tbldata WHERE CategoryID = $categoryId ORDER BY DateIn Desc ";
    $rw = $dbCon->query($qw);


    if ($rw->num_rows > 0) {
        while ($row = $rw->fetch_assoc()) {
            echo '
            
                <div class="box">
                        <div class="image">
                            <img src="'.$row["ImgURL"].'" alt="">
                        </div>
                        <div class="title">
                            <a href="#"><h2>'.$row["ProductName"].'</h2></a>
                        </div>
                        <div class="description">
                           <p>
                           '.$row["Description"].'
                           </p>
                        </div>
                </div>

            
            
            ';
        }
        $rw->free_result();
    }else
        echo '0 results';


    $dbCon->close();
?>

