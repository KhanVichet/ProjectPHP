<section class="nav">
    <div class="hero-container">
        <div class="logo">
            <div class="image">
                <a href="Home.php"><img src="Image/logo.png" alt=""></a>
            </div>
        </div>
        <div class="menu">          
            <ul>
                <?php 
                    $menu = [
                        [
                            'href' => 'Home.php',
                            'name' => 'HOME',
                        ],
                        [
                            'href' => 'Place_to_Visit.php',
                            'name' => 'PLACE TO VISIT',
                        ],
                        [
                            'href' => 'Hotels.php',
                            'name' => 'HOTEL',
                        ],
                        [
                            'href' => 'Bus_Ticket.php',
                            'name' => 'BUS TICKET',
                        ],
                        [
                            'href' => 'Tours.php',
                            'name' => 'TOURS',
                        ],
                    ];

                    foreach($menu as $menu){
                        echo '<li><a href="'.$menu['href'].'">'.$menu['name'].'</a></li>';
                    }
                ?>
            </ul>
        </div>
    </div>
</section>