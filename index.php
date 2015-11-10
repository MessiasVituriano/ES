
  <!DOCTYPE html>
  <html>
    <head>      
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    </head>
  <div class = "navbar-fixed">
  <nav>
  <div class="nav-wrapper blue">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="login.php">Login</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>
</div>
    <body>

  <div class="container">
      <div class="row z-depth-2">
        <div class="col m10 offset-m1 s12">
        <h1 class="center-align ">Formul&aacute;rio de inscri&ccedil;&atilde;o</h1>
      <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field m4 l6 col s6">
            <input  id="first_name" type="text" class="validate">
            <label for="first_name">Nome</label>
          </div>
          <div class="input-field m4 l6 col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Sobrenome</label>
          </div>
        </div>
        <div class="row">
          <div "input-field col s12">
            <input name = "sex" type="radio" id="fem" value = "fem" />
            <label for="fem">Feminino</label>
            <input name = "sex" type="radio" id="masc" value = "masc"/>
            <label for="masc">Maculino</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field m4 l6 col s6">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
          <div class="input-field m4 l6 col s6">
            <input id="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field m2 l4 col s4">
            <input id="rua" type="text" class="validate">
            <label for="rua">Rua</label>
          </div>
          <div class="input-field m2 l4 col s4">
            <input id="bairro" type="text" class="validate">
            <label for="bairro">Bairro</label>
          </div>
          <div class="input-field m2 l4 col s4">
            <input id="num" type="number" min = "1" class="validate">
            <label for="num">Numero</label>
          </div>  
        </div>
        <div class="row">
          <div class="input-field m4 l6 col s6">
            <input id="cidade" type="text" class="validate">
            <label for="cidade">Cidade</label>
          </div>
          <div class="input-field m4 l6 col s6">
            <input id="estado" type="text" class="validate">
            <label for="estado">Estado</label>
          </div>  
        </div>
        <div class="row">
          <div class="input-field m4 l6 col s12">
            <input id="telefone" type="text" class="validate">
            <label for="telefone">Telefone</label>
          </div>  
        </div>
        <div class="row">
          <button class="btn waves-effect waves-light blue" type="submit" name="action">Cadastrar
            <i class="material-icons md-48">person_add</i>
          </button>  
        </div>
      </form>
    </div>
  </div>
</div>
    <?php
      include ("footer.php");
    ?>
    </body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
      <script type="text/javascript"> 
      jQuery.noConflict();
      jQuery(function($){
         $("#telefone").mask("(099) 99999-9999");
         });
      </script> 
  </html>