<section class="footer">
    <div class="copyright">
        <h2>Copyright @ by 2023</h2>
    </div>
    <div class="contect">
        <h2>Follow us on social media</h2>
        <div class="socail-medial">
            <ul>
                <?php 
                    showIcon();
                 ?>
            </ul>
        </div>
    </div> 
    <div class="footer-menu">
        <div class="title">1
            <h2>OTHER INFORMATION</h2>
        </div>
        <div class="menu-list">
            <ul>
                <?php 
                    showMenuFooter();
                ?>
            </ul>
        </div>
    </div>
    <div class="sticker">
        <h1>Time to Travel with </h1> 
        <img src="Image/logo.png" alt="">
    </div>
</section>

<?php
    
    function showIcon(){
        $icon = [
            [
                'href'=> '#',
                'icon'=> 'fa-facebook',
            ],
            [
                'href'=> '#',
                'icon'=> 'fa-instagram',
            ],
            [
                'href'=> '#',
                'icon'=> 'fa-tiktok',
            ],
            [
                'href'=> '#',
                'icon'=> 'fa-threads',
            ],
            [
                'href'=> '#',
                'icon'=> 'fa-whatsapp',
            ],
        ];
        
        foreach ($icon as $icon){
            echo '<li><a href="'.$icon["href"].'"><i class="fa-brands '.$icon["icon"].'"></i></a></li>';
        }
    }

    function showMenuFooter(){
        $menuFooter = [
            [
                'href' => 'Contact.php',
                'name' => 'CONTACT',
            ],
            [
                'href' => 'About.php',
                'name' => 'ABOUT',
            ],
        ];

        foreach($menuFooter as $menuFooter){
            echo '<li><a href="'.$menuFooter['href'].'">'.$menuFooter['name'].'</a></li>';
        }
    }

?>