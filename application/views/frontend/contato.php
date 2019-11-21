  <section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Contatos</h3>
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



          <div class="spacer30"></div>

          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <h4>Sugestões? Duvidas? <br> Envie uma mensagem para nós, responderemos o mais rápido possivel.</h4>
           <?php
            if($enviado == 1){
               echo '<div class="alert alert-success"> Email enviado! </div>';
            }else if($enviado == 2){
               echo '<div class="alert alert-warning"> Email não enviado! </div>';
            }
            ?>

            <div class="row">
                    <!-- Formulario de contato -->
                    <?php 
                     echo validation_errors('<div class="alert alert-danger">','</div>');

                    $atributosForm = array('name' => 'formulario_contato', 'id'=> 'formulario_contato');
                    echo form_open(base_url('contato/enviar_mensagem'),$atributosForm);

                    $atribNome= array('name'=>'txtNome','id'=>'txtNome','class'=>'form-control','placeholder'=>'Digite seu Nome','value' => set_value('txtNome'));
                    echo("<div class='form-group'>").
                    form_label("Nome",'txtNome').
                    form_input($atribNome).
                    ("</div>");

                    $atribEmail= array('name'=>'txtEmail','id'=>'txtEmail','class'=>'form-control','placeholder'=>'Digite seu Email','value' => set_value('txtEmail'));
                    echo("<div class='form-group'>").
                    form_label("Email",'txtEmail').
                    form_input($atribEmail).
                    (" </div>");

                    $atribMsg= array('name'=>'txtMsg','id'=>'txtMsg','class'=>'form-control','placeholder'=>'Digite sua mensagem','value' => set_value('txtMsg'));
                    echo("<div class='form-group'>").
                    form_label("Mensagem",'txtMsg').
                    form_textarea($atribMsg).
                    (" </div>");

                    ?>

                     <button class="btn btn-color btn-rounded" type="submit"> Enviar mensagem </button>
                  <?php
                  //caso n funcione APAGAR ASSIM QUE POSSIVEL
                   // echo form_submit('btn_enviar','Enviar Mensagem');
                    echo form_close();

                    ?>
              <!-- como faz isso mesmo -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3478.0728063032507!2d-49.731397685469645!3d-29.33886198214452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDIwJzE5LjkiUyA0OcKwNDMnNDUuMiJX!5e0!3m2!1spt-BR!2sbr!4v1572497014879!5m2!1spt-BR!2sbr" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            
          </form>
      

        </div>
      </div>
    </div>
  </section>