<section id="intro">
  <div class="jumbotron masthead">
    <div class="container">
     
      <div class="row">
        <div class="span12">
          <?php 
          foreach($publicacoes as $post){
          ?>
            <div id="sequence">
              <ul>
                <li>
                  <div class="info animate-in">
                    <br>
                   <a href="<?php echo base_url('historia'); ?>">
                      <h3 class="title" > <?php echo $post->titulo ?></h3>
                  </a>
                   <a href="<?php echo base_url('historia'); ?>">
                      <h6 class="title" > <?php echo $post->conteudo ?></h6>
                  </a>

                 
                    <a class="btn btn-success" href="<?php echo base_url('historia'); ?>"> Leia mais &raquo;</a>
                 </div>
                 <br>
                 <br>
                 <!-- img aqui -->
                 <style>
                 img{ 
                     
                  }
                 </style>
                  <?php
                  if($post->img == 1){
                  $fotopub = base_url("assets/frontend/img/home/".md5($post->id).".jpg");
                 ?>
                 <img class="slider_img animate-in" src="<?php echo $fotopub ?>" alt="" style="width: 800px; height:600px;">
                 <hr>
                 <?php
                 }
                 ?>

                </li>
              </ul>

            </div>
            <br><br><br>
            <?php 
              }
              ?>
          </div>
        </div>
      </div>
    </div>
  </section>
