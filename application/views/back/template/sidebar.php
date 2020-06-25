<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin5">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="p-t-30">
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/dashboard') ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-user"></i><span class="hide-menu">Users</span></a>
          <ul aria-expanded="false" class="collapse  first-level">
            <li class="sidebar-item"><a href="<?php echo base_url('admin/auth/create_user') ?>" class="sidebar-link"><i class="fas fa-plus"></i><span class="hide-menu"> Tambah Data </span></a></li>
            <li class="sidebar-item"><a href="<?php echo base_url('admin/auth') ?>" class="sidebar-link"><i class="fas fa-list"></i><span class="hide-menu"> Daftar Data </span></a></li>
          </ul>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">Groups</span></a>
          <ul aria-expanded="false" class="collapse  first-level">
            <li class="sidebar-item"><a href="<?php echo base_url('admin/auth/create_group') ?>" class="sidebar-link"><i class="fas fa-plus"></i><span class="hide-menu"> Tambah Data </span></a></li>
            <li class="sidebar-item"><a href="<?php echo base_url('admin/auth/group_list') ?>" class="sidebar-link"><i class="fas fa-list"></i><span class="hide-menu"> Daftar Data </span></a></li>
          </ul>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/auth/logout') ?>" aria-expanded="false"><i class="fas fa-sign-out-alt"></i><span class="hide-menu">Logout</span></a></li>
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->