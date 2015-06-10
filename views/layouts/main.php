<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */
AppAsset::register($this);?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	<link type="text/css" rel="stylesheet" href="/css/frontend/style.css" />
    <script type="text/javascript" src="/scripts/common/jquery.min.js"></script>
    <script type="text/javascript" src="/scripts/frontend/script.js"></script>
	<?php $this->head() ?>	
</head>
<body>
	<?php $this->beginBody() ?>
    <div class="wrap">
        <div class="container">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <ul class="nav navbar-nav">
                            <li>
                                <a class="navbar-brand" href="/#">
                                <img alt="Brand" src="/images/brend.png">
                            </a>
                            </li>
                            <li>
                                <a href="/">Главная</a>
                            </li>
                            <li>
                                <a href="/?r=site/registration">Регистрация</a>
                            </li>
                            <li>
                                <a href="/?r=user&order=3">Пользователи</a>
                            </li>
                            <li>
                                <a href="/?r=site/login">Вход!</a>
                            </li>
                            <li>
                                <a href="/?r=site/logout">Выход</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> 
            <div class = "col-md-12">           
                <?= $content ?>
                <br>
                <footer class = "footer">
                    <div class = "row">
                        <p class = "text-center">Сделано для it-store</p>
                    </div>
                </footer>
            </div>
        </div>
    </div>
	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
