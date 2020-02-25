<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
            <div class="col-lg-10 ftco-animate d-flex align-items-center">
                <div class="text text-center">
                    <h1 class="mb-3 bread">ADMIN</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?= Url::home()?>">Home&nbsp;&nbsp;&nbsp;&nbsp;<i class="ion-ios-arrow-forward"></i></a></span><span class="mr-2"></span><span>Login</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<center class="site-login">
    <?php $form = ActiveForm::begin([
        'options' => [
            'id' => 'login-form',
            'class' => 'p-5 bg-light'
        ],
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>
    <p>Please fill out the following fields to login:</p>

        <?= $form->field($model, 'username')->textInput() ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn py-3 px-4 btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

<!--    <div class="col-lg-offset-1" style="color:#999;">-->
<!--        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>-->
<!--        To modify the username/password, please check out the code <code>app\models\User::$users</code>.-->
<!--    </div>-->
</center>
