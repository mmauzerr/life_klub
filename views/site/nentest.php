<?php
namespace views\site;

use Yii;
use app\assets\AppAsset;

AppAsset::register($this);

$this->title = 'TEST';

?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language?>">
<head>
    <link rel="stylesheet" type="text/css" href="/css/nentest.css">
    <script src="/js/jquery-1.3.2.js" type="text/javascript" charset="utf-8"></script>
    <script src="/js/jquery.color.js" type="text/javascript" charset="utf-8"></script>
    <script src="/js/jquery-glowing.js" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('.white').addGlow({ textColor: '#aaa', haloColor: '#aaa', radius: 100 });
            $('.blue').addGlow({ textColor: '#00f', haloColor: '#00f', radius: 100 });
            $('.green').addGlow({ textColor: '#0f0', haloColor: '#0f0', radius: 100 });
            $('.red').addGlow({ textColor: '#f00', haloColor: '#f00', radius: 100 });
            $('*').bind('glow:started', console.info);
            $('*').bind('glow:canceled', console.info);
        });
    </script>
</head>

<body>
    <?php $this->beginBody()?>


        <div>
            <p>Here are some examples:</p>
            <p><h2 class="white">Hover over me.</h2></p>
            <p><h2 class="green" >Me too.</h2></p>
            <p><h2 class="blue" >I'm blue.</h2></p>
            <p><h2 class="red" >Redified.</h2></p>
        </div>

        <footer class="footer" >
            <div class="container">
                <div class="text-center">
                    <p>Footer &copy; <?= date('Y')?></p>
                </div>
            </div>
        </footer>

    <?php $this->endBody()?>
</body>
</html>
<?php $this->endPage() ?>