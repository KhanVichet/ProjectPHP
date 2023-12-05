<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./Style.css">
    <link rel="shortcut icon" href="Image/logo.png">
    <title>Update Images</title>
    <?php
        include('includeFiles/dbCon.php');
        $sfId = $_GET["fdId"];
        $qwAll = 'SELECT * FROM tbldata WHERE id='.$sfId;
        $rwAll = $dbCon->query($qwAll);
        $row = $rwAll->fetch_assoc();
    ?>
</head>
<body>
    <header>
        <?php include('includeFiles/Banner.php'); ?>
        <?php include 'includeFiles/menu.php'; ?>
    </header>

    <main>
        <div class="container">
            <div class="left-main">
                
                
            <div class="form-edit-image">
                <table>
                    <tr>
                        <td colspan="2">
                        <form name="frmUpdate" action="includeFiles/qurUpdateImage.php" method="post" enctype="multipart/form-data">
                            <table>
                                <tr>
                                    <td>
                                        <h3> Updating New Image </h3>
                                    </td>
                                </tr>                    
                                <tr>
                                    <td><input type="text" name="txtId" hidden="true" value=<?php echo $row["ID"]; ?> ></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>
                                        <?php echo $row["ProductName"]; ?> 
                                        </h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img name="imgCur" src="<?php echo $row["ImgURL"]; ?>" /> 
                                    </td>
                                </tr>
                                <tr>
                                    <td ><input type="file" name="imgUpdate"></td>
                                </tr>
                                
                                
                                <tr>
                                    <td >
                                        <input type="Submit" name="cmdSubmit" value="Submit">
                                        <input type="reset" name="cmdReset"> 
                                    </td>
                                </tr>
                            </table>
                            </form>
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
