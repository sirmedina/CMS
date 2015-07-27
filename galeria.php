<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CowdeMS - AdminPanel</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <!-- Easy Tooltip -->
    <script src="js/easy-tooltip.js" type="text/javascript"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CowdeMS</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {USUÁRIO} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-fw fa-user"></i> Usuários</a></li>
                        <!-- <li><a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a></li> -->
                        <li><a href="bootstrap-grid.php"><i class="fa fa-fw fa-gear"></i> Configurações</a></li>

                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Sair</a></li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="index.php"><i class="fa fa-fw fa-bar-chart-o"></i> Início</a></li>
                    <li><a href="produtos.php"><i class="fa fa-fw fa-tags"></i> Produtos</a></li>
                    <li class="active"><a href="galeria.php"><i class="fa fa-fw fa-picture-o"></i> Galeria</a></li>
                    <li><a href="configuracoes.php"><i class="fa fa-fw fa-wrench"></i> Configurações</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Galeria <small>Painel Administrativo</small></h1>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-bar-chart-o"></i><a href="index.php"> Início</a></li>
                            <li class="active"><i class="fa fa-picture-o"></i> Galeria</li>
                        </ol>
                    </div>
                    </div>
                <div class="row">

                    <table class="table-hover table sortable-theme-bootstrap" data-sortable>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Categoria</th>
                                <th data-sortable="false">Thumb</th>
                                <th data-sortable="false">Zoom</th>
                                <th data-sortable="false">Alterar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Marca da Yooou</td>
                                <td>Branding</td>
                                <td><a href="#" class="screenshot" rel="http://douglasmedina.com/galeria/img/portfolio/brand2.jpg" title="Thumb">ver</a></td>
                                <td><a href="#" class="screenshot" rel="http://douglasmedina.com/galeria/img/portfolio/brand-2.jpg" title="Zoom">ver</a></td>
                                <td><a class="badge">Editar</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Campanha da Pastorini Spielzerg</td>
                                <td>Manipulação</td>
                                <td><a href="#" class="screenshot" rel="http://douglasmedina.com/galeria/img/portfolio/manipula2.jpg" title="Thumb">ver</a></td>
                                <td><a href="#" class="screenshot" rel="http://douglasmedina.com/galeria/img/portfolio/manipula-2.jpg" title="Zoom">ver</a></td>
                                <td><a class="badge">Editar</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Campanha para Agência Bratus</td>
                                <td>Manipulação</td>
                                <td><a href="#" class="screenshot" rel="http://douglasmedina.com/galeria/img/portfolio/manipula1.jpg" title="Thumb">ver</a></td>
                                <td><a href="#" class="screenshot" rel="http://douglasmedina.com/galeria/img/portfolio/manipula-1.jpg" title="Zoom">ver</a></td>
                                <td><a class="badge">Editar</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Tolpa - Nova Marca</td>
                                <td>Branding</td>
                                <td><a href="#" class="screenshot" rel="http://douglasmedina.com/galeria/img/portfolio/brand1.jpg" title="Thumb">ver</a></td>
                                <td><a href="#" class="screenshot" rel="http://douglasmedina.com/galeria/img/portfolio/brand-1.jpg" title="Zoom">ver</a></td>
                                <td><a class="badge">Editar</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>QOD - Novo Site</td>
                                <td>UI/UX</td>
                                <td><a href="#" class="screenshot" rel="http://douglasmedina.com/galeria/img/portfolio/web1.jpg" title="Thumb">ver</a></td>
                                <td><a href="#" class="screenshot" rel="http://douglasmedina.com/galeria/img/portfolio/web-1.jpg" title="Zoom">ver</a></td>
                                <td><a class="badge">Editar</a></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Mockup Isométrico</td>
                                <td>UI/UX</td>
                                <td><a href="#" class="screenshot" rel="http://douglasmedina.com/galeria/img/portfolio/web2.jpg" title="Thumb">ver</a></td>
                                <td><a href="#" class="screenshot" rel="http://douglasmedina.com/galeria/img/portfolio/web-2.jpg" title="Zoom">ver</a></td>
                                <td><a class="badge">Editar</a></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Aplicativo Weply</td>
                                <td>UI/UX</td>
                                <td><a href="#" class="screenshot" rel="http://douglasmedina.com/galeria/img/portfolio/mobile3.jpg" title="Thumb">ver</a></td>
                                <td><a href="#" class="screenshot" rel="http://douglasmedina.com/galeria/img/portfolio/mobile-3.jpg" title="Zoom">ver</a></td>
                                <td><a class="badge">Editar</a></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Ilustração 3d</td>
                                <td>Ilustração</td>
                                <td><a href="#" class="screenshot" rel="http://douglasmedina.com/galeria/img/portfolio/illustra1.jpg" title="Thumb">ver</a></td>
                                <td><a href="#" class="screenshot" rel="http://douglasmedina.com/galeria/img/portfolio/illustra.jpg" title="Zoom">ver</a></td>
                                <td><a class="badge">Editar</a></td>
                            </tr>
                        </tbody>
                    </table>
                
                </div>
            </div>
            <!-- /.container-fluid -->

        </div><!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sortable.min.js"></script>
    <link rel="stylesheet" href="css/sortable-theme-bootstrap.css" />
</body>
</html>
