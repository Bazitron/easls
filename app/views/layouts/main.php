<?php
use yii\helpers\Html;
use yii\easyii\modules\article\api\Article;
$asset = \app\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
        <?php $this->head() ?>
    </head>


    <body>
    <?php $this->beginBody() ?>
    <div class="container">

        <div class="header clearfix">
            <nav>
                <ul class="nav nav-pills pull-right">
                    <li role="presentation" class="active"><a href="/">Главная</a></li>
                    <li role="presentation"><?= Html::a('О нас',['/about'])?></li>
                    <li role="presentation"><a href="#">Медиа</a></li>
                    <li role="presentation"><?= Html::a(Article::last(1,['category_id'=>4])->model->title,['/easls','s'=>Article::last(1,['category_id'=>4])->model->slug])?></li>
                    <li role="presentation"><a href="#">Другие тренинги</a></li>
                    <li role="presentation"><a href="#">Контакты</a></li>
                </ul>
            </nav>
            <h3 class="text-muted">ЕШСС</h3>
        </div>
        <?= $content ?>


        <footer class="footer">
            <p>&copy; EaSLS 2015</p>
        </footer>

    </div> <!-- /container -->





    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>