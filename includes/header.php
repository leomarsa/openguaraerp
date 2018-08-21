<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Open Guara ERP</title>

        <!-- Bootstrap Core CSS -->
        <link  rel="stylesheet" href="css/bootstrap.min.css"/>

        <!-- MetisMenu CSS -->
        <link href="js/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/sb-admin-2.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="js/jquery.min.js" type="text/javascript"></script> 

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true ) : ?>
                <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="">Open Guara ERP</a>
                    </div>
                    <!-- /.navbar-header -->

                    <ul class="nav navbar-top-links navbar-right">
                        <!-- /.dropdown -->

                        <!-- /.dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil do Usuário</a>
                                </li>
                                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configurações</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                                </li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <!-- /.dropdown -->
                    </ul>
                    <!-- /.navbar-top-links -->

                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
                                <li>
                                    <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Painel</a>
                                </li>

                                <li <?php echo (CURRENT_PAGE =="customers.php" || CURRENT_PAGE=="add_customer.php") ? 'class="active"' : '' ; ?>>
                                    <a href="#"><i class="fa fas fa-address-card"></i> Pessoas<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="customers.php"><i class="fa fa-list fa-fw"></i>Listar Cadastro</a>
                                        </li>
                                    <li>
                                        <a href="add_customer.php"><i class="fa fa-plus fa-fw"></i>Novo Cadastro</a>
                                    </li>
                                    </ul>
                                </li>
                               
                                <li <?php echo (CURRENT_PAGE =="#" || CURRENT_PAGE=="#") ? 'class="active"' : '' ; ?>>
                                    <a href="#"><i class="fa fas fa-cart-arrow-down"></i> Vendas<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#"><i class="fa fa-list fa-fw"></i>Listar Vendas</a>
                                        </li>
                                    <li>
                                        <a href="#"><i class="fa fa-plus fa-fw"></i>Novo Vendas</a>
                                    </li>
                                    </ul>
                                </li>

                                <li <?php echo (CURRENT_PAGE =="#" || CURRENT_PAGE=="#") ? 'class="active"' : '' ; ?>>
                                    <a href="#"><i class="fa fas fa-cubes"></i> Produtos<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#"><i class="fa fa-list fa-fw"></i>Listar Cadastro</a>
                                        </li>
                                    <li>
                                        <a href="#"><i class="fa fa-plus fa-fw"></i>Novo Cadastro</a>
                                    </li>
                                    </ul>
                                </li>
                                <li <?php echo (CURRENT_PAGE =="#" || CURRENT_PAGE=="#.php") ? 'class="active"' : '' ; ?>>
                                    <a href="#"><i class="fa fas fa-briefcase"></i> Seviços<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#"><i class="fa fa-list fa-fw"></i>Listar Cadastro</a>
                                        </li>
                                    <li>
                                        <a href="#"><i class="fa fa-plus fa-fw"></i>Novo Cadastro</a>
                                    </li>
                                    </ul>
                                </li>

                                  <li <?php echo (CURRENT_PAGE =="#" || CURRENT_PAGE=="#") ? 'class="active"' : '' ; ?>>
                                    <a href="#"><i class="fa fas fa-calculator"></i> Financeiro<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#"><i class="fa fa-plus fa-fw"></i>Contas a Pagar</a>
                                        </li>
                                    <li>
                                        <a href="#"><i class="fa fa-plus fa-fw"></i>Contas a Receber</a>
                                    </li>
                                    </ul>
                                </li>
                                <li>

                                   <li <?php echo (CURRENT_PAGE =="#" || CURRENT_PAGE=="#") ? 'class="active"' : '' ; ?>>
                                    <a href="#"><i class="fa far fa-window-maximize"></i> Agenda<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                    <li>
                                            <a href="#"><i class="fa fa-list fa-fw"></i>Calendario de Eventos</a>
                                        </li>
                                    <li>
                                        <a href="#"><i class="fa fa-plus fa-fw"></i>Novo Evento</a>
                                    </li>
                                    </ul>
                                </li>

                                 <li <?php echo (CURRENT_PAGE =="#" || CURRENT_PAGE=="#") ? 'class="active"' : '' ; ?>>
                                    <a href="#"><i class="fa fas fa-phone"></i> CRM<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-plus fa-fw"></i>Ordem de Serviços</a>
                                </li>
                                    <li>
                                        <a href="#"><i class="fa fa-plus fa-fw"></i>Orçamentos</a>
                                    </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="admin_users.php"><i class="fa fa-users"></i> Usuários</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fas fa-server"></i> Configurações</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.sidebar-collapse -->
                    </div>
                    <!-- /.navbar-static-side -->
                </nav>
            <?php endif; ?>
            <!-- The End of the Header -->