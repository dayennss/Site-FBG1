   <!DOCTYPE html>
   <html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <title>PÁGINA DE ENVIO </title>
      <link rel="icon" href="img/cap.png">
       <script src="https://use.fontawesome.com/00ee7aa44a.js"></script>


      <style type="text/css">
         h1 { text-transform: uppercase; text-align: center; font-family: monospace}
         .fa-check {color: yellowgreen}
         .container {text-align: center; }
         a {text-decoration: none; background: rgba(0,0,0, .3)  ; padding: 15px; margin-top: 10px;color: #fff;font-weight: 700; border-radius: 20px;
         text-transform: uppercase;}
      </style>

   </head>
   <body>

     <?php

   $assunto = "FBG1";

   $corpo      = "
      Nome: "        .$_POST['nome']."
      Email: "       .$_POST['email']."
      Telefone: "    .$_POST['tel']."
      Mensagem: "    .$_POST['mensagem']."
   ";

   mail('dayennesouza40@gmail.com', $assunto, $corpo , 'From: dayenes@unigranrio.br');   
   ?>
     <h1> seus dados foram enviados com sucesso <i class="fa fa-check" aria-hidden="true"></i>
    </h1> <br>
      <div class="container">
        <a href="index.php" class="backsite"> clique para voltar ao site  </a>
      </div>

   </body>
   </html>






