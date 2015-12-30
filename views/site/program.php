<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
?>
<div class="site-programi">
    <div class="col-lg-12 text-center">

        <span id="program"></span>

        <div class="programi">

            <h2 class="font-effect-emboss text-center">PROGRAMI</h2>

            <hr style="opacity:0.5"/>
            <p style="font-size: larger"><strong>Vodjeni treninzi</strong> - se izvode uz stalan nadzor instruktora, gde svako od
                vežbača prati svoj tip programa.Sa ovakvim tipom vežbanja angažuju se sve grupe mišića, stiče se kondicija, oblikuje se telo,
                definišu se mišići, gube se suvišni kilogrami, poboljšava psihičko stanje, eliminiše stres.Zato vežbajte 3 do 4 puta nedeljno
                i videćete kako je vaš kvalitet života postao bolji.</p><hr style="opacity:0.5"/><br />
            <p style="padding: 4% 0 1% 0;font-size: larger"><strong>Individualni trening</strong> - 1 na 1 sa trenerom - Ovakav vid treninga je najbolji i savetuje se
                ambicioznijim vežbačima, profesionalnim sportistima i osobama koje imaju ozbiljnijih
                zdravstvenih problema. </p><br /><hr style="opacity:0.5"/><br />
            <p style="padding: 5% 0;font-size: larger"><strong>Kondicioni treninzi</strong> - prvenstveno su namenjeni sportistima koji za cilj imaju poboljšanje svoje
                fizičke izdržljivosti.</p><br /><hr style="opacity:0.5"/><br />
            <p style="font-size: larger"> <strong>Joga</strong> - disciplina koja podstiče vitalnost tela, oplemenjuje osećajni, socijalni i duhovni život.
                Joga ne predstavlja samo fizičke vežbe, iako ne treba isključiti njihov delotvorni učinak na
                poboljšanje ukupnog zdravlja i vitalnosti. Joga  predlaže način tj. “filozofiju sadržajnog življenja”,
                odnosno skup plemenitih i praktičnih smernica za uravnotežen, sadržajan i odgovoran život.
            </p><br />
            <p style="font-size: larger;margin-left: 3%;margin-bottom: 5%">Časovi joge u fitnes klubu Life izvodi
                instruktor joge <span style="font-size: larger">Jasmina</span>
            </p>
            <hr style="opacity:0.5"/>
            <div class="vezbanje_2">
                <?= Html::img('/images/fitness.jpg',['style' => [
                    'width' => '340px',
                    'height' => '200px',
                    'border' => '1px solid gray',
                    'border-radius' => '10px',
                    'box-shadow' => '-3px 2px 10px rgba(0, 0, 0, 0.81)'
                ]]) ?><br /><br />
                <?= Html::img('/images/personal.jpg',['style' => [
                    'width' => '340px',
                    'height' => '200px',
                    'border' => '1px solid gray',
                    'border-radius' => '10px',
                    'box-shadow' => '-3px 2px 10px rgba(0, 0, 0, 0.81)'
                ]]) ?><br /><br />
                <?= Html::img('/images/kondicija2.jpg',['style' => [
                    'width' => '340px',
                    'height' => '200px',
                    'border' => '1px solid gray',
                    'border-radius' => '10px',
                    'box-shadow' => '-3px 2px 10px rgba(0, 0, 0, 0.81)'
                ]]) ?><br /><br />
                <?= Html::img('/images/joga.jpg',['style' => [
                    'width' => '340px',
                    'height' => '200px',
                    'border' => '1px solid gray',
                    'border-radius' => '10px',
                    'box-shadow' => '-3px 2px 10px rgba(0, 0, 0, 0.81)'
                ]]) ?><br />
            </div>
        </div>

        <div class="buttons">
            <div class="text-center" style="margin-left: 54%;margin-top:-12%;margin-bottom: 10%">
                <p ><a class="btn btn-lg btn-default" style="color:gray" href="/site/index"> Nazad</a></p>
            </div>
        </div>

    </div>
</div>