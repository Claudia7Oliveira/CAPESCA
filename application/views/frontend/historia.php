<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Nossa história :</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
  <div class="container" style="text-align: center;">
 

        <section id="general-template" class="doc" >
          <div></div>
          <?php 
          foreach($publicacoes as $post){
          ?>
          <div class="page-header">
            <h3><?php echo $post->titulo ?></h3>
            <h4><?php echo $post->subtitulo ?></h4>

          </div>
          <style>
          img{ 
              
           }
          </style>
          <?php
           if($post->img == 1){
           $fotopub = base_url("assets/frontend/img/historia/".md5($post->id).".jpg");
          ?>
          <img class="img-responsive" src="<?php echo $fotopub ?>" alt="" style="width: 800px;">
          <hr>
          <?php
          }
          ?> 
          <p>
              <?php echo $post->conteudo ?>
          </p>
        </section>
        <?php
          }
          ?>
      </div>
    </div>

  
  </div>