<div class="container-fluid">
  <div class="row mb-2">
     <div class="col-sm-6">
     </div>
  </div>
</div>
    <?php
     foreach($publicacoes as $post){
    ?>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Alterar diretoria:</h3>
        </div>
        <div class="card-body">
          <style type="text/css"> img{width: 400px;}; </style>
          <div class="panel-body">
            <div class="row" style="padding-bottom: 10px;">
              <div class="col-lg-8 col-lg-offset-1">
                <?php 
                if($post->img == 1){
                  echo img("assets/frontend/img/diretoria/".md5($post->id).".jpg");
                }else{
                  echo img("assets/frontend/img/semFoto2.png");
                }
                ?>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <?php
                  $divopen= '<div class="form-group">';
                  $divclose= '</div>';
                    echo form_open_multipart('admin/diretoria/nova_foto');
                    echo form_hidden('id', md5($post->id));
                    echo $divopen;
                   $imagem= array('name' => 'userfile', 'id' => 'userfile', 'class' => 'form-control');
                    echo form_upload($imagem);
                    echo $divclose;
                    echo $divopen;
                  $botao= array('name' => 'btn_adicionar', 'id' => 'btn_adicionar', 'class' => 'btn btn-default','value' => 'Adicionar nova Imagem');
                    echo form_submit($botao);
                    echo $divclose;
                    echo form_close();
                }
                ?>
              </div>
            </div>
          </div>
        </div>
       <div class="card-body">
        <?php
         echo validation_errors('<div class="alert alert-danger">','</div>');
         echo form_open('admin/diretoria/salvar_alteracoes/'.md5($post->id).'/'.$post->user);
        ?>
               <div class="form-group">
                   <label for="inputName">Nome :</label>
                   <input type="text" id="txt-nome" name="txt-titulo" class="form-control" placeholder="Digite o titulo" value="<?php echo set_value('txt-titulo') ?>">
               </div>
               <div class="form-group">
                 <label for="inputStatus">Cargo :</label>
                  <input id="txt-conteudo" name="txt-conteudo" class="form-control"><?php echo set_value('txt-conteudo') ?> 
               </div>

               <div class="form-group">
                 <label fo
                 r="inputStatus">Data :</label>
                  <input type="datetime-local" id="txt-data" name="txt-data" class="form-control" placeholder="Digite o data..." value="<?php echo set_value('txt-data') ?>">
               </div>
               
              <input type="hidden" name="txt-id" value="<?php echo $post->id;  ?>">
              <button type="submit" class="btn btn-success float-right">Cadastrar</button>
               <?php
               echo form_close();
               ?>
             </div>
           </div>
         </div>
       </div>
      </div>
    </div>
  </div>
</section>

         