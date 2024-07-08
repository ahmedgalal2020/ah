<?php
$skills = [
    ["name" => "Adobe Photoshop", "level" => 74, "color" => "color-1"],
    ["name" => "Adobe Illustrator", "level" => 85, "color" => "color-2"],
    ["name" => "HTML5", "level" => 95, "color" => "color-3"],
    ["name" => "CSS3", "level" => 90, "color" => "color-4"],
    ["name" => "JavaScript", "level" => 80, "color" => "color-5"],
    ["name" => "PHP", "level" => 80, "color" => "color-5"],
    ["name" => "SQL", "level" => 75, "color" => "color-5"],
    ["name" => "Wordpress", "level" => 85, "color" => "color-5"],
    ["name" => "Shopware", "level" => 80, "color" => "color-5"],
    ["name" => "ReactJS", "level" => 77, "color" => "color-5"],
    ["name" => "NextJS", "level" => 67, "color" => "color-5"],
    ["name" => "tailwindcss", "level" => 80, "color" => "color-5"],
    ["name" => "Adobe XD", "level" => 88, "color" => "color-5"],
    ["name" => "figma", "level" => 85, "color" => "color-6"]
];
?>

<section class="ftco-section" id="skills-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Skills</h1>
                <h2 class="mb-4">My Skills</h2>
                <p>"I have a diverse range of skills and experience, which enables me to adapt to new challenges and environments easily."</p>
            </div>
        </div>

        <div class="row">
            <?php foreach ($skills as $skill): ?>
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3><?php echo $skill['name']; ?></h3>
                        <div class="progress">
                            <div class="progress-bar <?php echo $skill['color']; ?>" role="progressbar" aria-valuenow="<?php echo $skill['level']; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $skill['level']; ?>%">
                                <span><?php echo $skill['level']; ?>%</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
