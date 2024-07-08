<?php
$services = [
    ["icon" => "fi fi-rs-interactive", "title" => "IT services"],
    ["icon" => "flaticon-ux-design", "title" => "UI / UX Design"],
    ["icon" => "flaticon-ideas", "title" => "Web Developer"],
    ["icon" => "flaticon-innovation", "title" => "Infographic Design"],
    ["icon" => "fi fi-rs-camera", "title" => "Logo Design"],
    ["icon" => "fi fi-rr-video-camera", "title" => "Video Editing"]
];
?>

<section class="ftco-section" id="services-section">
    <div class="container">
        <div class="row justify-content-center py-5 mt-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Services</h1>
                <h2 class="mb-4">Services</h2>
                <p>We use the latest technologies and techniques to ensure that our services are efficient, effective, and reliable</p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($services as $service): ?>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
                        <span class="icon">
                            <i class="<?php echo $service['icon']; ?>"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5"><?php echo $service['title']; ?></h3>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
