<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
	  
        <li><a href="<?= Url::home() ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="<?= Url::home() ?>agent"><i class="fa fa-users"></i> <span>Agents</span></a></li>
        <li><a href="<?= Url::home() ?>user"><i class="fa fa-users"></i> <span>Users</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>