<?php
/**
 * @author: Vasya Zhuryk <vasilichik@gmail.com>
 * @version 1.0
 */

use yii\easyii\modules\article\api\Article;

$this->title = 'ЕШСС - спортивное служение';
?>
<div class="jumbotron">
    <?= Article::get('page-aboutus')->model->text ?>
</div>

