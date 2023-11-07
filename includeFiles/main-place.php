<?php
    $place = array(
        [
            'title' => 'Angkor Wat',
            'image' => 'cambodia-angkor-wat.jpg',
            'detail' => 'This temple city is the number one tourist spot in Cambodia.

            Accessed from the town of Siem Reap, the temples of the Angkorian period are so ambitious in scale and in the majesty of their construction, that Angkor Wat is rated as one of the worlds must-see ancient sites.
            
            '
        ],
        [
            'title' => 'Prasat Preah Vihear',
            'image' => 'cambodia-prasat-preah-vihear.jpg',
            'detail' => 'The temples of Angkor Wat may gain all the glory, but Prasat Preah Vihear wins the prize for the most dramatic location.

            Sitting atop the Dangrek Mountains, on an escarpment with dizzying views across the Cambodian floodplains, Prasat Preah Vihear is a monumental temple complex of intricately carved pavilions linked by long causeways, built originally to honor the god Shiva.'
        ],
        [
            'title' => 'The Royal Palace',
            'image' => 'royal-palace.jpg',
            'detail' => 'The highlight of Phnom Penh is the beautiful Royal Palace - the seat and residence of Cambodias royal family since the 1860s.
            The spired-roof pavilions of the complex are an excellent example of classic Khmer architecture.'
        ],
        [
            'title' => 'Cambodia National Museum',
            'image' => 'national-museum.jpg',
            'detail' => 'The traditional Khmer building that houses the national collection was built in 1920.

            Inside, the dazzling array of ancient Khmer artistry, with more than 1,800 objects on display, is a must visit for anyone with an interest in Cambodian history.'
        ],
        [
            'title' => 'The Killing Fields of Choeung Ek',
            'image' => 'killing-fields-of-choeung-ek.jpg',
            'detail' => 'The Killing Fields of Choeung Ek are a somber reminder of the terror of the Khmer Rouge whose brutal regime, intending to turn Cambodia into a socialist agrarian society, ruled the country between 1975 and early 1979.

            In under four years, it is estimated that between one and three million Cambodians were killed under Pol Pots authoritarian command.'
        ],
        [
            'title' => 'Wat Phnom',
            'image' => 'wat-phnom.jpg',
            'detail' => 'Phnom Penh is decidedly flat. The only rise in the landscape here is the 27-meter-high hillock that is home to the temple of Wat Phnom.

            The first religious building on this spot is thought to have been constructed in the 14th century and has been rebuilt several times, with the current main temple sanctuary dating from 1926.'
        ],
        [
            'title' => 'Koh Kong Conservation Corridor',
            'image' => 'cambodia-top-places-to-visit-koh-rong-conservation-corridor.jpg',
            'detail' => 'The Koh Kong Conservation Corridor stretches across an area within Cambodias Cardamom Mountains, south of the border town of Koh Kong in the countrys southwest.

            The highlands here, home to dense rainforest, winding rivers, and waterfalls, offer plenty of opportunities for hiking and boat tours.'
        ],
        [
            'title' => 'Sambor Prei Kuk',
            'image' => 'cambodia-sambor-prei-kuk.jpg',
            'detail' => 'This pre-Angkorian temple site dates from the early 7th century when it was the capital of the Upper Chenla Empire.

            More than 100 brick temples dedicated to various Hindu gods sit within the forest here, many half-swallowed by mammoth tree roots.'
        ],
    );

    foreach($place as $value){
        echo '
            <div class="image">
                <img src="Image/place-to-visit/'.$value['image'].'" alt="">
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