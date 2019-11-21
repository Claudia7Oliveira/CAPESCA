<div class="container-fluid">
  <div class="row mb-2">
     <div class="col-sm-6">
     </div>
  </div>
</div>

  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Adicionar usuarios :</h3>
          </div>
            <div class="card-body">
            <?php
             echo validation_errors('<div class="alert alert-danger">','</div>');
             echo form_open('admin/usuarios/inserir');
            ?>
            <div class="form-group">
                <label for="inputName">Nome :</label>
                <input type="text" id="txt-nome" name="txt-nome" class="form-control" placeholder="Digite o nome do usuário..." value="<?php echo set_value('txt-nome') ?>">
            </div>
            <div class="form-group">
              <label for="inputDescription">Email :</label>
              <input type="text" id="txt-email" name="txt-email" class="form-control" placeholder="Digite o email do usuário..." value="<?php echo set_value('txt-email') ?>">
            </div>
             
            <div class="form-group">
              <label for="inputStatus">Nome de usuário :</label>
                <input type="text" id="txt-user" name="txt-user" class="form-control" placeholder="Digite o user do usuário..." value="<?php echo set_value('txt-user') ?>">
            </div>
            <div class="form-group">
              <label for="inputClientCompany">Senha :</label>
              <input type="password" id="txt-senha" name="txt-senha" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputProjectLeader">Confirmar senha :</label>
              <input type="password" id="txt-confir-senha" name="txt-confir-senha" class="form-control">
            </div>
          </div>
          <!-- /.card-body -->

           <button type="submit" class="btn btn-success float-right">Cadastrar</button>
            <?php
            echo form_close();
            ?>
           
        </div>
        
         
        <!-- /.card -->
      </div>
      <div class="col-md-6">
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Alterar usuários existentes:</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
           <div class="row">
              <div class="col-lg-12">
              <style>
              img{ 
                  width: 60px;
               }
              </style>
                 <?php
                  $this->table->set_heading("Nome do Usuário","Email","Alterar","Excluir");
                  foreach($usuarios as $usuario){

                      $nomeuser= $usuario->nome;
                      $emailuser= $usuario->email;
                      
                      $alterar= anchor(base_url('admin/usuarios/alterar/'.$usuario->id),'<i class="fa fa-refresh fa-fw"></i> Alterar');
                      $excluir= anchor(base_url('admin/usuarios/excluir/'.$usuario->id),'<i class="fa fa-remove fa-fw"></i> Excluir');
                      $this->table->add_row($nomeuser,$emailuser,$alterar,$excluir);
                  }
                  $this->table->set_template(array(
                      'table_open' => '<table class="table table-striped">'
                      ));
                  echo $this->table->generate();
                 ?>
              </div>
          </div>
         
        </div>
        
      </div>
    </div>
  </section>

</body>
