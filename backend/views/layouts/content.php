<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          <?php echo $this->title;?>
<!--        Dashboard-->
<!--        <small>Control panel</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= Url::home() ?>"><i class="fa fa-home"></i> Dashboard</a></li>
        <li class="<?php Yii::$app->controller->id == $this->title?'active':'';?>"><?=$this->title?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <?= $content ?>
    </section>
    <!-- /.content -->
  </div>