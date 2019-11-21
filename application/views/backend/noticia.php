<section class="content">
    <div class="row">
      <div class="col-md-12"> 
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Adicionar noticia</h3>
          </div>
            <div class="card-body">
            <?php
             echo validation_errors('<div class="alert alert-danger text-center">','</div>');
             echo form_open_multipart('admin/noticia/inserir');
            ?>
            <div class="form-group">
                <label for="inputName">Titulo</label>
                <input type="text" id="txt-nome" name="txt-titulo" class="form-control" placeholder="Digite o titulo" value="<?= set_value('txt-titulo') ?>">
            </div>
            <div class="form-group">
                <label for="inputName">Subtitulo</label>
                <input type="text" id="txt-subtitulo" name="txt-subtitulo" class="form-control" placeholder="Digite o titulo" value="<?= set_value('txt-subtitulo') ?>">
            </div>
            <div class="form-group">
              <label for="inputStatus">Conteudo</label>
               <textarea id="txt-conteudo" name="txt-conteudo" class="form-control"><?= set_value('txt-conteudo') ?> </textarea>
            </div>
            <div class="form-group">
              <label for="inputStatus">Data</label>
               <input type="datetime-local" id="txt-data" name="txt-data" class="form-control" placeholder="Digite o data..." value="<?= set_value('txt-data') ?>">
            </div>
            <!--adiciona a imagem -->
            <div class="form-group">
              <label for="input_image">Imagem</label>
              <input type="file" id="input_image" class="form-control-file" name="input_image" accept="image/jpeg" />
            </div>
           <button type="submit" class="btn btn-success float-right">Cadastrar</button>
            <?php
            echo form_close();
            ?>  
        </div>    
  </section>
  <section class="content">
   <div class="col-md-12">
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Alterar noticias existentes:</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
          </div>
         <div class="card-body">
            <div class="panel-body">
                  <div class="row">
                      <div class="col-lg-12">
                      <style>
                      img{ 
                          width: 240px;
                       }
                      </style>
                         <?php
                          $this->table->set_heading("Foto","Titulo","Ultima modificação","Alterar","Excluir");
                          foreach($publicacoes as $post){
                              $titulo= $post->titulo;
                              if($post->img == 1){
                              $fotopub = img("assets/frontend/img/noticia/".md5($post->id).".jpg");
                              }else{
                              $fotopub= img("assets/frontend/img/semFoto2.png");
                              }
                              $data= postadoem($post->data);
                              $alterar= anchor(base_url('admin/noticia/alterar/'.md5($post->id)),'<i class="fa fa-refresh fa-fw"></i> Alterar');
                              $excluir= anchor(base_url('admin/noticia/excluir/'.md5($post->id)),'<i class="fa fa-remove fa-fw"></i> Excluir');
                              $this->table->add_row($fotopub,$titulo,$data,$alterar,$excluir);
                          }
                          $this->table->set_template(array(
                              'table_open' => '<table class="table table-striped">'
                              ));
                          echo $this->table->generate();
                          echo "<div class='pagination'".$links_paginacao."</div>";

                          ?>

                          <?php
                          

                         ?>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </section>
</body>