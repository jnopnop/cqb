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
                'brandLabel' => 'CQB World',
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
//                'items' => [
//                    ['label' => 'Арена', 'url' => ['/site/index']],
//                    ['label' => 'About', 'url' => ['/site/about']],
//                    ['label' => 'Contact', 'url' => ['/site/contact']],
////                    Yii::$app->user->isGuest ?
////                        ['label' => 'Login', 'url' => ['/site/login']] :
////                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
////                            'url' => ['/site/logout'],
////                            'linkOptions' => ['data-method' => 'post']],
//                ],
            ]);
            NavBar::end();
        ?>

        <?= $content ?>

<!--    <footer class="footer">-->
<!--        <div class="container">-->
<!--            <p class="pull-left">&copy; My Company --><?//= date('Y') ?><!--</p>-->
<!--            <p class="pull-right">--><?//= Yii::powered() ?><!--</p>-->
<!--        </div>-->
<!--    </footer>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
