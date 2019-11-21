 <section id="subintro">
   <div class="jumbotron subhead" id="overview">
     <div class="container">
       <div class="row">
         <div class="span12">
           <div class="centered">
             <h3>Nossos ex-diretores</h3>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>


 <section id="maincontent">
    <div class="container">
      
      <div class="row">
        <ul class="portfolio-area da-thumbs">
          <?php 
          foreach($publicacoes as $post){
          ?>
          <li class="portfolio-item2" data-id="id-0" data-type="web">
            <div class="span4">
              <div class="thumbnail">

                <div class="image-wrapp">
                   <?php
                   if($post->img == 1){
                   $fotopub = base_url("assets/frontend/img/exdiretoria/".md5($post->id).".jpg");
                  ?>
                  <img class="img-responsive" src="<?php echo $fotopub ?>" alt="">
                  <hr>
                  <?php
                  }
                  ?> 
                  <article class="da-animate da-slideFromRight" style="display: block;">
                    <h4><?php echo $post->titulo ?></h4>
                    <h4><?php echo $post->data ?></h4> <!--assim pega só o ano do db -->
                    
                  </article>
                </div>
                <?php 
                }
                 ?>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
