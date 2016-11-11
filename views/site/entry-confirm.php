<?php
/**
 * Created by PhpStorm.
 * User: Sasho
 * Date: 11/11/2016
 * Time: 10:21 AM
 */

use yii\helpers\Html;
?>

<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>