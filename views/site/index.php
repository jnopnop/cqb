<?php
/* @var $this yii\web\View */
/* @var $events */

$this->title = 'CQB World';
//$this->registerJsFile('https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=j1A-wYdZyuK-q7-gDXkz1z2k_2yxCNMP&width=600&height=450');
?>
<!--parallax 1 -->
<section class="bg-1 text-center">
    <div class="jumbotron">
        <h1>Airsoft Арена</h1>
        <br>
        <p class="lead">Первая Крымская</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Участвовать</a></p>
    </div>
</section>
<!--/parallax 1-->

<!-- WHO WE ARE -->
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-md-12 text-center">-->
<!--            <h1>Об Арене</h1>-->
<!--        </div>-->
<!--    </div>-->
<!--    <br/>-->
<!--    <div class="row">-->
<!--        <div class="col-md-4">-->
<!--            <div class="featurette-item">-->
<!--                <img src="/img/logo-big.jpg" class="img-responsive center-block">-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md-8">-->
<!--            <p class="lead">CQB World Crimea - это первая в Крыму страйкбольная база отдыха. CONSECTETUR ADIPISCING ELIT. MAURIS LUCTUS LEO VOLUTPAT MAURIS LUCTUS, EGET RUTRUM SEM EUISMOD. PELLENTESQUE FAUCIBUS PULVINAR NISI, SIT AMET VIVERRA IPSUM PORTTITOR PELLENTESQUE. ALIQUAM PELLENTESQUE FRINGILLA LOBORTIS. PRAESENT NON MAGNA GRAVIDA, VEHICULA NISL AT, ALIQUET LIBERO.</p>-->
<!--        </div>-->
<!--    </div><!--/row-->
<!--    <br>-->
<!--</div>-->
<!-- WHO WE ARE -->

<?= \yii2fullcalendar\yii2fullcalendar::widget([
    'options' => [
        'language' => 'fr'
    ],
    'clientOptions' => [
        'eventClick' => new yii\web\JsExpression("function(calEvent, jsEvent, view) {
                            alert('Event: ' + calEvent.title);
                            alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
                            alert('View: ' + view.name);

                            // change the border color just for fun
                            $(this).css('border-color', 'red');
                        }"),
    ],
    'ajaxEvents' => yii\helpers\Url::to(['/site/schedule'])
]); ?>
<!-- REFETCH EVENTS -->
<div class="container">

    <!-- First Featurette -->
    <div class="row featurette" id="about">
        <div class="col-md-7">
            <h2 class="featurette-heading">Airsoft Arena<small>Развлечение для настоящих мужчин</small></h2>
            <p>Вы интересуетесь страйкболом, но у вас не было возможности попробовать? Хотите активно провести время при этом не отдавая кучу денег на покупку всего необходимого снаряжения? Если да, тогда мы с удовольствием приглашаем Вас постетить Арену!
            Организаторские deathmatch-бои, бои на пистолетах и дробовиках, захват и освобождение заложников, штурмы и обороны, и еще много других интересных сюжетов только у нас! Вам всегда будут рады у нас вне зависимости от того, есть ли у вас свое снаряжение либо вы играете впервые, есть ли у вас компания или вы пришли сами. Если же вы еще не решились попробовать, приходите на плановые игры в качестве наблюдателя и мы гарантируем, что в следующий раз вы непременно пожелаете присутствовать в качестве игрока на одной из сторон!
            </p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive pull-right" src="/img/logo-big.jpg">
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- Second Featurette -->
    <div class="row featurette" id="about">
        <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading"><del>+18</del>   Играй даже если тебе нет 18</h2>
            <p>Возрастная планка для участия в играх снижена до +14! Обязательным условием является присутствие взрослого, который несет за тебя ответственность и может либо играть с тобой рука об руку, либо с комфортом наблюдать и болеть за твою команду. Удобные места отдыха на 2м этаже не позволят пропустить ни одного интересного игрового момента! </p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive pull-right" src="/img/logo-big.jpg">
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- Third Featurette -->
    <div class="row featurette" id="about">
        <div class="col-md-7">
            <h2 class="featurette-heading">Приватные мероприятия<small>Корпоративы, дни рождения, тренировки</small></h2>
            <p>Страйкбол - это в первую очередь командная игра, которая позволит сплотить коллектив и заставит плотно взаимодействовать друг с другом ради победы! Корпоратив, день рождения и даже мальчишник - это отличный повод организовать игру в страйкбол; вы получите море эмоций и отличный заряд бодрости</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive pull-right" src="/img/logo-big.jpg">
        </div>
    </div>

    <hr class="featurette-divider">
</div>

<div class="featurette" id="sec2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Почему именно мы</h1>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="featurette-item">
                    <img src="/img/feature1.png" class="img-responsive img-rounded center-block">
                    <h4>Уникальность</h4>
                    <p>Airsoft Арена - это первая и единственная в Крыму страйкбольная база</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="featurette-item">
                    <img src="/img/feature2.png" class="img-responsive img-rounded center-block">
                    <h4>Интерес</h4>
                    <p>Команда опытных страйкболистов и инструкторов создаст действительно интересный сюжет именно для Вашей игры!</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="featurette-item">
                    <img src="/img/feature3.png" class="img-responsive img-rounded center-block">
                    <h4>Условия</h4>
                    <p>У нас есть теплый ангар, охраняемая автостоянка, раздевалки, душ, зона отдыха.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="featurette-item">
                    <img src="/img/feature3.png" class="img-responsive img-rounded center-block">
                    <h4>Безопасность</h4>
                    <p>Мы создали все условия для максимально безопасной игры. Все защитное снаряжение регулярно проходит проверки, а все оружие перед игрой подвергается хронометражу.</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="featurette-item">
                    <img src="/img/feature1.png" class="img-responsive img-rounded center-block">
                    <h4>Magnet</h4>
                    <p>For you are a magnet and I am steel.</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="featurette-item">
                    <img src="/img/feature2.png" class="img-responsive img-rounded center-block">
                    <h4>Shield</h4>
                    <p>Protect yourself. Don't design like it's 1999.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Последние Новости</h1>
        </div>
        <div class="col-lg-8">
            <p>Свежачок из Жизни Арены</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img class="img-responsive" src="/img/post01.jpg" alt="">
            <h3><a href="#">Designing for the reader experience</a></h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            <p><a href="#"><i class="fa fa-link"></i> Read More</a></p>
        </div>
        <div class="col-md-4">
            <img class="img-responsive" src="/img/post02.jpg" alt="">
            <h3><a href="#">Designing for the reader experience</a></h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            <p><a href="#"><i class="fa fa-link"></i> Read More</a></p>
        </div>
        <div class="col-md-4">
            <img class="img-responsive" src="/img/post03.jpg" alt="">
            <h3><a href="#">Designing for the reader experience</a></h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            <p><a href="#"><i class="fa fa-link"></i> Read More</a></p>
        </div>
    </div><!--/row-->

    <br>

</div><!--/container-->

<section class="no-padding" id="portfolio">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-lg-4 col-sm-6 gallery-img">
                <a href="#" class="portfolio-box">
                    <img src="/img/portfolio1.jpg" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 gallery-img">
                <a href="#" class="portfolio-box">
                    <img src="/img/portfolio2.jpg" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 gallery-img">
                <a href="#" class="portfolio-box">
                    <img src="/img/portfolio3.jpg" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 gallery-img">
                <a href="#" class="portfolio-box">
                    <img src="/img/portfolio4.jpg" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 gallery-img">
                <a href="#" class="portfolio-box">
                    <img src="/img/portfolio5.jpg" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 gallery-img">
                <a href="#" class="portfolio-box">
                    <img src="/img/portfolio6.jpg" class="img-responsive" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<div class="divider"></div>

<div class="container-fluid contacts-container">
    <div class="row">
        <div class="col-lg-8 map-container">
            <div id="map"></div>
        </div>
        <div class="col-lg-4">
            <h4>ADDRESS<br>Minsk - Head Office</h4>
            <br>
            <p>
                Business Center, SomeAve 987,<br>
                Minsk, Belarus.
            </p>
            <p>
                P: +55 4839-4390<br>
                F: +55 4333-4345<br>
                E: <a href="mailto:#">hello@linkagency.com</a>
            </p>
            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
        </div>
    </div>
</div><!--/container-->
