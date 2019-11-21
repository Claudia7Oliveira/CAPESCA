<div class="container-fluid">
  <div class="row mb-2">
     <div class="col-sm-6">
     </div>
  </div>
</div>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Alterar usuario:</h3>
          </div>
          <div class="card-body">
            <?php
             echo validation_errors('<div class="alert alert-danger">','</div>');
             foreach($usuarios as $usuario){
             echo form_open('admin/usuarios/salvar_alteracoes/'.md5($usuario->id).'/'.$usuario->user);

          
            ?>
             <div class="form-group">
                     <label id="txt-nome">Nome do Usuário</label>
                     <input type="text" id="txt-nome" name="txt-nome" class="form-control" placeholder="Digite o nome do usuário..." value="<?php echo $usuario->nome ?>">
             </div>
              <div class="form-group">
                     <label id="txt-email">Email</label>
                     <input type="text" id="txt-email" name="txt-email" class="form-control" placeholder="Digite o email do usuário..." value="<?php echo $usuario->email ?>">
             </div>
              
               <div class="form-group">
                     <label id="txt-user">User</label>
                     <input type="text" id="txt-user" name="txt-user" class="form-control" placeholder="Digite o user do usuário..." value="<?php echo $usuario->user ?>">
             </div>
               <div class="form-group">
                     <label id="txt-senha">Senha</label>
                     <input type="password" id="txt-senha" name="txt-senha" class="form-control">
             </div>
               <div class="form-group">
                     <label id="txt-confir-senha">Confirmar Senha</label>
                     <input type="password" id="txt-confir-senha" name="txt-confir-senha" class="form-control">
             </div>
             <input type="hidden" name="txt-id" id="txt-id" value="<?php echo $usuario->id ?>">
             <button type="submit" class="btn btn-success float-right">Atualzar</button>
            <?php
              }
            echo form_close();
            ?>
          </div>
        </div>
      </div>




     
    </div>
  </section>