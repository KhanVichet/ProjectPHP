<?php
    $bus_ticket = array(
        [
            'title' => '1',
            'image' => 'https:/via.placeholder.com/300x300',
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, debitis. Minus quia, ipsam dolore asperiores ullam, voluptatum nihil eveniet adipisci repellat vel mollitia nulla minima dolores similique, perferendis id sit.'
        ],
        [
            'title' => '2',
            'image' => 'https:/via.placeholder.com/300x300',
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, debitis. Minus quia, ipsam dolore asperiores ullam, voluptatum nihil eveniet adipisci repellat vel mollitia nulla minima dolores similique, perferendis id sit.'
        ],
        [
            'title' => '1',
            'image' => 'https:/via.placeholder.com/300x300',
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, debitis. Minus quia, ipsam dolore asperiores ullam, voluptatum nihil eveniet adipisci repellat vel mollitia nulla minima dolores similique, perferendis id sit.'
        ],
        [
            'title' => '2',
            'image' => 'https:/via.placeholder.com/300x300',
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, debitis. Minus quia, ipsam dolore asperiores ullam, voluptatum nihil eveniet adipisci repellat vel mollitia nulla minima dolores similique, perferendis id sit.'
        ],
        [
            'title' => '1',
            'image' => 'https:/via.placeholder.com/300x300',
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, debitis. Minus quia, ipsam dolore asperiores ullam, voluptatum nihil eveniet adipisci repellat vel mollitia nulla minima dolores similique, perferendis id sit.'
        ],
        [
            'title' => '2',
            'image' => 'https:/via.placeholder.com/300x300',
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, debitis. Minus quia, ipsam dolore asperiores ullam, voluptatum nihil eveniet adipisci repellat vel mollitia nulla minima dolores similique, perferendis id sit.'
        ],
    );

    foreach($bus_ticket as $value){
        echo '
            <div class="image">
                <img src="'.$value['image'].'" alt="">
                <div class="title">
                    <h3>'.$value['title'].'</h3>
                </div>
                <div class="detail">
                    '.$value['detail'].'
                </div>
            </div>
            
        ';
    }

?>