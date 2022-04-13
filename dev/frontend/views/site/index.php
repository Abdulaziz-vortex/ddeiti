<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';


//banner section


?>
<div class="site-index">

	<div class="preloader">
		<div class="preloader-body">
			<div class="cssload-container">
				<div class="cssload-speeding-wheel"></div>
			</div>
			<p>Loading...</p>
		</div>
	</div>
	<!-- Page-->
	<div class="page text-center"><a class="d-none d-xl-block"
	                                 href="https://www.templatemonster.com/website-templates/vector-grand-website-template-58530.html"
	                                 target="blank"><img class="d-block w-100" src="images/banner-free-01.jpg"
	                                                     alt=""></a>
		<section>
			<div class="swiper-container swiper-slider">
				<div class="jumbotron-mod-1 text-center">
					<div>
						<h1><span class='font-weight-bold'>DDEITI</span>
						</h1>
						<p>The concept behind the creation of most multipurpose themes is to produce a single website
							template that would suit any type of company</p>
						<div class='btn-group-variant'><a class='btn btn-success btn-sm' href='#'>BUY a theme</a> <a
									class='btn btn-white btn-sm' href='#'>view featured</a></div>
					</div>
				</div>
				<div class="swiper-wrapper">
					<div class="swiper-slide" data-slide-bg="/img/1.jpg">
						<div class="swiper-slide-caption"></div>
					</div>
					<div class="swiper-slide" data-slide-bg="/img/2.jpg">
						<div class="swiper-slide-caption"></div>
					</div>
					<div class="swiper-slide" data-slide-bg="images/slider-3.jpg">
						<div class="swiper-slide-caption"></div>
					</div>
				</div>
				<!-- Swiper Pagination-->
				<div class="swiper-pagination"></div>
			</div>
		</section>
		<!-- Page Content-->
		<main class="page-content">

            <?= \frontend\widgets\NewsWidget::widget() ?>


			<section class="section">
				<div class="container">
					<h2>our advantages</h2>
					<hr>
					<p class="h5 fw-l">We create user interfaces and modern websites. We will help you build strong
						online<br class="d-none d-lg-inline">business by creating a professional website which best
						suits your needs.</p>
					<div class="row row-60 clearleft-custom offset-custom-2">
						<div class="col-12 col-md-6 col-xl-3">
							<div class="thumbnail thumbnail-mod-1"><span
										class="icon icon-success icon-lg icon-mod-1 fa-desktop"></span>
								<div class="caption">
									<h4> Retina<br>Ready</h4>
									<p>Now you can enjoy razor sharp text, vibrant colors and crisp images on your
										retina display devices.</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xl-3">
							<div class="thumbnail thumbnail-mod-1"><span
										class="icon icon-success icon-lg icon-mod-1 fa-cogs"></span>
								<div class="caption">
									<h4> Incredibly<br>Flexible</h4>
									<p>Some developers have a defined workflow and are used to using various tools
										independently.</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xl-3">
							<div class="thumbnail thumbnail-mod-1"><span
										class="icon icon-success icon-lg icon-mod-1 fa-pencil-square-o"></span>
								<div class="caption">
									<h4> Clean<br>Design</h4>
									<p>Making design choices for your website can be a daunting task.</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xl-3">
							<div class="thumbnail thumbnail-mod-1"><span
										class="icon icon-success icon-lg icon-mod-1 fa-comments-o"></span>
								<div class="caption">
									<h4> Quick<br>Support</h4>
									<p>Problems with your website or email? Check our Knowledgebase or contact us. We're
										here to help!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="section section-inset-1 bg-accent">
				<div class="container">
					<h2 class="text-center">about company</h2>
					<hr>
					<div class="row row-45">
						<div class="col-12 col-md-12 col-lg-6 text-center text-lg-left"><img src="images/index-1.jpg"
						                                                                     alt=""></div>
						<div class="col-12 col-md-12 col-lg-6 text-lg-left well1">
							<p>We are a studio that aims to make our users experience easier and much more pleasant.</p>
							<p>You probably won't have a better opportunity to make sure of our competence, as well as
								friendliness towards our customers.</p>
							<div class="progress-linear-container">
								<!-- Linear progress bar-->
								<article class="progress-linear">
									<div class="progress-header">
										<p>Social Media Marketing</p><span class="progress-value">50</span>
									</div>
									<div class="progress-bar-linear-wrap">
										<div class="progress-bar-linear"></div>
									</div>
								</article>
								<!-- Linear progress bar-->
								<article class="progress-linear">
									<div class="progress-header">
										<p>Design</p><span class="progress-value">90</span>
									</div>
									<div class="progress-bar-linear-wrap">
										<div class="progress-bar-linear"></div>
									</div>
								</article>
								<!-- Linear progress bar-->
								<article class="progress-linear">
									<div class="progress-header">
										<p>Consulting</p><span class="progress-value">80</span>
									</div>
									<div class="progress-bar-linear-wrap">
										<div class="progress-bar-linear"></div>
									</div>
								</article>
								<!-- Linear progress bar-->
								<article class="progress-linear">
									<div class="progress-header">
										<p>Copywriting</p><span class="progress-value">20</span>
									</div>
									<div class="progress-bar-linear-wrap">
										<div class="progress-bar-linear"></div>
									</div>
								</article>
							</div>
						</div>
					</div>
					<a class="btn btn-white btn-sm btn-min-width" href="#">learn more</a>
				</div>
			</section>
			<section class="section section-inset-2">
				<div class="container">
					<h2 class="text-center">Counters</h2>
					<hr>
					<div class="row row-45">
						<div class="col-12 col-md-6 col-lg-3">
							<div class="counter">78</div>
							<p class="h5 fw-l text-transform-none letter-spacing">Successful projects</p>
						</div>
						<div class="col-12 col-md-6 col-lg-3">
							<div class="counter">23</div>
							<p class="h5 fw-l text-transform-none letter-spacing">Team members</p>
						</div>
						<div class="col-12 col-md-6 col-lg-3">
							<div class="counter">7</div>
							<p class="h5 fw-l text-transform-none letter-spacing">Project managers</p>
						</div>
						<div class="col-12 col-md-6 col-lg-3">
							<div class="counter">374</div>
							<p class="h5 fw-l text-transform-none letter-spacing">Satisfied customers</p>
						</div>
					</div>
				</div>
			</section>
			<section class="section section-inset-2">
				<div class="container">
					<h2>Рахбарият</h2>
					<hr>
<!--					<p class="h5 fw-l">We design smart solutions for digital interactions. Оur creative team generates-->
<!--						extraordinary web designs for personal and corporate purposes through innovative thinking.</p>-->
					<div class="row row-45 offset-custom-2">
						<div class="col-12 col-md-6 col-xl-3">
							<div class="thumbnail thumbnail-mod-1"><img src="images/about-2.jpg" alt="">
								<div class="caption caption-mod-1">
									<h6 class="text-success-custom">Mark Johnson</h6><span class="text-gray">Technical
										Director</span>
									<p>He is responsible for making sure all development output is of the highest
										standards.</p>
									<ul class="list-inline">
										<li><a class="fa-facebook" href="#"></a></li>
										<li><a class="fa-twitter" href="#"></a></li>
										<li><a class="fa-google-plus" href="#"></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xl-3">
							<div class="thumbnail thumbnail-mod-1"><img src="images/about-3.jpg" alt="">
								<div class="caption caption-mod-1">
									<h6 class="text-success-custom">Jessica Priston</h6><span class="text-gray">Web
										Developer</span>
									<p>As an experienced developer in our team, she specialises in front-end
										development.</p>
									<ul class="list-inline">
										<li><a class="fa-facebook" href="#"></a></li>
										<li><a class="fa-twitter" href="#"></a></li>
										<li><a class="fa-google-plus" href="#"></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xl-3">
							<div class="thumbnail thumbnail-mod-1"><img src="images/about-4.jpg" alt="">
								<div class="caption caption-mod-1">
									<h6 class="text-success-custom">Sam Kromstain</h6><span class="text-gray">Team
										Lead</span>
									<p>Sam has been building startups in New York City for several years and now he is
										working with us.</p>
									<ul class="list-inline">
										<li><a class="fa-facebook" href="#"></a></li>
										<li><a class="fa-twitter" href="#"></a></li>
										<li><a class="fa-google-plus" href="#"></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xl-3">
							<div class="thumbnail thumbnail-mod-1"><img src="images/about-5.jpg" alt="">
								<div class="caption caption-mod-1">
									<h6 class="text-success-custom">Edna Barton</h6><span
											class="text-gray">Assistant</span>
									<p>Edna is responsible for the company's operating system, pricing, and strategic
										planning.</p>
									<ul class="list-inline">
										<li><a class="fa-facebook" href="#"></a></li>
										<li><a class="fa-twitter" href="#"></a></li>
										<li><a class="fa-google-plus" href="#"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="bg-light bg-subscribe section section-inset-1">
				<div class="container">
					<h2 class="text-center">newsletter</h2>
					<hr>
					<div class="row justify-content-center offset-custom-3">
						<div class="col-12 col-lg-9 col-xl-6 col-lg-offset-2 col-xl offset-custom-3">
							<p class="fw-l h5 text-transform-none">Enter your email address to receive all news, updates
								on new arrivals, special offers and other discount information.</p>
							<!-- RD Mailform-->
							<form class="rd-mailform subscribe-form" data-result-class="rd-mailform-validate"
							      data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
								<div class="form-wrap">
									<label class="form-label" for="forms-news-email">Your e-mail...</label>
									<input class="form-input" id="forms-news-email" type="email" name="email"
									       data-constraints="@Email @Required">
								</div>
								<div class="button-wrap">
									<button class="btn btn-sm btn-success">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<section class="section section-inset-1">
				<div class="container">
					<h2>testimonials</h2>
					<hr>
					<div class="row">
						<div class="col-12">
							<!-- Owl Carousel-->
							<div class="owl-carousel owl-carousel-mod-2" data-items="1" data-md-items="2"
							     data-xl-items="2" data-loop="false" data-margin="30" data-dots="true"
							     data-autoplay="true">
								<div class="owl-item">
									<blockquote class="quote"><img class="rounded-circle" src="images/index-12.jpg"
									                               alt=""/>
										<p>
											<cite>Sharon Willis</cite>
										</p>
										<p>
											<q>Thanks a lot for the quick response. I was really impressed, your
												solution is excellent! Your competence is justified!</q>
										</p>
									</blockquote>
								</div>
								<div class="owl-item">
									<blockquote class="quote"><img class="rounded-circle" src="images/index-13.jpg"
									                               alt=""/>
										<p>
											<cite>Jack Wilson</cite>
										</p>
										<p>
											<q>I just don't know how to describe your services... They are
												extraordinary! I am quite happy with them! Just keep up going this
												way!</q>
										</p>
									</blockquote>
								</div>
								<div class="owl-item">
									<blockquote class="quote"><img class="rounded-circle" src="images/index-12.jpg"
									                               alt=""/>
										<p>
											<cite>Sharon Willis</cite>
										</p>
										<p>
											<q>Thanks a lot for the quick response. I was really impressed, your
												solution is excellent! Your competence is justified!</q>
										</p>
									</blockquote>
								</div>
								<div class="owl-item">
									<blockquote class="quote"><img class="rounded-circle" src="images/index-13.jpg"
									                               alt=""/>
										<p>
											<cite>Jack Wilson</cite>
										</p>
										<p>
											<q>I just don't know how to describe your services... They are
												extraordinary! I am quite happy with them! Just keep up going this
												way!</q>
										</p>
									</blockquote>
								</div>
								<div class="owl-item">
									<blockquote class="quote"><img class="rounded-circle" src="images/index-12.jpg"
									                               alt=""/>
										<p>
											<cite>Sharon Willis</cite>
										</p>
										<p>
											<q>Thanks a lot for the quick response. I was really impressed, your
												solution is excellent! Your competence is justified!</q>
										</p>
									</blockquote>
								</div>
								<div class="owl-item">
									<blockquote class="quote"><img class="rounded-circle" src="images/index-13.jpg"
									                               alt=""/>
										<p>
											<cite>Jack Wilson</cite>
										</p>
										<p>
											<q>I just don't know how to describe your services... They are
												extraordinary! I am quite happy with them! Just keep up going this
												way!</q>
										</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<!-- Page Footer--><a class="d-block"
		                      href="https://www.templatemonster.com/website-templates/vector-grand-website-template-58530.html"
		                      target="blank"><img class="d-block w-100" src="images/banner-free-02.jpg" alt=""></a>
		<footer class="page-foot bg-light">
			<section class="footer-content">
				<div class="container">
					<div class="rd-navbar-brand"><a class="brand-name" href="index.html">
							<svg class="text-logo" width="130px" height="36px" viewBox="0 0 130 36"
							     shape-rendering="geometricPrecision">
								<text transform="matrix(1 0 0 1 -0.5197 33.3432)" font-family="Pacifico"
								      font-size="36px">Vector
								</text>
								<text transform="matrix(1 0 0 1 68 11.125)" font-family="Montserrat" font-size="14"
								      letter-spacing="1">GRAND
								</text>
								<path class="logo" fill-rule="evenodd" clip-rule="evenodd" stroke-linecap="round"
								      d="M95.313,25.564c9.022-6.656,20.032-9.736,30-5"/>
							</svg>
						</a></div>
					<ul class="list-inline">
						<li><a class="fa-facebook" href="#"></a></li>
						<li><a class="fa-twitter" href="#"></a></li>
						<li><a class="fa-pinterest-p" href="#"></a></li>
						<li><a class="fa-vimeo" href="#"></a></li>
						<li><a class="fa-google" href="#"></a></li>
						<li><a class="fa-rss" href="#"></a></li>
					</ul>
				</div>
			</section>
			<section class="footer-copyright-1 copyright">
				<div class="container">
					<p>&#169; <span class="copyright-year"></span> All Rights Reserved. Designed by <a
								href="https://www.templatemonster.com/products/author/zemez/">Zemez.</a></p>
				</div>
			</section>
		</footer>
		<!-- Rd Mailform result field-->
		<div class="rd-mailform-validate"></div>
	</div>
	<!-- Global Mailform Output-->
	<div class="snackbars" id="form-output-global"></div>

</div>
