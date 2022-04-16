<?php

?>

<section class="section-inset-1 border-top pt-4">
    <div class="container">
        <h4>Бошқа янгиликлар</h4>
        <div class="row row-45 text-md-left offset-custom-5">

            <?php
                foreach ($model as $item):
            ?>

            <div class="col-12 col-md-6 col-xl-4">
                <div class="media flex-column flex-md-row thumbnail-mod-2">
                    <div class="media-left"><span class="icon icon-success icon-sm fa-desktop"></span></div>
                    <div class="media-body">
                        <h6 class="text-transform-none"><a href="<?= \yii\helpers\Url::to(['news/view','id' => $item->id]) ?>"><?= $item->getShortHeading() ?></a></h6>
                        <p><?= $item->getShortText() ?></p>
                    </div>
                </div>
            </div>


            <?php
                endforeach;
            ?>

        </div>
    </div>
</section>
