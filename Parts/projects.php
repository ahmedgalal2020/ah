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
                        ["src" => "./images/photo1.JPG", "title" => "Ahmed Hassan", "description" => "Training courses"],
                        ["src" => "./images/photo2.JPG", "title" => "Ahmed Hassan", "description" => "Scientific recognition"],
                        ["src" => "./images/photo3.jpg", "title" => "Ahmed Hassan", "description" => "General recognition"],
                        ["src" => "./images/photo4.jpg", "title" => "Ahmed Hassan", "description" => "Continuous work"],
                        ["src" => "./images/photo5.JPG", "title" => "Ahmed Hassan", "description" => "Training courses"],
                        ["src" => "./images/photo6.JPG", "title" => "Ahmed Hassan", "description" => "Training courses"],
                        ["src" => "./images/photo7.JPG", "title" => "Ahmed Hassan", "description" => "Training courses"],
                        ["src" => "./images/photo8.JPG", "title" => "Ahmed Hassan", "description" => "Training courses"],
                        ["src" => "./images/photo9.JPG", "title" => "Ahmed Hassan", "description" => "Training courses"],
                        ["src" => "./images/photo5.JPG", "title" => "Ahmed Hassan", "description" => "Training courses"]
                    ],
                    "infographic" => [
                        ["src" => "./images/info1.jpg", "title" => "Infographic"],
                        ["src" => "./images/info2.jpg", "title" => "Infographic"],
                        ["src" => "./images/info3.jpg", "title" => "Infographic"],
                        ["src" => "./images/info4.jpg", "title" => "Infographic"],
                        ["src" => "./images/info5.jpg", "title" => "Infographic"],
                        ["src" => "./images/info6.jpg", "title" => "Infographic"],
                        ["src" => "./images/info7.jpg", "title" => "Infographic"],
                        ["src" => "./images/info8.jpg", "title" => "Infographic"],
                        ["src" => "./images/info9.jpg", "title" => "Infographic"],
                        ["src" => "./images/info10.jpg", "title" => "Infographic"],
                        ["src" => "./images/info11.jpg", "title" => "Infographic"],
                        ["src" => "./images/info12.JPG", "title" => "Infographic"]
                    ],
                    "webdesign" => [
                        ["src" => "./images/web1t.png", "title" => "Larado web", "link" => "https://14801.de/"],
                        ["src" => "./images/web2t.png", "title" => "Apple Web Iphone 15", "link" => "https://elvwebhub.com/iphone/"],
                        ["src" => "./images/web3t.png", "title" => "Argon Online-Shop", "link" => "https://shop.argon-dental.de/"],
                        ["src" => "./images/web4t.png", "title" => "TailwindED web", "link" => "https://elvwebhub.com/TailwindED/?#"]
                    ],
                    "advertising" => [
                        ["src" => "./images/ad1.jpg", "title" => "Advertising"],
                        ["src" => "./images/ad2.jpg", "title" => "Advertising"],
                        ["src" => "./images/ad3.jpg", "title" => "Advertising"],
                        ["src" => "./images/ad4.jpg", "title" => "Advertising"],
                        ["src" => "./images/ad5.jpg", "title" => "Advertising"],
                        ["src" => "./images/ad6.JPG", "title" => "Advertising"]
                    ],
                    "Logos" => [
                        ["src" => "./images/logo1.png", "title" => "Lovely Animals Logo"],
                        ["src" => "./images/logo2.JPG", "title" => "Ahmed Galal Logo"],
                        ["src" => "./images/logo3.JPG", "title" => "Space Logo"],
                        ["src" => "./images/logo4.jpg", "title" => "CE Line Logo"],
                        ["src" => "./images/logo5.JPG", "title" => "Motivation Center Education Of Tabuk Logo"],
                        ["src" => "./images/logo6.jpg", "title" => "FM Logo"],
                        ["src" => "./images/logo7.JPG", "title" => "Space Logo"],
                        ["src" => "./images/logo8.jpg", "title" => "CE Line Logo"],
                        ["src" => "./images/logo9.jpg", "title" => "Ahmed Galal Logo"],
                        ["src" => "./images/logo10.jpg", "title" => "Ahmed Galal Logo"],
                        ["src" => "./images/logo11.jpg", "title" => "Ahmed Galal Logo"],
                        ["src" => "./images/logo12.png", "title" => "Lovely Animals Logo"]
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