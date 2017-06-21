<!DOCTYPE html>
<html>
  <head>
    <title>GASS Admin Panel</title>
    <?php echo $__env->make('admin.master.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <?php echo $__env->make('admin.master.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Main content -->
        <section class="content" style="padding: 5% 10%;">
          <?php echo $__env->yieldContent('content'); ?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <small>Copyright 2017 GMF Aircraft Support Services | All Rights Reserved | Website by Shafly Naufal Adianto - Hariyoso Ario Bimo</small>
      </footer>
    </div><!-- ./wrapper -->
  </body>
</html>
