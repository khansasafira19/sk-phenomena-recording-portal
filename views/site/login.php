<?php

use yii\helpers\Html;
?>
<?php if (Yii::$app->session->hasFlash('success')) : ?>
    <div class="alert alert-info alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <h4><i class="icon fa fa-check"></i> Disimpan!</h4>
        <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>
<?php if (Yii::$app->session->getFlash('error') !== NULL) { ?>
    <div class="alert alert-danger alert-dismissable"><?= Yii::$app->session->getFlash('error'); ?></div>
<?php } ?>
<script type="text/javascript">
    function IsEmpty() {
        var a = document.forms["Form"]["LoginForm[username]"].value;
        var b = document.forms["Form"]["LoginForm[password]"].value;
        if (a == null || a == "", b == null || b == "") {
            //alert("Silahkan isi username dan/atau password Anda.");
            swal({
                title: "Hai!",
                text: "Mohon lengkapi isi username dan/atau password Anda.",
                icon: "error",
                button: "OK",
                dangerMode: false,
            });
            return false;
        }
    }
</script>
<div class="card bg-success">

    <div class="card-body login-card-body rounded">
        <p class="login-box-msg">Silahkan input credentials Anda:</p>

        <?php $form = \yii\bootstrap4\ActiveForm::begin(['id' => 'login-form', 'options' => ['name' => "Form"]]) ?>

        <?=
        $form->field($model, 'username', [
            'options' => ['class' => 'form-group has-feedback'],
            'inputOptions' =>
            ['autofocus' => 'autofocus'],
            'inputTemplate' => '{input}<div class="input-group-append"><div class="input-group-text"><span class="fas fa-user"></span></div></div>',
            'template' => '{beginWrapper}{input}{error}{endWrapper}',
            'wrapperOptions' => ['class' => 'input-group mb-3'],
        ])
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('username')])
        ?>

        <?=
        $form->field($model, 'password', [
            'options' => ['class' => 'form-group has-feedback'],
            'inputTemplate' => '{input}<div class="input-group-append"><div class="input-group-text"><span class="fas fa-lock"></span></div></div>',
            'template' => '{beginWrapper}{input}{error}{endWrapper}',
            'wrapperOptions' => ['class' => 'input-group mb-3']
        ])
            ->label(false)
            ->passwordInput(['placeholder' => $model->getAttributeLabel('password')])
        ?>

        <div class="row">
            <div class="col-8">
                <?php
                $form->field($model, 'rememberMe')->checkbox([
                    'template' => '<div class="icheck-success">{input}{label}</div>',
                    'labelOptions' => [
                        'class' => ''
                    ],
                    'uncheck' => null
                ])
                ?>
            </div>
            <div class="col-4">
                <?= Html::submitButton('Log In', ['class' => 'btn btn-outline-info btn-block bundar', 'id' => 'checkBtn', 'onclick' => "return IsEmpty();"]) ?>
            </div>
        </div>

        <div class="social-auth-links text-center mb-3">
            <?php

            use yii\bootstrap4\Modal;

            Modal::begin([
                'title' => 'Hint',
                'toggleButton' => ['label' => '<i class="glyphicon glyphicon-th-list"></i>  Hint', 'class' => 'btn btn-warning btn-xs bundar'],
            ]);
            echo 'Log into the app using username "admin" and password "admins"'; // refer the demo page for widget settings
            Modal::end();
            ?>
        </div>
        <?php \yii\bootstrap4\ActiveForm::end(); ?>

    </div>
    <!-- /.login-card-body -->
</div>