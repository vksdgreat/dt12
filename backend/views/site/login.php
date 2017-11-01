<!--<script src='https://www.google.com/recaptcha/api.js'></script>
<style>
.g-recaptcha {
    transform:scale(1.06);
    transform-origin:0 0;
}
</style>-->
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Alert;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="login-box">
  <div class="login-logo">
      <a href="index.php"><b>Dream Track</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="border-bottom: 2px solid;">
        <?php
        $session = Yii::$app->session;      
        if ($session->isActive && $session->getFlash('error') != ''){
         echo Alert::widget([
             'options' => ['class' => 'alert-danger'],
             'body' => $session->getFlash('error'),
         ]);
        }
        ?>
    <p class="login-box-msg">Sign in to start your session</p>
    <?php $form = ActiveForm::begin(['id' => 'login-form']);?>
    <?= $form->field($model, 'username', ['options' => ['tag' => 'div','class' => 'form-group field-login-form-username has-feedback required'],
        'template' => '{input}<span class="glyphicon glyphicon-user form-control-feedback"></span>{error}{hint}'])->textInput(['placeholder' => 'Username']);?>
    
    <?= $form->field($model, 'password',['options' => ['tag' => 'div', 'class' => 'form-group field-login-form-password has-feedback'],
        'template' => '{input}<span class="glyphicon glyphicon-lock form-control-feedback"></span>{error}{hint}'])->passwordInput(['placeholder' => 'Password']);?>

    
    
   <!-- <div class="g-recaptcha" style="width:" data-sitekey="6LelCR0UAAAAADzWfp4HA0lcITo9b7YrQrcMnH63"></div>-->
    <? // $form->field($model, 'rememberMe')->checkbox();?>
    <div class="form-group text-center">
            <?= Html::submitButton('Login',['class' => 'btn btn-primary','style' => 'width:100%', 'name' => 'login-button']) ?>
        <?php //yii\authclient\widgets\AuthChoice::widget(['baseAuthUrl' => ['site/auth']])?>
        <?php //echo yii\authclient\widgets\AuthChoice::widget(['baseAuthUrl' => ['site/auth']])?>
        
    </div>
    <?php ActiveForm::end() ?>
  </div>
  <!-- /.login-box-body -->
</div>
</div>
</div>
