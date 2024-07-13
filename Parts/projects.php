<section class="ftco-section ftco-project" id="projects-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Gallery</h1>
                <h2 class="mb-4">Our Gallery</h2>
                <p>"Our projects are characterized by innovation, creativity, and attention to detail."</p>
            </div>

            <div class="filter-button-container">
                <button class="btn btn-primary filter-button" data-filter="all">All</button>
                <button class="btn btn-default filter-button" data-filter="photo">Photo</button>
                <button class="btn btn-default filter-button" data-filter="infographic">Infographic</button>
                <button class="btn btn-default filter-button" data-filter="webdesign">Web design</button>
                <button class="btn btn-default filter-button" data-filter="advertising">Advertising design</button>
                <button class="btn btn-default filter-button" data-filter="Logos">Logos</button>
            </div>
            <br />

            <div class="row">
                <?php
                $projects = [
                    "photo" => [
                        ["src" => "./images/photo1.webp", "title" => "Ahmed Hassan", "description" => "Training courses"],
                        ["src" => "./images/photo2.webp", "title" => "Ahmed Hassan", "description" => "Scientific recognition"],
                        ["src" => "./images/photo3.webp", "title" => "Ahmed Hassan", "description" => "General recognition"],
                        ["src" => "./images/photo4.webp", "title" => "Ahmed Hassan", "description" => "Continuous work"],
                        ["src" => "./images/photo5.webp", "title" => "Ahmed Hassan", "description" => "Training courses"],
                        ["src" => "./images/photo6.jpg", "title" => "Ahmed Hassan", "description" => "Training courses"],
                        ["src" => "./images/photo7.webp", "title" => "Ahmed Hassan", "description" => "Training courses"],
                        ["src" => "./images/photo8.jpg", "title" => "Ahmed Hassan", "description" => "Training courses"],
                        ["src" => "./images/photo9.webp", "title" => "Ahmed Hassan", "description" => "Training courses"]
                    ],
                    "infographic" => [
                        ["src" => "./images/info1.webp", "title" => "Infographic"],
                        ["src" => "./images/info2.webp", "title" => "Infographic"],
                        ["src" => "./images/info3.webp", "title" => "Infographic"],
                        ["src" => "./images/info4.webp", "title" => "Infographic"],
                        ["src" => "./images/info5.webp", "title" => "Infographic"],
                        ["src" => "./images/info6.webp", "title" => "Infographic"],
                        ["src" => "./images/info7.webp", "title" => "Infographic"],
                        ["src" => "./images/info8.webp", "title" => "Infographic"],
                        ["src" => "./images/info9.webp", "title" => "Infographic"],
                        ["src" => "./images/info10.webp", "title" => "Infographic"],
                        ["src" => "./images/info11.webp", "title" => "Infographic"],
                        ["src" => "./images/info12.webp", "title" => "Infographic"]
                    ],
                    "webdesign" => [
                        ["src" => "./images/web1t.webp", "title" => "Larado web", "link" => "https://14801.de/"],
                        ["src" => "./images/web2t.webp", "title" => "Apple Web Iphone 15", "link" => "https://elvwebhub.com/iphone/"],
                        ["src" => "./images/web3t.webp", "title" => "Argon Online-Shop", "link" => "https://shop.argon-dental.de/"],
                        ["src" => "./images/web4t.webp", "title" => "TailwindED web", "link" => "https://elvwebhub.com/TailwindED/?#"]
                    ],
                    "advertising" => [
                        ["src" => "./images/ad1.webp", "title" => "Advertising"],
                        ["src" => "./images/ad2.webp", "title" => "Advertising"],
                        ["src" => "./images/ad3.webp", "title" => "Advertising"],
                        ["src" => "./images/ad4.webp", "title" => "Advertising"],
                        ["src" => "./images/ad5.webp", "title" => "Advertising"],
                        ["src" => "./images/ad6.webp", "title" => "Advertising"]
                    ],
                    "Logos" => [
                        ["src" => "./images/logo1.webp", "title" => "Lovely Animals Logo"],
                        ["src" => "./images/logo2.webp", "title" => "Ahmed Galal Logo"],
                        ["src" => "./images/logo3.webp", "title" => "Space Logo"],
                        ["src" => "./images/logo4.webp", "title" => "CE Line Logo"],
                        ["src" => "./images/logo5.webp", "title" => "Motivation Center Education Of Tabuk Logo"],
                        ["src" => "./images/logo6.webp", "title" => "FM Logo"],
                        ["src" => "./images/logo7.webp", "title" => "Space Logo"],
                        ["src" => "./images/logo8.webp", "title" => "CE Line Logo"],
                        ["src" => "./images/logo9.webp", "title" => "Ahmed Galal Logo"],
                        ["src" => "./images/logo10.webp", "title" => "Ahmed Galal Logo"],
                        ["src" => "./images/logo11.webp", "title" => "Ahmed Galal Logo"],
                        ["src" => "./images/logo12.webp", "title" => "Lovely Animals Logo"]
                    ]
                ];
                ?>

                <?php foreach ($projects as $category => $items): ?>
                    <?php foreach ($items as $item): ?>
                        <div class="col-md-3 filter <?php echo $category; ?>">
                            <div class="each-item">
                                <a href="<?php echo $item['src']; ?>" class="popup-link">
                                    <img class="port-image" src="<?php echo $item['src']; ?>" />
                                    <div class="cap1">
                                        <h3><?php echo $item['title']; ?></h3>
                                    </div>
                                </a>
                                <?php if (isset($item['description'])): ?>
                                    <div class="cap2">
                                        <p class="text-center"><?php echo $item['description']; ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if (isset($item['link'])): ?>
                                    <div class="cap2">
                                        <a href="<?php echo $item['link']; ?>" target="_blank">
                                            <p class="text-center">Visit</p>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </div>
</section>