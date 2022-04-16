<?php

?>

<section class="section-inset-1">
    <div class="container">
        <h6>Icon List</h6>
        <div class="row row-45 text-md-left offset-custom-5">

            <?php
                foreach ($model as $item):
            ?>

            <div class="col-12 col-md-6 col-xl-4">
                <div class="media flex-column flex-md-row thumbnail-mod-2">
                    <div class="media-left"><span class="icon icon-success icon-sm fa-desktop"></span></div>
                    <div class="media-body">
                        <h6 class="text-transform-none"><a href="#"><?= $item->header ?></a></h6>
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
