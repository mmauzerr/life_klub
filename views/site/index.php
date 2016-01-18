<?php

use yii\helpers\Html;
use app\assets\AppAsset;

/* @var $this yii\web\View */
/* @var $model app\models\ContactForm */

AppAsset::register($this);

$this->title = 'LIFE Klub';
?>
<div class="container">
    <!----------- beginning of >> Bootstrap carousel << ----------------->

        <div class="content">
            <?= $this->render('karusel') ?>
        </div>

    <!-------------- end of >> Bootstrap carousel << --------------------->

    <!---------------- beginning of >> Banner << ------------------------->

        <div class="banner">
            <?= Html::img('@web/images/banner.jpg')?>
        </div>

    <!---------------------- end  >> Banner << --------------------------->

    <!------------------ beginning of >> Moto << ------------------------->

        <div class="col-lg-12 moto">
            <h2 class="white">
                " Tvoje telo je sposobno da uradi bilo šta,<br />
                 samo prvo moraš da ubediš mozak u to... "
            </h2>
        </div>

    <!----------------------- end >> Moto << ------------------------------>

    <div class="site-index">
        <div class="row">

    <!----------------- beginning of >> UVOD << ---------------->

            <div class="content">
                <?= $this->render('uvod')?>
            </div>

    <!--------------------- end of >> UVOD << ------------------>

    <!---------------- beginning of >> O NAMA << --------------->

            <div class="content">
                <?= $this->render('onama') ?>
            </div>

    <!-------------------- end of >> O NAMA << ----------------->

    <!-------------- beginning of >> INSTRUKTORI << ------------>

            <div class="content">
                <?= $this->render('instruktori') ?>
            </div>

    <!------------------ end of >> INSTRUKTORI << -------------->

    <!---------------- beginning of >> GALERIJA << ------------->

            <div class="content">
                <?= $this->render('galerija') ?>
            </div>

    <!------------------ end of >> GALERIJA << ----------------->

    <!--------------- beginning of >> PROGRAM << ---------------->

            <div class="content">
                <?= $this->render('program') ?>
            </div>
    <!------------------ end of >> PROGRAM << ------------------->



    <!--------------- beginning of >> KONTAKT << ---------------->

        <div class="content">
            <?= $this->render('kontakt',['model' => $model]) ?>
        </div>

    <!------------------ end of >> KONTAKT << ------------------->
        <div id="vrati-button">
            <div class="text-center">
                <p ><a class="btn btn-lg btn-default" style="color:gray;margin-right: 45%;margin-top: -20px" href="/site/index">Vrati Nazad</a></p>
            </div>
        </div>
        </div><!----end of "row" ----->

    </div><!--- end of "contact-index"  ----->
</div><!--- end of "container"  ----->