<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="Image/logo.png">
    <title>Contect</title>
</head>
<body>
    <header>
        <?php include('includeFiles/Banner.php'); ?>
        <?php include 'includeFiles/menu.php'; ?>
    </header>
    <!-- main -->
    <div class="box-contect">
        <div class="container">
            <div class="comment">
                <div class="title">
                    <h2>COMMENTS</h2>
                </div>
                <div class="description">
                    <p>Write your comment</p>
                </div>
                <form id="contact-form" action="Contect.php" method="post">
                    <div class="single-contact-form">
                        <input type="text" name="name" placeholder="Name*">
                        <input type="email" name="email" placeholder="Email*">
                    </div>
                    <div class="single-contact-form message">
                        <textarea name="message" placeholder="Type your message here.."></textarea>
                    </div>
                    <div class="contact-btn">
                        <button type="submit" name="submit" value="send">Send Email</button>
                    </div>
                </form>
                
                <?php
                    if(isset($_POST['submit'])){
                        $url = "https://script.google.com/macros/s/AKfycbymQhoxwXk0hS5zrhdvcXsoNNFT6PpApjmegcgplf-HOoGb1eYmil2GvfeHnKDiz3yt/exec";
                        $ch = curl_init($url);
                        curl_setopt_array($ch, [
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_POSTFIELDS => http_build_query([
                            "recipient" => $_POST['email'],
                            "subject"   => $_POST['name'],
                            "body"      => $_POST['message']
                        ])
                        ]);
                        $result = curl_exec($ch);
                        echo $result;
                    }
                ?>
            </div>
            <div class="address">
                <div class="title">
                    <h2>Address</h2>
                </div>
                        
                <div class="wn__addres__wreapper">

                            <div class="single__address">
                                <i class="fa-solid fa-location-dot"></i>
                                <div class="content">
                                    <span>address:</span>
                                    <p>Phome Penh</p>
                                </div>
                            </div>

                            <div class="single__address">
                                <i class="fa-solid fa-phone"></i>
                                <div class="content">
                                    <span>Phone Number:</span>
                                    <p>+885 968 968 880</p>
                                </div>
                            </div>

                            <div class="single__address">
                                <i class="fa-solid fa-envelope"></i>
                                <div class="content">
                                    <span>Email address:</span>
                                    <p>timetravel470@gmail.com</p>
                                </div>
                            </div>

                            <div class="single__address">
                                <i class="fa-solid fa-globe"></i>
                                <div class="content">
                                    <span>website address:</span>
                                    <p>Time-to-travel.COM</p>
                                </div>
                            </div>

                </div>
                
            </div>
        </div>
        
    </div>

    

<!-- <script>
    function validateForm() {
        // Basic validation example: Ensure required fields are not empty
        var email = document.forms[0]["email"].value;
        var subject = document.forms[0]["subject"].value;
        var body = document.forms[0]["body"].value;

        if (email == "" || subject == "" || body == "") {
            alert("All fields must be filled out");
            return false;
        }
        return true;
    }
</script> -->

    <!-- footer -->
    <footer>
        <?php include 'includeFiles/footer.php'; ?>
    </footer>
    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="javascript.js"></script>
</html>