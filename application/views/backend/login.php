<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <p>Login</p>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
     
     <?php
         echo validation_errors('<div class="fas fa-exclamation-triangle text-danger">','</div>');
         echo form_open('admin/usuarios/login');
     ?>
        <fieldset>
            <div class="form-group">
                <input class="form-control" placeholder="Usuário" name="txt-user" type="text" autofocus>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Senha" name="txt-senha" type="password" value="">
            </div>
            <button class="btn btn-lg btn-success btn-block">Entrar</button>
        </fieldset>
        <?php
            echo form_close();
        ?>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>


</body>

