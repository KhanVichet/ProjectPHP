<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./Style.css">
    <link rel="shortcut icon" href="Image/logo.png">
    <title>Add New Detail</title>
</head>
<body>
    <header>
        <?php include('includeFiles/Banner.php'); ?>
        <?php include 'includeFiles/menu.php'; ?>
    </header>

    <main>
        <div class="container">
            <div class="left-main">
            
            <div class="form-add-detail">
                <table>
                    <tr>
                        <td>

                            <?php 
                                $img = $_FILES["fImg"]["name"];
                                $rand = rand();
                                $imgU = $rand.$img;
                                $path = "Image/".$imgU;
                                move_uploaded_file($_FILES['fImg']['tmp_name'],$path);

                                date_default_timezone_set("America/New_York");
                                $indate = date('Y/m/d h:i:sa');

                                include ('includeFiles/dbCon.php');

                                $queryAdd = 'Insert into tbldata (ProductName,CategoryID,Description,ImgURL,DesURL,DateIn) Values("'.$_POST["txtProName"].'", "'.$_POST["CatType"].'", "'.$_POST["des"].'", "'. $path .'","'.$_POST["txtDesLink"].'", "'. $indate .'")';

                                if(mysqli_query($dbCon,$queryAdd)){
                                    echo '<h1>The Post Summary !!!</h1>';
                                    echo '<h1>New record created successfully!</h1>';   
                                }
                                else
                                    echo 'Error :'.$queryAdd.'<br>'. mysqli_error($dbCon);
                                    echo '<h1>Thank you</h1>';
                                    $dbCon->close();
                            ?>
                        </td>
                        
                        
                    </tr>
                    <tr>
                        <td>
                            <button><a href="AddNew.php">Add New</a></button>
                        </td>
                    </tr>
                </table>
            </div>   
                

            </div>
            <div class="right-main">
                <?php include 'includeFiles/the-best-place.php'; ?>
            </div>
        </div>
    </main>

    <!-- footer -->
    <footer>
        <?php include 'includeFiles/footer.php'; ?>
    </footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="javascript.js"></script>
</html>