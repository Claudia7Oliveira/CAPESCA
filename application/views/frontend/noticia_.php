
 <section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row"> 
          <div class="span12">
            <div class="centered">
              <h3>Noticia :</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="maincontent">
    <div class="container">
      <div class="row">
         <div class="span2">
        </div> 
        <div class="span8">
          <!-- start article 1 -->
         <article class="blog-post">
          <?php 
          foreach($publicacoes as $post){
          ?>
            <div class="row">
              <div class="span3">
                <div class="post-image">
                    
                   <?php
                   if($post->img == 1){
                   $fotopub = base_url("assets/frontend/img/noticia/".md5($post->id).".jpg");
                  ?>
                  <img class="img-responsive" src="<?php echo $fotopub ?>" alt="">
                  <hr>
                  <?php
                  }
                  ?>   
                </div>
              </div>
              <div class="span5">
                <ul class="post-meta">
                  <h3><?php echo $post->titulo ?></h3>
                 <p><span class="glyphicon glyphicon-time"></span> <?php echo postadoem($post->data) ?></p>

                </ul>
                <div class="clearfix">
                </div>
               <p>
                <?php echo $post->subtitulo ?>
               </p>
               <p>
                <?php echo $post->conteudo ?>
               </p>      
              </div>
            </div>
          </article>
          <?php
             }               
            ?>
        </div>
    <!--end: Accordion -->
        </div>
      </div>
    </div>
  </section>
