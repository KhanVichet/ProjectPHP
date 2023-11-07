<?php
    $hotel = array(
        [
            'title' => 'Khmer Mansion Residence',
            'image' => 'khmer-mansion-residence.jpg',
            'detail' => 'Khmer Mansion Residence is located in the center of Siem Reap, about 10min walking distance from the famous Pub Street. Rooms are designed and fitted with a private balcony and bathtub..'
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
        [
            'title' => '2',
            'image' => 'https:/via.placeholder.com/300x300',
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, debitis. Minus quia, ipsam dolore asperiores ullam, voluptatum nihil eveniet adipisci repellat vel mollitia nulla minima dolores similique, perferendis id sit.'
        ],
    );

    foreach($hotel as $value){
        echo '
            <div class="image">
                <img src="Image/hotels/'.$value['image'].'" alt="">
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