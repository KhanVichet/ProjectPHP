<div class="promotion">
    <div class="title">
        Promotion
    </div>
    <?php 
        showPromotion();
    ?>
</div>

<?php 
    
    function showPromotion(){
        $promotion = [
            [
                'detail' => '50%',
                'image'  => 'khmer-mansion-residence.jpg',
            ],
            [
                'detail' => '70%',
                'image'  => 'khmer-mansion-residence.jpg',
            ],
            [
                'detail' => '80%',
                'image'  => 'khmer-mansion-residence.jpg',
            ],
        ];
    
        foreach($promotion as $promotion){
            echo '<div class="box-image">  
                    <div class="detail">
                        '.$promotion['detail'].'
                    </div>
                    <div class="image">
                        <img src="Image/hotels/'.$promotion['image'].'" alt="">
                    </div>
                </div>';
        }
    }

?>