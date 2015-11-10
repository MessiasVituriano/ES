
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
  <div class = "navbar-fixed">  
  <nav>
  <div class="nav-wrapper blue" >
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="login.php">Login</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>
  </div>
    <div class="container">
        <div class="row z-depth-2">
          <div class="col m10 offset-m1 s12">
          <h1 class="center-align">Login</h1>
        <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s4 m4 l6 offset-s4">
              <input id="email" type="email" class="validate">
              <label for="email">E-mail</label>
            </div>
          </div>
          <div class = "row">
              <div class="input-field col s4 m4 l6 offset-s4">
              <input id="password" type="password" class="validate">
              <label for="password">Senha</label>
            </div>
          </div>
          <div class=" col s6 m3">
          <button class="btn waves-effect waves-light" type="submit" name="login" >
            Login
            <i class="mdi-action-lock-open right"></i>
            </button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <?php
      include ("footer.php");
  ?>
    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>

  </html>
        