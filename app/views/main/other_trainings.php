<?php
/**
 * @author: Vasya Zhuryk <vasilichik@gmail.com>
 * @version 1.0
 */

use yii\easyii\modules\article\api\Article;

$this->title = 'Другие Тренинги';
?>
<div class="jumbotron">
    <?= Article::get('page-other-trainings')->model->text ?>
</div>