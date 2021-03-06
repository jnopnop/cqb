<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
        <?php
            NavBar::begin([
                'brandLabel' => '<img src="/img/navbar-logo.png">',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Арена', 'url' => ['/site/index'],
                        'items' => [
                            ['label' => 'О Заведении', 'url' => '#'],
                            ['label' => 'Цены', 'url' => '#'],
                            ['label' => 'Новости', 'url' => '#'],
                            ['label' => 'Фото', 'url' => '#'],
                            ['label' => 'Мнения', 'url' => '#'],
                            ['label' => 'Контакты', 'url' => '#'],
                        ],
                    ],
                    ['label' => 'Игры', 'url' => ['/site/games']],
                    ['label' => 'Календарь', 'url' => ['/site/calendar']],
                    ['label' => 'Галерея', 'url' => ['/site/gallery']],
                    ['label' => 'Магазин', 'url' => ['/site/shop']],
                ],
            ]);
            NavBar::end();
        ?>

<?= $content ?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <img src="/img/logo-footer.png" class="img-responsive center-block">
            </div>
            <div class="col-lg-4 col-sm-4 text-center">
                <h4>Мы в Соцсетях</h4>
                <a href="#"><img src="/img/facebook.png" alt="vk"></a>
                <a href="#"><img src="/img/twitter.png" alt="twitter"></a>
                <a href="#"><img src="/img/instagram.png" alt="instagram"></a>
            </div>
            <div class="col-lg-4 col-sm-4 text-center">
                <h4>Связь с Нами</h4>
                <p><b>Airsoft Арена Крым</b><br>
                    <span class="glyphicon glyphicon-map-marker"></span> 295047 Узловая 20, РК РФ <br>
                    <span class="glyphicon glyphicon-envelope"></span> contact@airsoft-arena.ru<br>
                    <span class="glyphicon glyphicon-earphone"></span> +7 (978) 878-87-87</p>
            </div>
        </div>
        <p class="copyright">© 2015. Airsoft Арена Крым</p>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
