<?php
/**
 * @author: Vasya Zhuryk <vasilichik@gmail.com>
 * @version 1.0
 */

use yii\easyii\modules\gallery\api\Gallery;

$this->title = 'Медиа';
?>
<div class="jumbotron">
    <?php foreach(Gallery::last(6) as $photo) : ?>
        <?= $photo->box(180, 135) ?>
    <?php endforeach;?>
    <?php Gallery::plugin() ?>
</div>