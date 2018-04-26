<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Chào mừng đến với Website</h1>
<!--        <p class="lead">You have successfully created your Yii-powered application.</p>-->
        <p><a class="btn btn-lg btn-success" href="/feedback/create">Để lại phản hồi tại đây</a></p>
    </div>
    <div class="jumbotron h3 ">
        <?php if(isset($_REQUEST['mgs'])) echo $_REQUEST['mgs']?>
    </div>


</div>
