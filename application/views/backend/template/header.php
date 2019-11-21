

<!-- =======================================================
   ! ATENÇÃO, ESSE TEMPLATE TEM DIREITOS AUTORAIS !
   - se apagar isso pode dar 'probleminha'

  Theme Name: ADMIN LTE 3
  Theme URL:ADMIN LTE 
  Author: Colorlib
  Author URL: https://adminlte.io
======================================================= -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    
    <a href="<?php echo base_url('admin/home'); ?>" class="brand-link">
      <img src="<?php echo base_url('assets/frontend/img/capesca_negativo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b><b>CAPESCA</span>
    </a>


   
    <!-- Sidebar -->
   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
            <li class="nav-item">
              <a href="<?php echo base_url('admin/homesite'); ?>" class="nav-link">
              <h4> Home  </h4>
            </a>
          </li>


         
            <li class="nav-item">
           <a href="<?php echo base_url('admin/historia'); ?>" class="nav-link">
              <h4> História </h4>
            </a>
          </li>

         
        
            <li class="nav-item">
           <a href="<?php echo base_url('admin/diretoria'); ?>" class="nav-link">
              <h4> Diretoria </h4>
            </a>
          </li>

          
            <li class="nav-item">
            <a href="<?php echo base_url('admin/exdiretoria'); ?>" class="nav-link">
              <h4> Ex diretores </h4>
            </a>
          </li>

         
            <li class="nav-item">
              <a href="<?php echo base_url('admin/estrutura'); ?>" class="nav-link">
              <h4> Estrutura  </h4>
            </a>
          </li>

          
            <li class="nav-item">
              <a href="<?php echo base_url('admin/noticia'); ?>" class="nav-link">
              <h4> Noticias  </h4>
            </a>
          </li>

          
            <li class="nav-item">
           <a href="<?php echo base_url('admin/agenda'); ?>" class="nav-link">
              <h4> Agenda  </h4>
            </a>
          </li>


            <li class="nav-item">
            <a href="<?php echo base_url('admin/usuarios'); ?>" class="nav-link">
              <h4> Usuarios</h4>
            </a>
          </li>


            <li class="nav-item">
            <a href="<?php echo base_url('admin/usuarios/logout') ?>" class="nav-link">
              <h4>Sair do sistema</h4>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<br>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Area administrativa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
              <li class="breadcrumb-item active"><?php echo $this->session->userdata('userlogado')->nome; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <!-- /.content-header -->