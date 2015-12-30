<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\overlays\InfoWindow;
use dosamigos\google\maps\overlays\Marker;
use dosamigos\google\maps\Map;

/* @var $this yii\web\View */
?>


<div class="col-lg-12">
    <span id="kontakt"></span>
    <h2 class="font-effect-emboss" style="color: #7f7f7f;font-family: 'Francois One', sans-serif;margin-left:21%;padding-top:50px;font-size:2.9em">KONTAKT</h2><br />
    <div id="nen-contact" style="margin-bottom:30px;border:none">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-map" id="map-canvas" style="border: 1px solid #a3a3a3;">
                        <?php

                        $coord = new LatLng(['lat' => 44.834209, 'lng' => 20.414084]);
                        $map = new Map([
                            'center' => $coord,
                            'zoom' => 16,
                            'width' => 'auto',
                            'height' => 430
                        ]);

                        $home = new LatLng(['lat' =>  44.833513, 'lng' => 20.409160]);
                        //       $map->appendScript($directionsService->getJs());

                        $marker = new Marker([
                            'position' => $coord,
                            'title' => 'Life Fitnes Centar',

                        ]);

                        $marker->attachInfoWindow(
                            new InfoWindow([
                                'content' => '<img border="0" align="center" src="/images/objekat.jpg" width="222">'
                            ])
                        );
                        $map->addOverlay($marker);?>
                        <?php

                        echo $map->display();?>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 contact_right" style="margin-top: 10px">
                    <div class="row" style="margin-top: -20px;margin-left: 8px">
                        <br />
                        <p style="float: left"><strong>Adresa : </strong><img src="/images/icon1.png" alt="icon 1" width="25px" />Džona Kenedija 10G, 11080 Srbija Zemun</p>
                        <p style="float: left"><strong>Telefon : </strong><img src="/images/icon2.png"  alt="icon 2" width="25px" />011/319-45-81</p><br />
                    </div>
                    <p style="float: left; margin-left: 8px; padding-bottom: 6%"><strong>Mobilni : </strong><img src="/images/icon3.png"  alt="icon 2" width="25px" />063/45-6663 &nbsp;&nbsp;|&nbsp;&nbsp; 063/8429-689</p>

                    <!--------------------------  begining of Kontakt form fields -------------------------->

                    <div class="site-contact">
                        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                            <div class="alert alert-success col-lg-12 text-center">
                                Uspesno ste nas kontaktirali.<br />Uskor ce te dobiti odgovor
                            </div>

                        <?php else: ?>
                            <div class="row">
                                <div class="contact-form nen-form">

                                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                                    <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />

                                    <?= $form->field($model, 'name',[
                                        'inputOptions' => [
                                            'placeholder' => 'unesite ime...',
                                        ]])->label(false) ?>

                                    <?= $form->field($model, 'email',[
                                        'inputOptions' => [
                                            'placeholder' => 'unesite email...',
                                        ]])->label(false)  ?>

                                    <?= $form->field($model, 'body',['inputOptions' =>
                                        ['placeholder' => 'vaš poruka...',
                                        ]])->textArea(['rows' => 8])->label(false) ?>

                                    <div class="form-group" style="margin-right: -60%">
                                        <?= Html::submitButton('Posalji', ['class' => 'btn btn-default', 'name' => 'contact-button']) ?>
                                        <div style="margin-left: 295px;margin-top: -35px">
                                            <?= Html::resetButton('Obrisi', ['class' => 'btn btn-default', 'name' => 'reset-button']) ?>
                                        </div>
                                    </div>

                                    <?php ActiveForm::end(); ?>

                                </div>
                            </div>

                        <?php endif; ?>
                    </div>
                    <!--------------------------  end of Kontakt form fields -------------------------->

                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <p ><a class="btn btn-lg btn-default" style="color:gray;margin-right: 30%;margin-top: -50px" href="/site/index">Vrati Nazad</a></p>
    </div>
    <span class="clearfix"></span>
</div>