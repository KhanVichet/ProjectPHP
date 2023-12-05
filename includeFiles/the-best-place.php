<div class="the-best-place">
    <div class="title">
        The Best Place
    </div>

    <?php 

    $box =[
        [
            'image' => 'angkorthorm.webp',
            'title' => 'angkor throm'
        ],
        [
            'image' => 'angkorwat.webp',
            'title' => 'angkor wat'
        ]
        ];
        foreach($box as $box){
            echo '
            <div class="box">
                <div class="box-image">
                    <img src="Image/the-best-place/'.$box["image"].'" alt="">
                </div>
                <div class="title-image">
                    '.$box["title"].'
                </div>
            </div>
            ';
        }

    ?>
</div>

