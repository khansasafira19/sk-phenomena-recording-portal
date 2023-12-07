<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use kartik\builder\Form;
use app\models\Satker;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Pengguna */
/* @var $form yii\widgets\ActiveForm */


?>
<style>
    .control-label {
        float: left;
    }

    /* Style the label as a clickable element */
    .form-checkbox-label {
        display: inline-block;
        position: relative;
        padding-left: 25px;
        margin-right: 10px;
        cursor: pointer;
    }

    .form-check {
        padding-left: 0rem !important;
    }
</style>

<div class="wrapper">
    <?php if (Yii::$app->session->hasFlash('success')) : ?>
        <div class="alert alert-info alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <h4><i class="icon fa fa-check"></i>Disimpan!</h4>
            <?= Yii::$app->session->getFlash('success') ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-6">
            <div class="wrapper">
                <?php $form = ActiveForm::begin([
                    'enableClientValidation' => true,
                    'options' => [
                        'name' => 'Form'
                    ]
                ]); ?>
                <?= $form->errorSummary($model) ?>
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Identitas</h3>
                    </div>
                    <div class="card-body">
                        <?php //echo $this->context->action->id
                        ?>

                        <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'style' => 'text-transform: lowercase', 'value' => $model->isNewRecord ? '' : $model->username]) ?>
                        <?php if ($model->isNewRecord) { ?>
                            <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
                            <?= $form->field($model, 'password_repeat')->passwordInput(['maxlength' => true, 'value' => $model->password]) ?>
                        <?php } ?>

                        <?php if (Yii::$app->user->isGuest) : ?>
                            <?= $form->field($model, 'nama')->textInput(['maxlength' => true, 'value' => $model->isNewRecord ? '' : $model->nama, 'readonly' => true]) ?>
                            <?= $form->field($model, 'satker')->dropDownList(
                                ArrayHelper::map(
                                    Satker::find()->orderBy('id_satker')->all(),
                                    'id_satker',
                                    function ($model) {
                                        return $model->nama_satker;
                                    }
                                ),
                                [
                                    'prompt' => 'Pilih Satker',
                                    'options' => [
                                        $model->isNewRecord ? $kantornya : $model->satker => ['selected' => true],
                                    ],
                                    'readonly' => true, // add the disabled attribute to the select element
                                ]
                            ) ?>

                        <?php else : ?>
                            <?= $form->field($model, 'nama')->textInput(['maxlength' => true, 'value' => $model->isNewRecord ? ''  : $model->nama]) ?>
                            <?=
                            $form->field($model, 'satker')->dropDownList(ArrayHelper::map(
                                Satker::find()->orderBy('id_satker')->all(),
                                'id_satker',
                                function ($model) {
                                    return $model->nama_satker;
                                }
                            ), ['prompt' => 'Pilih Satker'])
                            ?>
                        <?php endif; ?>
                        <?php if (!Yii::$app->user->isGuest) : ?>
                            <?php if (!$model->isNewRecord) : ?>
                                <?= $form->field($model, 'active')->checkbox(['checked' => $model->active == 2])->label('Akses Viewer Saja') ?>
                            <?php else : ?>
                                <div class="control-group">
                                    <!-- <label class="control-label form-checkbox-label" for="pengguna-active">Akses Viewer/Operator</label> -->
                                    <div class="controls">
                                        <?= $form->field($model, 'active')->checkbox([
                                            'id' => 'pengguna-active',
                                            // 'label' => false,
                                            'class' => 'form-prize-item-name'
                                        ]) ?>
                                    </div>
                                </div>

                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                    <div class="card-footer text-right">
                        <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary btn-block checkBtn']) ?>
                    </div>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <!-- Modal content will be loaded here -->
            </div>
        </div>
    </div>
</div>
<?php
$this->registerJs('
$(document).ready(function(){
    $("body").on("click", ".modal-link", function(e){
        e.preventDefault();
        $("#myModal").modal("show").find(".modal-body").load($(this).attr("href"));
    });
});
');
?>
<?php
$script = <<< JS
    $('#pengguna-active').on('change', function() {
        if ($(this).is(':checked')) {
            $('label[for="pengguna-active"]').text('Akses Viewer Saja').addClass('btn btn-danger btn-sm bundar').removeClass('btn btn-primary btn-sm bundar');
        } else {
            $('label[for="pengguna-active"]').text('Akses Operator').addClass('btn btn-primary btn-sm bundar').removeClass('btn btn-danger btn-sm bundar');
        }
    });
JS;
$this->registerJs($script);
?>
<script>
    $(document).ready(function() {
        $("#pengguna-active").removeClass("form-check-input");
    });
</script>