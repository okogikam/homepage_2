<?php
$data_nav = array(
    array(
        "icon" => "",
        "name" => "",
        "link" => "",
        "type" => ""
    ),
);
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Okogikam</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Okogikam</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="./index.php" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">PROJECT ONGOING</li>
          <li class="nav-item">
          <a href="./?p=project_list&s=progres" class="nav-link">
              <!-- <i class="nav-icon fas fa-file-archive"></i> -->
              <i class="nav-icon fa-solid fa-file-lines"></i>
              <p>
                Progres
              </p>
            </a>
        </li>
        <li class="nav-item">
          <a href="./?p=add_project" class="nav-link">
              <i class="nav-icon fas fa-file-medical"></i>
              <p>
                Add project
              </p>
            </a>
        </li>
          <li class="nav-header">PROJECT DONE</li>
          <li class="nav-item">
          <a href="./?p=project_list&s=done" class="nav-link">
          <i class="nav-icon fa-solid fa-file-circle-check"></i>
              <p>
                Done
              </p>
            </a>
        </li>
        <li class="nav-item">
          <a href="./?p=project_list&s=cancel" class="nav-link">
          <i class="nav-icon fa-solid fa-file-circle-xmark"></i>
              <p>
                Cancel
              </p>
            </a>
        </li>
          <li class="nav-header">EXAMPLES</li>        
          <li class="nav-header">DOCOMENTASION</li>
          <li class="nav-item">
            <a href="./docs/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://fontawesome.com/" target="_blank" class="nav-link">
              <i class="nav-icon fas fa-link"></i>
              <p>Icon</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>