<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
?>
<div class="site-uvod">
    <div class="col-lg-12">
        <div id="nen-uvod" style="color: black">
            <div class="text-correction">
                <p> Vežbanje 1 na 1 sa trenerom jeste najbolje ali je medjutim ovo i
                    najskuplji vid treniranja, zato je fitnes klub Life krenuo sa radom vodjenih ( polu individualnih )
                    treninga, gde se trening izvodi sa više vežbača u isto vreme, ali tako da svaki vežbač radi svoj
                    program nezavisno od drugih vežbača u grupi.
                </p>

                <p style="margin-left: -30px;text-align: center">* * *</p>

                <p> Ovakav tip rada ne zaostaje previše za individualnim treningom ali je u znatnoj meri
                    pristupačniji za samog vežbača. Zato priuštite sebi ovakav vid vežbanja i bićete lepši,
                    zdraviji, zategnutiji i raspoloženiji tokom čitavog dana. Očekujemo Vas da nam se
                    pridružite i otkrijete lepotu vežbanje i življenja punim plućima.
                </p>
            </div>
        </div>
        <div class="vezbanje">
            <?= Html::img('/images/vezbanje2.jpg',['style' => [
                'width' => '170px',
                'height' => '145px',
                'margin-bottom' => '7px',
                'border' => '1px solid gray',
                'border-radius' => '10px',
                'box-shadow' => '-3px 2px 10px rgba(0, 0, 0, 0.81)'
            ]]) ?>
            <br />
            <?= Html::img('/images/vezbanje1.jpg',['style' => [
                'width' => '170px',
                'height' => '145px',
                'margin-bottom' => '7px',
                'border' => '1px solid gray',
                'border-radius' => '10px',
                'box-shadow' => '-3px 2px 10px rgba(0, 0, 0, 0.81)'
            ]]) ?>
            <br />
            <?= Html::img('/images/vezbanje03.jpg',['style' => [
                'width' => '170px',
                'height' => '145px',
                'border' => '1px solid gray',
                'border-radius' => '10px',
                'box-shadow' => '-3px 2px 10px rgba(0, 0, 0, 0.81)'
            ]]) ?>
        </div>
    </div>
    <div class="buttons">
        <div class="text-center" >
            <p ><a class="btn btn-lg btn-default" style=" position:absolute;margin-top:56%;margin-left: -15%;color:gray" href="/site/index"> Nazad</a></p>
        </div>
    </div>
</div>
