<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-6 col-lg-5 d-flex">
				<div class="img-about img d-flex align-items-stretch">
					<div class="overlay"></div>
					<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/bg_1.png);">
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
				<div class="row justify-content-start pb-3">
					<div class="col-md-12 heading-section ftco-animate">
						<h1 class="big">About</h1>
						<h2 class="mb-4">About Me</h2>
						<p>"I am a highly motivated and skilled individual with a strong background in Information
							technology ."</p>
						<ul class="about-info mt-4 px-md-0 px-2">
							<li class="d-flex"><span>Name:</span> <span>Ahmed Hassan</span></li>
							<li class="d-flex"><span>Date of birth:</span> <span>Novamber 13, 1991</span></li>
							<li class="d-flex"><span>Address:</span> <span>Waldalgesheim,55425 Bingen ,
									Germany</span></li>
							<li class="d-flex"><span>Email:</span> <span>AhmedHassan@elvwebhub.com</span></li>
							<li class="d-flex"><span>Phone: </span> <span>(+49) 17648727152</span></li>
						</ul>
					</div>
				</div>
				<div class="counter-wrap ftco-animate d-flex mt-md-3">
					<div class="text">
						<p class="mb-4">
							<span class="number" data-number="120">0</span>
							<span>Project complete</span>
						</p>
						<p><a href="images/Lebenslauf Ahmed Hassan.pdf" class="btn btn-primary py-3 px-3">Download CV</a></p>
					</div>
				</div>

			</div>
		</div>

		<?php
		$skills = [
			"HTML", "CSS", "JS", "React Js", "Next Js", "Figma",
			"Adobe XD", "Adobe Photoshop", "Adobe Illustrator", "Php", "SQL"
		];
		?>

		<!-- about-skills -->
		<div class="scroller moving-left">
			<div class="scroller__container">
				<div class="scroller__inner">
					<?php foreach ($skills as $skill) : ?>
						<div class="skill"><?php echo $skill; ?></div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>

		<!-- Add another scroller div for the right-moving skills -->
		<div class="scroller moving-right">
			<div class="scroller__container">
				<div class="scroller__inner">
					<?php foreach ($skills as $skill) : ?>
						<div class="skill"><?php echo $skill; ?></div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>


	</div>
</section>