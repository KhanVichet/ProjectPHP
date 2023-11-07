<section class="footer">
    <div class="copyright">
        <h2>Copyright @ by 2023</h2>
    </div>
    <div class="contect">
        <h2>Follow us on socail modai</h2>
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
            <h2>Other information</h2>
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
            'fa-facebook',
            'fa-instagram',
            'fa-tiktok',
            'fa-threads',
            'fa-whatsapp',
        ];
        
        $countIcon = count($icon);
        for($i=0;$i <$countIcon; $i++){
            echo '<li><a href="#"><i class="fa-brands '.$icon[$i].'"></i></a></li>';
        }
    }

    function showMenuFooter(){
        $menuFooter = [
            [
                'href' => 'Contect.htm',
                'name' => 'CONTECT',
            ],
            [
                'href' => 'About.htm',
                'name' => 'ABOUT',
            ],
        ];

        foreach($menuFooter as $menuFooter){
            echo '<li><a href="'.$menuFooter['href'].'">'.$menuFooter['name'].'</a></li>';
        }
    }

?>