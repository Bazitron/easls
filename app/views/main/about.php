<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 08.10.15
 * Time: 5:43
 */
use yii\easyii\modules\article\api\Article;

$this->title = 'ЕШСС - спортивное служение';
?>
<div class="jumbotron">
    <?= Article::get('page-aboutus')->model->text ?>
</div>

