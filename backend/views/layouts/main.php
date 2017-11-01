<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

$asset = AppAsset::register($this);
$baseUrl = $asset->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	<style type="text/css">
		.form-group{
			margin-bottom:0px;
		}
	</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>
    
<div class="wrapper">
<?= $this->render('header', [
    'baseUrl' => $baseUrl,
]) ?>
    
<?= $this->render('sidebar', [
    'baseUrl' => $baseUrl,
]) ?>
    
<?= $this->render('content', [
    'baseUrl' => $baseUrl,
    'content' => $content,
]) ?>    

<?= $this->render('footer', [
    'baseUrl' => $baseUrl,
]) ?>

<?= $this->render('right-sidebar', [
    'baseUrl' => $baseUrl,
]) ?>    
<!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>    
</div>    
<?php $this->endBody() ?>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
</body>
</html>
<?php $this->endPage() ?>
