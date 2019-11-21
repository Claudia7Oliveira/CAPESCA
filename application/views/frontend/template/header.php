<body>
  <header>


    <!-- =======================================================
       ! ATENÇÃO, ESSE TEMPLATE TEM DIREITOS AUTORAIS !
       - se apagar isso pode dar 'probleminha'

      Theme Name: Serenity
      Theme URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->



    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- logo -->
          <a class="brand logo" href="<?php echo base_url();?> ">
            <!-- logo horizontal -->
              <img  width="220px" height="500px"src="<?php echo base_url('assets/frontend/img/capesca_horizontal.png')?>"> 
           </a>

          <!-- end logo -->
          <!-- top menu -->
          <div class="navigation">
            <nav>
              <ul class="nav topnav">
                <li class="dropdown active">
                  <a href="<?php echo base_url('home');?>">Home</a>
                </li>
                <li class="dropdown">
                  <a href="#">Sobre</a>
                  <!-- a chamada aqui é diferente pq o tipo de postagem varia muito
                    a não ser que tenha uma forma de fazer isso e eu não saiba -->
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('historia'); ?>">Historia</a></li>
                    <li><a href="<?php echo base_url('diretoria'); ?>">Diretoria</a></li>
                    <li><a href="<?php echo base_url('exdiretoria'); ?>">Ex Diretores</a></li>

                   
                  </ul>
                </li>
                
                <li class="dropdown">
                  <a href="<?php echo base_url('estrutura'); ?>">Infraestrutura</a>
                </li>
                 <li class="dropdown">
                  <a href="<?php echo base_url('noticia'); ?>">Noticias</a>
                </li>
                <li class="dropdown">
                  <a href="<?php echo base_url('agenda'); ?>">Agenda</a>
                </li>
                <li class="dropdown">
                  <a href="<?php echo base_url('contato'); ?>">Contato</a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- end menu -->
        </div>
      </div>
    </div>
  </header>