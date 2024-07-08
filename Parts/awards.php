<?php
$counters = [
    ["number" => 100, "label" => "Awards"],
    ["number" => 1200, "label" => "Complete Projects"],
    ["number" => 1200, "label" => "Happy Customers"],
    ["number" => 500, "label" => "Cups of coffee"]
];
?>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
    <div class="container">
        <div class="row d-md-flex align-items-center">
            <?php foreach ($counters as $counter): ?>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="<?php echo $counter['number']; ?>">0</strong>
                            <span><?php echo $counter['label']; ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
