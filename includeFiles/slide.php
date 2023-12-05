<div class="slider">
        <div class="list">
            <?php 
                $slide = [
                    [
                        'image' => 'hotel.jpg',
                        'title' => 'The best hotel',
                        'description' => 'Experience unmatched luxury at The Grand Horizon Hotel: elegant rooms, gourmet dining, rooftop pool, impeccable service, and sustainable practices.'
                    ],
                    [
                        'image' => 'travel.jpg',
                        'title' => 'The best place',
                        'description' => 'Discover breathtaking landscapes, vibrant culture, and warm hospitality at [Place]. Your next adventure awaits in this captivating destination.'
                    ],
                    [
                        'image' => 'bus.jpg',
                        'title' => 'The best bus',
                        'description' => 'Efficient, comfortable buses await, ushering you to explore scenic routes and vibrant destinations. Embrace the journey with [Bus Company].'
                    ]
                ];
                foreach($slide as $slide){
                    echo '
                    <div class="item">
                        <img src="Image/slide/'.$slide["image"].'" alt="">
                        <div class="title">
                            <h2>'.$slide["title"].'</h2>
                        </div>
                        <div class="description">
                        '.$slide["description"].'
                        </div>
                    </div>
                    ';
                }

            ?>

            
           
        </div>
        <div class="buttons">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <script>
        let slider = document.querySelector('.slider .list');
let items = document.querySelectorAll('.slider .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let dots = document.querySelectorAll('.slider .dots li');

let lengthItems = items.length - 1;
let active = 0;
next.onclick = function(){
    active = active + 1 <= lengthItems ? active + 1 : 0;
    reloadSlider();
}
prev.onclick = function(){
    active = active - 1 >= 0 ? active - 1 : lengthItems;
    reloadSlider();
}
let refreshInterval = setInterval(()=> {next.click()}, 10000);
function reloadSlider(){
    slider.style.left = -items[active].offsetLeft + 'px';
    // 
    let last_active_dot = document.querySelector('.slider .dots li.active');
    last_active_dot.classList.remove('active');
    dots[active].classList.add('active');

    clearInterval(refreshInterval);
    refreshInterval = setInterval(()=> {next.click()}, 10000);

    
}

dots.forEach((li, key) => {
    li.addEventListener('click', ()=>{
         active = key;
         reloadSlider();
    })
})
window.onresize = function(event) {
    reloadSlider();
};


    </script>