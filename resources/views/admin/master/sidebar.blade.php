<header class="main-header">
  <!-- Logo -->
  <a href="{{url('')}}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>GASS</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>GASS</b>Admin</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
  </nav>
</header>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar" style="height:100vh !important;">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar" >

    <ul class="sidebar-menu">
      <li class="header">CONTENT EDITOR</li>
      <li class="treeview <?php if($active=='products') echo 'active' ?>">
        <a href="#">
          <i class="fa fa-cubes"></i>
          <span>Products</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="<?php if($active2=='tabel') echo 'active' ?>"><a href="{{url('/')}}/products/tabel"><i class="fa fa-circle-o"></i>View product list</a></li>
          <li class="<?php if($active2=='form') echo 'active' ?>"><a href="{{url('/')}}/products/form"><i class="fa fa-circle-o"></i>Insert New Product</a></li>
        </ul>
      </li>
      <li class="treeview <?php if($active=='news') echo 'active' ?>">
        <a href="#">
          <i class="fa fa-newspaper-o"></i>
          <span>News</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="<?php if($active2=='tabel') echo 'active' ?>"><a href="{{url('/')}}/news/tabel"><i class="fa fa-circle-o"></i>View news list</a></li>
          <li class="<?php if($active2=='form') echo 'active' ?>"><a href="{{url('/')}}/news/form"><i class="fa fa-circle-o"></i>Insert news</a></li>
        </ul>
      </li>
      <li class="header">PAGE EDITOR</li>
      <li class="<?php if($active=='homepage') echo 'active' ?>">
        <a href="{{url('/')}}/page-editor/homepage">
          <i class="fa fa-list-ul"></i> <span>Edit Homepage</span>
        </a>
      </li>
      <li class="<?php if($active=='contact') echo 'active' ?>">
        <a href="{{url('/')}}/page-editor/contacts">
          <i class="fa fa-list-ul"></i> <span>Edit Contact Information</span>
        </a>
      </li>

      <li class="treeview <?php if($active=='customer') echo 'active' ?>">
        <a href="#">
          <i class="fa fa-male"></i>
          <span>Customer</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="<?php if($active2=='tabel') echo 'active' ?>"><a href="{{url('/')}}/page-editor/customer-list"><i class="fa fa-circle-o"></i>View customer list</a></li>
          <li class="<?php if($active2=='form') echo 'active' ?>"><a href="{{url('/')}}/page-editor/customer-add"><i class="fa fa-circle-o"></i>Insert new customer</a></li>
        </ul>
      </li>

      <li class="treeview <?php if($active=='jabatan') echo 'active' ?>">
        <a href="#">
          <i class="fa fa-list-ul"></i>
          <span>About</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="<?php if($active2=='tabel') echo 'active' ?>"><a href="#"><i class="fa fa-circle-o"></i>Edit About GMF</a></li>
          <li class="<?php if($active2=='form') echo 'active' ?>"><a href="#"><i class="fa fa-circle-o"></i>Edit About GASS</a></li>
          <li class="<?php if($active2=='form') echo 'active' ?>"><a href="#"><i class="fa fa-circle-o"></i>Edit Our Facility</a></li>
          <li class="<?php if($active2=='form') echo 'active' ?>"><a href="#"><i class="fa fa-circle-o"></i>Edit Testimony</a></li>
        </ul>
      </li>
      <li class="header">MESSAGES & AFTER SALES</li>
      <li class="<?php if($active=='history') echo 'active' ?>">
        <a href="#">
          <i class="fa fa-envelope"></i> <span>View message list</span>
        </a>
      </li>
      <li class="<?php if($active=='history') echo 'active' ?>">
        <a href="#">
          <i class="fa fa-exchange"></i> <span>View after sales list</span>
        </a>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
