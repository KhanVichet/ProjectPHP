<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./Style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <?php include('includeFiles/Banner.php'); ?>
        <?php include 'includeFiles/menu.php'; ?>
    </header>

    <main>
        <div class="container">
            <div class="left-main">
                <div class="form">
                    <form action="#" name="frmAddNew" method="post" enctype="multipart/form-data">
                        
                    </form>
                </div>
                <table class="table">
                    <tr>
                        <td>
                            <form name="frmAddNew" action="#" method="post" enctype="multipart/form-data">
                                <table>
                                    <tr>
                                        <td colspan="2">
                                            <h2> Add New Information </h2>
                                        </td>
                                    </tr>                    
                                    <tr>
                                        <td>Product Id :</td>
                                        <td>
                                            <input type="text" name="txtId">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Product Name :</td>
                                        <td><input type="text" name="txtProName"></td>
                                    </tr>
                                    <tr>
                                        <td >Product Type :</td>
                                        <td>
                                            <?php
                                                /*                include('qur/fTQuery.php');
                                                    if ($rft->num_rows > 0)
                                                    {
                                                    echo '<select name="fType" style="width: 150px">';
                                                        while($roft = $rft->fetch_assoc())
                                                    echo ('"<option value="'.$roft["fTypeId"].'">'.$roft["fType"].'</option>"');
                                                    echo '</select>';
                                                    }
                                                    else 
                                                        echo "0 results";*/
                                            ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Description :</td>
                                        <td><textarea rows="8">
                                            </textarea></td>
                                    </tr>
                                    <tr>
                                        <td >Destination Link :</td>
                                        <td><input type="text" name="txtDesLink"></td>
                                    </tr>
                                    <tr>
                                        <td >Choose Image :</td>
                                        <td ><input type="file" name="fImg" ></td>
                                    </tr>
                                    <tr>
                                        <td ></td>
                                        <td>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="Submit" name="cmdSubmint" value="Submit">
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="Reset" name="cmdReset" value="Cancel"> 
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </td>
            
                    </tr>
        
                </table>
            </div>
            <div class="right-main">
                <?php include 'includeFiles/promotion.php'; ?>
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