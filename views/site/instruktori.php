<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
?>
<div class="site-instruktori">
    <div id="instruktori">

        <div class="col-lg-12 text-correction">
            <h2 class="font-effect-emboss text-center" style="color: #7f7f7f;text-align: left;font-size:2em;padding-left: 7%;padding-top:20px;margin-bottom: -10px">INSTRUKTORI</h2>
            <hr style="width: 68%;opacity:0.4;margin-left: -6px"/>
            <div class="maja-poz">
                <div class="inst-maja">
                    <p><strong>Maja Petrović</strong> - završila visoku školu za sportske trenere Dugogodišnje iskustvo u radu sa
                        rekreativcima i sportistima. Posebna pažnja usmerena pored fizičkog i na psihološki momenat
                        treninga I motivaciju klijenata.
                    </p>
                </div>
                <div class="maja-img">
                    <?= Html::img('/images/maja/vezbe_ledja.jpg',['style' => [
                        'width' => '220px',
                        'border' => '3px solid gray',
                        'border-radius' => '10px',
                        'box-shadow' => '-3px 2px 10px rgba(0, 0, 0, 0.81)'
                    ]]) ?>
                </div>
            </div>
            <div class="bane-poz">
                <div class="inst-bane">
                    <p><strong>Bane Petrović</strong> - završio visoku školu za sportske trenere. Od 2002. godine radi kao trener u više
                        fitnes klubova u gradu gde je u praktičnom radu sa rekreativcima i sportistima stekao iskustvo u
                        programiranju i praćenju treninga
                    </p>
                    <hr style="position: absolute;width: 71%;margin-top:6%;margin-left: -5%;opacity:0.4"/>
                </div>
                <div class="bane-img">
                    <?= Html::img('/images/bane01.jpg',['style' => [
                        'width' => '220px',
                        'border' => '3px solid gray',
                        'border-radius' => '10px',
                        'box-shadow' => '1px -4px 10px rgba(0, 0, 0, 0.81)'
                    ]]) ?>
                </div>
            </div>
        </div>

        <div class="buttons">
            <div class="text-center">
                <p ><a class="btn btn-lg btn-default" style="float:right;margin-right: 15%;color:gray" href="/site/index"> Nazad</a></p>
            </div>
        </div>

    </div>
</div>






