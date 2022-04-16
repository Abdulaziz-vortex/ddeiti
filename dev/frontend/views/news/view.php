<?php
use frontend\helpers\DateHelper;
$dateHelper = new DateHelper();

$this->params['page_heading'] = 'Янгиликлар';

?>

<!-- Page Content-->
<main class="page-content">
	<div class="section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-10">
					<section class="section-inset-1">
                        <a data-fancybox data-src="<?= '/admin/uploads/'.$data->photos ?>">
                            <img src="<?= '/admin/uploads/'.$data->photos ?>" alt="">
                        </a>
						<h2 class="mt-4"><?= $data->header ?></h2>
                        <span class="blog-post-time"><?= $dateHelper->getDateWithMonthName($data->date) ?></span>
						<p class="text-md-left offset-custom-7"><?= $data->text ?></p>
						<p class="text-md-left">The information should be not only well-organized and easy to read, but
							it should be also presented in a visually pleasing manner, thus making the process of
							reading an enjoyable journey.</p>
					</section>
				</div>
			</div>
		</div>
	</div>

    <?= \frontend\widgets\OtherNewsWidget::widget(['id' => $data->id]) ?>

</main>
