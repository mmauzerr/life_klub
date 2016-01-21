<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js' type='text/javascript'></script>

    <?= Html::csrfMetaTags() ?>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="description" content="Fitnes klub Life osnovan je 2003 godine. Klub se nalazi na samoj granici
    novog Beograda i Zemuna i namenjen je pripadnicama lepšeg pola. U našem klubu radi se uz konstantan nadzor instruktora, treninzi su
         polu-individualnog karaktera ( vežbanje se izvodi u malim grupama ), prilagodjeni prema kondiciji, godinama i zdravstvenom stanju samog vežbača.">
    <meta name="keywords" content="fitnes klub, fitness club, fitnes klub beograd, beograd, fitness, fitnes, fitness centar, priprema sportista,
         trening, treninzi, licni trener, individualni treninzi, joga, joga fitness, streaching, fitness exercise,
         ženski fitness, women's fitness, zdravlje, sport, sport fitness, 1 na 1, gym, istezanje, rastezanje, vezbe,
         vezbanje, vežbanje, vežbe, fitness sprave, sprave za vežbanje, vodjeni treninzi, definicija mišića,
         kondicioni treninzi, zdravlje, višak kilograma">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Francois One">
    <link href='http://fonts.googleapis.com/css?family=Black+Ops+One|Luckiest+Guy|Sonsie+One|Shojumaru&effect=3d|3d-float|anaglyph|brick-sign|canvas-print|
          crackle|decaying|destruction|distressed|distressed-wood|emboss|fire|fire-animation|fragile|grass|ice|mitosis|neon|outline|putting-green|
          scuffed-steel|shadow-multiple|splintered|static|stonewash|vintage|wallpaper'' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="/images/logo_sm.ico">

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.white').addGlow({ textColor: '#aaa', haloColor: 'black', radius: 50 });
            $('.blue').addGlow({ textColor: '#00f', haloColor: '#00f', radius: 100 });
            $('.green').addGlow({ textColor: '#0f0', haloColor: '#0f0', radius: 100 });
            $('.red').addGlow({ textColor: '#f00', haloColor: '#f00', radius: 100 });
            $('*').bind('glow:started', console.info);
            $('*').bind('glow:canceled', console.info);
        });
    </script>
</head>
<body>
<?php $this->beginBody() ?>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-72243398-1', 'auto');
    ga('send', 'pageview');

</script>
<div class="facebook-mob">
    <a href="https://www.facebook.com/Fitnes-klub-life-182105238491309/?fref=ts"
       title="Pratite nas na Facebook-u"
       target="_blank"><span class="fa fa-facebook" style="color: white;font-size: 1.2em"></span></a>
</div>
<div class="wrap">

    <?php
    NavBar::begin([
        'brandLabel' =>Html::img('@web/images/logo_sm.png'),
        'brandOptions' => ['class' => 'brandLogo'],
        'options' => [
            'class' => 'nen-navbar navbar-fixed-top',
        ],
    ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
            //    ,
                ['label' => 'O NAMA', 'url' => ['/site/index/#onama']],
                ['label' => 'INSTRUKTORI', 'url' => ['/site/index/#instruktori']],
                ['label' => 'GALERIJA', 'url' => ['/site/index/#galerija']],
                ['label' => 'PROGRAM', 'url' => ['/site/index/#program']],
                ['label' => 'KONTAKT', 'url' => ['/site/index/#kontakt']],
             ],
        ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="text-center">
            <p style="color: #8c8c8c;margin-top: 10px">&copy; LIFE Klub <?= date('Y') ?></p>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
