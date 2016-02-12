<?php
/**
 * @author: Vasya Zhuryk <vasilichik@gmail.com>
 * @version 1.0
 */

$this->title = 'ЕШСС';
?>
<div class="jumbotron">
    <?php
    /** @var yii\easyii\modules\article\api\Article $page */
    if ($page)
        echo $page->model->text;
    else
        throw new \yii\web\NotFoundHttpException();
    ?>
</div>