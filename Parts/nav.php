<?php
$navItems = [
    ["href" => "#home-section", "label" => "Home"],
    ["href" => "#about-section", "label" => "About"],
    ["href" => "#resume-section", "label" => "Resume"],
    ["href" => "#EDUCATION-section", "label" => "Education"],
    ["href" => "#services-section", "label" => "Services"],
    ["href" => "#skills-section", "label" => "Skills"],
    ["href" => "#projects-section", "label" => "Projects"],
    ["href" => "#contact-section", "label" => "Contact"],
];
?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">Ahmed Hassan</a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <?php foreach ($navItems as $item): ?>
                    <li class="nav-item"><a href="<?php echo $item['href']; ?>" class="nav-link"><span><?php echo $item['label']; ?></span></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>
