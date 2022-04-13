<?php

$dateHelper = new \frontend\helpers\DateHelper();

?>

<section class="section section-inset-1">
    <div class="container">
        <h2>Сунги янгиликлар</h2>
        <hr>
        <div class="row row-45 text-md-left">

	        <?php foreach ($data as $item):  ?>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="blog-post thumbnail-1 thumbnail-mod-2"><img src="/img/1.jpg" alt="">
                    <div class="caption">
                        <div class="blog-post-title">
                            <h4 class="text-success-custom text-transform-none"><a href="<?= \yii\helpers\Url::to(['news/view','id' => $item->id]) ?>"><?= $item->getShortHeading() ?></a></h4>
                        </div>
                        <div class="blog-post-time">
                            <time datetime="2015-12-26"><?= $dateHelper->getDateWithMonthName($item->date) ?></time>
                        </div>
                        <div class="blog-post-body">
                            <p><?= $item->getShortText() ?></p><a class="badge fa-comment text-success-custom" href="#">Батафсил</a>
                        </div>
                    </div>
                </div>
            </div>

	        <?php endforeach; ?>
        </div><a class="btn btn-success-mod-1 btn-sm btn-min-width" href="#">view all blog posts</a>
    </div>
</section>
