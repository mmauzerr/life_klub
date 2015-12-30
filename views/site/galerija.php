<?php

use yii\helpers\Html;
use dosamigos\gallery\Gallery;

/* @var $this yii\web\View */
?>
<div class="site-galerija">
    <span id="galerija"></span>

    <div class="col-lg-12 galery ">
        <div class="text-center tribal">
            <?= Html::img('/images/gal1.png',['style' => [
                'margin-bottom' => '-40px',
                'width' => '160px',
                'opacity' => '0.4'
            ]]) ?>
            <h2 class="font-effect-emboss white" style="color: #535353;font-family: 'Francois One', sans-serif;font-size: 2.9em;">GALERIJA</h2>
        </div>
    <br />
    <hr style="opacity:0.4;margin-left:-10%;margin-top: 10px;width: 120%;"/>

    <div class="text-center">

        <?php $items = [
            [
                'url' => '/images/1506465_854699581231868_7190615254346975100_b.jpg',
                'src' => '/images/1506465_854699581231868_7190615254346975100_s.jpg',
            ],
            [
                'url' => '/images/1551758_581230121955828_554232338_b.jpg',
                'src' => '/images/1551758_581230121955828_554232338_s.jpg',
            ],
            [
                'url' => '/images/10373990_710253025676525_5383635587420245061_b.jpg',
                'src' => '/images/10373990_710253025676525_5383635587420245061_s.jpg',
            ],
            [
                'url' => '/images/PhotoGrid_1440882948188_b.jpg',
                'src' => '/images/PhotoGrid_1440882948188_s.jpg',
            ],
            [
                'url' => '/images/11147026_844757888892704_1522621803670937972_b.jpg',
                'src' => '/images/11147026_844757888892704_1522621803670937972_s.jpg',
            ],
            [
                'url' => '/images/11229403_928015023900323_6115491732829456513_b.jpg',
                'src' => '/images/11229403_928015023900323_6115491732829456513_s.jpg',
            ],
            [
                'url' => '/images/sl5_b.jpg',
                'src' => '/images/sl5_s.jpg',
            ],
            [
                'url' => '/images/12003005_914109251957567_7924878785362156468_b.jpg',
                'src' => '/images/12003005_914109251957567_7924878785362156468_s.jpg',
            ],
            [
                'url' => '/images/12038240_920284341340058_7040671015848479926_b.jpg',
                'src' => '/images/12038240_920284341340058_7040671015848479926_s.jpg',
            ],
            [
                'url' => '/images/12039337_920284384673387_5213764633877121259_b.jpg',
                'src' => '/images/12039337_920284384673387_5213764633877121259_s.jpg',
            ],
            [
                'url' => '/images/PhotoGrid_1440880563946-001_b.jpg',
                'src' => '/images/PhotoGrid_1440880563946-001_s.jpg',
            ],
            [
                'url' => '/images/PhotoGrid_1440881024476_b.jpg',
                'src' => '/images/PhotoGrid_1440881024476_s.jpg',
            ],
            [
                'url' => '/images/PhotoGrid_1440881237484_b.jpg',
                'src' => '/images/PhotoGrid_1440881237484_s.jpg',
            ],
            [
                'url' => '/images/PhotoGrid_1440881305750_b.jpg',
                'src' => '/images/PhotoGrid_1440881305750_s.jpg',
            ],
            [
                'url' => '/images/PhotoGrid_1440882635937_b.jpg',
                'src' => '/images/PhotoGrid_1440882635937_s.jpg',
            ],
            [
                'url' => '/images/PhotoGrid_1440882921687_b.jpg',
                'src' => '/images/PhotoGrid_1440882921687_s.jpg',
            ],
            [
                'url' => '/images/sl4_b.jpg',
                'src' => '/images/sl4_s.jpg',
            ],
            [
                'url' => '/images/sl3_b.jpg',
                'src' => '/images/sl3_s.jpg',
            ],
            [
                'url' => '/images/sl2_b.jpg',
                'src' => '/images/sl2_s.jpg',
            ],
        ];?>

        <?= Gallery::widget(['items' => $items]);?>

    </div>

    <hr style="opacity:0.4;margin-top: 10px;"/>

    <div class="text-center tribal">

        <?= Html::img('/images/tribal-dole.png') ?>

    </div>
    <div class="buttons">
        <div class="text-center">
            <p ><a class="btn btn-lg btn-default" style="color:gray" href="/site/index"> Nazad</a></p>
        </div>
    </div>
    <br />

    </div>
</div>