<?php
use yii\helpers\Html;
?>
<p>Thông tin gửi:</p>
<!--
<ul>
    <li><label>Name</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->content) ?></li>
</ul>-->
<ul>
    <li><label>Email: </label>:<?= $_POST['Feedback']['email']; ?></li>
    <li><label>Nội dung:</label>: <?= ($_POST['Feedback']['content']) ?></li>
</ul>