<?php
use yii\helpers\Html;
use yii\easyii\modules\article\api\Article;
use yii\widgets\Menu;

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
                <?php
                echo Menu::widget([
                    'items' => [
                        ['label' => 'Главная', 'url' => ['main/index']],
                        ['label' => 'О нас', 'url' => ['main/about']],
                        ['label' => 'Медиа', 'url' => ['main/media']],
                        ['label' => Article::last(1, ['category_id' => 4])->model->title, 'url' => ['main/easls', 's' => Article::last(1, ['category_id' => 4])->model->slug]],
                        ['label' => 'Другие тренинги', 'url' => ['main/other_trainings']],
                        ['label' => 'Контакты', 'url' => ['main/contacts']],
                    ],
                    'options' => [
                        'class' => 'nav nav-pills pull-right'
                    ],
                ]);
                ?>
            </nav>
            <h3 class="text-muted">ЕШСС</h3>
        </div>
        <?= $content ?>


        <footer class="footer">
            <div style="float:left;">&copy; EaSLS <?= date('Y',time()) ?></div>

            <div style="float:right;" id="back-to-main">
                <?= HTML::tag('a', HTML::img('/style/img/logo-training.png',['class' => 'training-logo']), ['href' => 'http://trainingInSport.ru']) ?>
            </div>
        </footer>

    </div>
    <!-- /container -->
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>