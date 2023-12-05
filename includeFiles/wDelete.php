<script>
        let confirmAction = confirm("Are you sure to delete this ?");
        if (confirmAction) {
            <?php 
                include('dbCon.php');

                if (isset($_GET['fdId'])) {  
                    $id = $_GET['fdId'];  
                    $query = "DELETE FROM tbldata WHERE ID = '$id'";  
                    $run = mysqli_query($dbCon,$query);  
                    if ($run) {  
                        echo 'alert("Delete successfully ");';
                        echo 'window.location.href = "../EditProduct.php";';  // Redirect after successful execution
                    } else {  
                        echo 'alert("Error: '.mysqli_error($dbCon).'");';  // Display error message
                    } 
                }
            ?>
        } else {
            alert("Delete canceled");
            header("location:../EditProduct.php");
        }

</script>
