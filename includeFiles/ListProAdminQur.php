
<?php
  include ('dbCon.php');
  $qwAll = 'SELECT * FROM tbldata as d INNER JOIN tblcategory as c ON d.CategoryID=c.CategoryID ORDER BY DateIn DESC';
  $rwAll = $dbCon->query($qwAll);
  if ($rwAll-> num_rows > 0)
  // output data of each row
  {
    echo '<table cellpadding="5px" cellspacing="5px">';
      echo '<tr>';
        echo '<b><th> Posted Id </th>';
        echo '<th> Posted Name </th>';
        echo '<th> Category </th>';
        echo '<th> Description </th>';
        echo '<th> Images </th>';
        echo '<th colspan="3"> Editing </th> </b>';
       echo '</tr>';
    while($row = $rwAll->fetch_assoc())
    {  
      echo '<tr>';
        echo '<td><h3>'. $row["ID"] .'</h3></td> ';
        echo '<td><h3>'. $row["ProductName"] .'</h3></td> ';
        echo '<td><h3>'. $row["Category"] .'</h3></td> ';
        echo '<td><h3>'. $row["Description"] .'</h3></td> ';        
        echo '<td> <img src="'. $row["ImgURL"] .'" width="150px" /></td> ';

        echo('<td> <a href="UpdateProduct.php?fdId='.$row["ID"] . '">Edit Info</a></td>');
        echo('<td> <a href="UpdateImage.php?fdId='.$row["ID"] . '">Edit Image</a></td>');
        echo('<td> <a href="includeFiles/wDelete.php?fdId='.$row["ID"] . '">Delete</a></td>');

        echo '</tr>';
    }
    echo '</table>';
  }
  else 
      echo '0 results';

  $dbCon->close();  
?>