<?php
/* @var $this yii\web\View */
use yii\easyii\modules\news\api\News;
use yii\easyii\modules\carousel\api\Carousel;
use yii\easyii\modules\article\api\Article;

$this->title = 'ЕШСС - спортивное служение';

?>
<div class="jumbotron">
    <?= Carousel::widget('1020','300',['interval'=>6000]) ?>
</div>

<h1><?= Article::get('home-about')->model->title ?></h1>

<p>
    <?= News::get('main-page')->text ?>
</p>

<div class="row marketing">

    <?php foreach(Article::last(2,['category_id'=>3]) as $item){?>

        <div class="col-lg-6">

            <h4><?=$item->model->title?></h4>
            <p><?=$item->model->text?></p>

        </div>

<?php }?>

    <div class="col-lg-6">


        <p>
<!--            --><?php //print_r(Article::last(1,['category_id'=>4])->model) ?>
        </p>

    </div>

</div>




