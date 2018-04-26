<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h2 class="text-center h2">Feedback</h2>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'content')->textarea() ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>