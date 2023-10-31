<?php get_header(); ?>

	<!-- Header -->

	<header>
		<div id="carouselExampleCaptions" class="carousel slide">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
					aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
					aria-label="Slide 2"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?php the_field('slajd_slika_1'); ?>" class="d-block w-100" alt="Hero image">
					<div class="carousel-caption d-none d-md-block">
						<h1 class="text-white mb-4 fw-normal"><?php the_field('slajd_tekst_1'); ?></h1>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?php the_field('slajd_slika_2'); ?>" class="d-block w-100" alt="Hero image">
					<div class="carousel-caption d-none d-md-block">
						<h1 class="text-white mb-4 fw-normal"><?php the_field('slajd_tekst_2'); ?></h1>
					</div>
				</div>
			</div>
		</div>
	</header>


	<!-- About -->

	<section id="about" class="about d-flex flex-nowrap py">
		<div class="img-wrapper">
			<img src="<?php the_field('about_slika'); ?>" alt="">
		</div>
		<article class="text-wrapper pe-5">
			<h2><?php the_field('about_naslov'); ?></h2>
			<?php the_field('about_tekst'); ?>
		</article>
	</section>

	<!-- Much More -->

	<section id="more" class="more text-white py">
		<div class="container">
			<h2><?php the_field('more_naslov'); ?></h2>
			<div class="row py-5">
				<?php $query = new WP_Query(array('post_type' => 'usluge'));
				if($query->have_posts()) : ?>
				<?php while($query->have_posts()) : $query->the_post(); ?>
					<div class="col-md-4 mb-3">
						<h4><?php the_post_thumbnail(); ?> <?php the_title(); ?></h4>
						<p class="mt-3"><?php the_content(); ?></p>
					</div>
				<?php endwhile; wp_reset_postdata(); ?>
				<?php else : ?>
					<?php _e('Nema jos unetih usluga'); ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<!-- Repairs filter -->

	<section id="repairs" class="repairs-wrapper text-center py">
		<h2><?php the_field('repairs_naslov'); ?></h2>
		<p class="mt-3 mb-5 fs-5"><?php the_field('repairs_tekst'); ?></p>
		<div id="btn-wrapper">
			<button class="btn btns me-5" onclick="showMacbookView()"><img
				src="<?php the_field('repair_icon_macbook'); ?>" alt="icon">
				<?php the_field('reparis_text_1'); ?></button>
			<button class="btn btns me-5" onclick="showImacView()"><img
					src="<?php the_field('repair_icon_imac'); ?>" alt="icon"> <?php the_field('reparis_text_2'); ?></button>
			<button class="btn btns me-5" onclick="showIpadView()"><img
					src="<?php the_field('repair_icon_ipad'); ?>" alt="icon">
					<?php the_field('reparis_text_3'); ?></button>
			<button class="btn btns me-5" onclick="showMacminiView()"><img
					src="<?php the_field('repair_icon_mini'); ?>" alt="icon">
					<?php the_field('reparis_text_4'); ?></button>
		</div>

		<div class="row container mx-auto">
			<div class="card mb-3 container my-5 macBook">
				<div class="row g-0 align-items-center justify-content-center">
					<div class="col-md-4">
						<img src="<?php the_field('repairs_img_1'); ?>" class="img-fluid rounded-start" alt="macbook">
					</div>
					<div class="col-md-8 align-content-center">
						<div class="card-body text-start">
							<h4 class="card-title"><?php the_field('repairs_card_title_1'); ?></h4>
							<p class="card-text mt-5 mb-3"><?php the_field('repairs_card_text_1'); ?></p>
						</div>
					</div>
				</div>
			</div>

			<div class="card mb-3 container my-5 iMac">
				<div class="row g-0 align-items-center justify-content-center">
					<div class="col-md-4">
						<img src="<?php the_field('repairs_img_2'); ?>" class="img-fluid rounded-start" alt="iPad">
					</div>
					<div class="col-md-8 align-content-center">
						<div class="card-body text-start">
							<h4 class="card-title"><?php the_field('repairs_card_title_2'); ?></h4>
							<p class="card-text mt-5 mb-3"><?php the_field('repairs_card_text_2'); ?></p>
						</div>
					</div>
				</div>
			</div>

			<div class="card mb-3 container my-5 iPad">
				<div class="row g-0 align-items-center justify-content-center">
					<div class="col-md-4">
						<img src="<?php the_field('repairs_img_3'); ?>" class="img-fluid rounded-start" alt="iPod">
					</div>
					<div class="col-md-8 align-content-center">
						<div class="card-body text-start">
							<h4 class="card-title"><?php the_field('repairs_card_title_3'); ?></h4>
							<p class="card-text mt-5 mb-3"><?php the_field('repairs_card_text_3'); ?></p>
						</div>
					</div>
				</div>
			</div>

			<div class="card mb-3 container my-5 macMini">
				<div class="row g-0 align-items-center justify-content-center">
					<div class="col-md-4">
						<img src="<?php the_field('repairs_img_4'); ?>" class="img-fluid rounded-start" alt="iPhone">
					</div>
					<div class="col-md-8 align-content-center">
						<div class="card-body text-start">
							<h4 class="card-title"><?php the_field('repairs_card_title_4'); ?></h4>
							<p class="card-text mt-5 mb-3"><?php the_field('repairs_card_text_4'); ?></p>
						</div>
					</div>
				</div>
			</div>


		</div>
	</section>


	<!-- Call to action -->

	<div id="cta" class="cta-wrapper bg-black py-5">
		<div class="cta container text-white d-flex align-items-center">
			<div class="cta-text">
				<h2><?php the_field('cta_naslov'); ?></h2>
				<p><?php the_field('cta_tekst'); ?></p>
			</div>
			<div class="cta-btn ms-auto">
				<a href="#" class="btn btn-outline-light px-5 py-2 text-uppercase"><?php the_field('cta_btn_light'); ?></a>
				<a href="#" class="btn btn-primary px-5 py-2 text-uppercase"><?php the_field('cta_btn_primary'); ?></a>
			</div>
		</div>
	</div>

	<!-- Our services -->

	<section id="services" class="services-wrapper text-center py">
		<h2><?php the_field('services_naslov'); ?></h2>
		<h5 class="pt-3 pb-5 fw-normal"><?php the_field('services_tekst'); ?></h5>
		<div class="row container m-auto">

			<?php $query = new WP_Query(array('post_type' => 'repairs'));
			if($query->have_posts()) : ?>
			<?php while($query->have_posts()) : $query->the_post(); ?>
				<div class="col-md-4">
					<figure>
						<img src="<?php echo get_template_directory_uri();?>/img/walk-in.svg" alt="">
					</figure>
					<h3><?php the_title(); ?></h3>
					<p class="py-4"><?php the_content(); ?></p>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
			<?php else : ?>
				<?php _e('Nema jos unetih usluga'); ?>
			<?php endif; ?>

		</div>
	</section>

	<!-- FAQ -->
	<div id="faq" class="faq-wrapper py">
		<div class="container text-center">
			<h2><?php the_field('faq_glavni_naslov'); ?></h2>
			<p class="py-3"><?php the_field('faq_podnaslov'); ?></p>
			<div class="row my-5">
				<div class="col-md-6">
					<div class="accordion accordion-flush" id="accordionFlushExample">
						<div class="accordion-item mb-3 py-2">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse"
									data-bs-target="#flush-collapseOne" aria-expanded="false"
									aria-controls="flush-collapseOne">
									<?php the_field('faq_naslov_1'); ?>
								</button>
							</h2>
							<div id="flush-collapseOne" class="accordion-collapse collapse"
								data-bs-parent="#accordionFlushExample">
								<div class="accordion-body text-start"><?php the_field('faq_tekst_1'); ?></div>
							</div>
						</div>
						<div class="accordion-item mb-3 py-2">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse"
									data-bs-target="#flush-collapseTwo" aria-expanded="false"
									aria-controls="flush-collapseTwo">
									<?php the_field('faq_naslov_2'); ?>
								</button>
							</h2>
							<div id="flush-collapseTwo" class="accordion-collapse collapse"
								data-bs-parent="#accordionFlushExample">
								<div class="accordion-body text-start"><?php the_field('faq_tekst_2'); ?></div>
							</div>
						</div>
						<div class="accordion-item mb-3 py-2">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse"
									data-bs-target="#flush-collapseThree" aria-expanded="false"
									aria-controls="flush-collapseThree">
									<?php the_field('faq_naslov_3'); ?>
								</button>
							</h2>
							<div id="flush-collapseThree" class="accordion-collapse collapse"
								data-bs-parent="#accordionFlushExample">
								<div class="accordion-body text-start"><?php the_field('faq_tekst_3'); ?></div>
							</div>
						</div>
						<div class="accordion-item py-2">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse"
									data-bs-target="#flush-collapseFour" aria-expanded="false"
									aria-controls="flush-collapseFour">
									<?php the_field('faq_naslov_4'); ?>
								</button>
							</h2>
							<div id="flush-collapseFour" class="accordion-collapse collapse"
								data-bs-parent="#accordionFlushExample">
								<div class="accordion-body text-start"><?php the_field('faq_tekst_4'); ?></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="accordion accordion-flush" id="accordionFlushExample">
						<div class="accordion-item mb-3 py-2">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse"
									data-bs-target="#flush-collapseFive" aria-expanded="false"
									aria-controls="flush-collapseFive">
									<?php the_field('faq_naslov_5'); ?>
								</button>
							</h2>
							<div id="flush-collapseFive" class="accordion-collapse collapse"
								data-bs-parent="#accordionFlushExample">
								<div class="accordion-body text-start"><?php the_field('faq_tekst_5'); ?></div>
							</div>
						</div>
						<div class="accordion-item mb-3 py-2">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse"
									data-bs-target="#flush-collapseSix" aria-expanded="false"
									aria-controls="flush-collapseSix">
									<?php the_field('faq_naslov_6'); ?>
								</button>
							</h2>
							<div id="flush-collapseSix" class="accordion-collapse collapse"
								data-bs-parent="#accordionFlushExample">
								<div class="accordion-body text-start"><?php the_field('faq_tekst_6'); ?></div>
							</div>
						</div>
						<div class="accordion-item mb-3 py-2">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse"
									data-bs-target="#flush-collapseSeven" aria-expanded="false"
									aria-controls="flush-collapseSeven">
									<?php the_field('faq_naslov_7'); ?>
								</button>
							</h2>
							<div id="flush-collapseSeven" class="accordion-collapse collapse"
								data-bs-parent="#accordionFlushExample">
								<div class="accordion-body text-start"><?php the_field('faq_tekst_7'); ?></div>
							</div>
						</div>
						<div class="accordion-item py-2">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse"
									data-bs-target="#flush-collapseEight" aria-expanded="false"
									aria-controls="flush-collapseEight">
									<?php the_field('faq_naslov_8'); ?>
								</button>
							</h2>
							<div id="flush-collapseEight" class="accordion-collapse collapse"
								data-bs-parent="#accordionFlushExample">
								<div class="accordion-body text-start"><?php the_field('faq_tekst_8'); ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact -->
	<section id="contact" class="contact-wrapper py">
		<h2 class="text-center"><?php the_field('contact_naslov'); ?></h2>
		<div class="row container mx-auto mt-5">
			<div class="col-md-6">
				<?php the_field('forma'); ?>
			</div>
			<div class="col-md-6">
				<?php the_field('mapa'); ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>