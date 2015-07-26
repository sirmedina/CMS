<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CowdeMS - Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css">

    body{
      background: #0b131b;
      color: #fff;
    }

    h1,h2{
      text-align: center;
    }
    h1{
      color: #e02d4d;
      font-size: 5em;
      font-family: 'Montserrat', serif;
      font-weight: 800;
      margin: 1em 0;
    }
    @media screen and (max-width: 420px){
      h1{
        font-size: 16vw;
      } 
    }
    input:focus{
      outline: solid 2px white;
    }
    .form-group{
      margin: 1em auto;
      float: none;
    }
    .form-control{margin: 0 0 15px 0;}
    #footer{
      color: #fff;
      text-align: center;
      width: 100%;
      position: absolute;
      bottom: 1em;
    }
    .btn{background: #e02d4d;}
    .btn:hover{background: #f35;color: #ddd;}

  </style>
  </head>
  <body>

    <div class="container">
      <h1>CowdeMS</h1>
      <h2>Login</h2>

      <form class="form-group col-xs-10 col-sm-5 col-ms-4 col-lg-4">

        <input type="text" class="form-control" id="usr" placeholder="Usuário">
        <input type="password" class="form-control" id="pwd" placeholder="Senha">
        <button type="button" class="btn btn-block">Entrar</button>
      </form>
    </div>
    
    <div id="footer">&copy 2015 - Desenvolvido por Cowde - Todos os direitos reservados</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>