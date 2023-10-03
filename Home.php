<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <header>
        <?php include 'Banner.php'; ?>
        <?php include 'menu.php'; ?>
    </header>
    <!-- main -->
    <main>
        <div class="container">
            <div class="left-main">
                <div class="sub-main">
                    <div class="header">
                        <div class="title">
                            <h2>Place to Visite</h2>
                        </div>
                    </div>
                    <div class="box-image">
                        <?php include 'main-place.php';?>
                    </div>
                </div>
                <div class="sub-main">
                    <div class="header">
                        <div class="title">
                            <h2>Hotel</h2>
                        </div>
                    </div>
                    <div class="box-image">
                        <?php include 'main-hotel.php';?>
                    </div>
                </div>
                <div class="sub-main">
                    <div class="header">
                        <div class="title">
                            <h2>Bus Tickit</h2>
                        </div>
                    </div>
                    <div class="box-image">
                        <?php include 'main-bus-tickit.php';?>
                    </div>
                </div>
                <div class="sub-main">
                    <div class="header">
                        <div class="title">
                            <h2>Tours</h2>
                        </div>
                    </div>
                    <div class="box-image">
                        <?php include 'main-tours.php';?>
                    </div>
                </div>
            </div>
            <div class="right-main">
                <?php include 'promotion.php'; ?>
            </div>
        </div>
    </main>
    <!-- footer -->
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="javascript.js"></script>
</html>