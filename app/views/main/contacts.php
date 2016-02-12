<?php
/**
 * @author: Vasya Zhuryk <vasilichik@gmail.com>
 * @version 1.0
 */

use yii\easyii\modules\article\api\Article;

$this->title = 'Контакты';
?>
<div class="jumbotron">
    <?= Article::get('page-contacts')->model->text ?>
</div>
