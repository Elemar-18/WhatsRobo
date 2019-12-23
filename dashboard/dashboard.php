<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel Administrativo</title>
    <?php require "../links/links_css.php"; ?>
    <link rel="stylesheet" href="../css/dashboard.css" type="text/css">
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark primary-color">

        <!-- Navbar brand -->

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Whats<b class="logo">Robô</b>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../dashboard/dashboard.php"><i class="fa fa-home"></i>Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

                <!-- Dropdown Leads-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-address-book"></i>Leads</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../leads/cadLead.php"><i class="fas fa-plus-circle"></i>Cadastrar Leads</a>
                        <a class="dropdown-item" href="../leads/visLead.php"><i class="fas fa-eye"></i>Visualizar Leads</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-edit"></i>Editar Leads</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-trash"></i>Remover Leads</a>
                    </div>
                </li>

                <!-- Dropdown Origem dos Leads-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i>Origem Leads</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../origemlead/cadOrigemLead.php"><i class="fas fa-plus-circle"></i>Cadastrar Origem dos Leads</a>
                        <a class="dropdown-item" href="../origemlead/visOrigemLead.php"><i class="fas fa-eye"></i>Visualizar Origem dos Leads</a>
                        <a class="dropdown-item" href="../origemlead/edtOrigemLead.php"><i class="fas fa-edit"></i>Editar Origem dos Leads</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-trash"></i>Remover Origem dos Leads</a>
                    </div>
                </li>

                <!-- Dropdown Grupo dos Leads-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users"></i>Grupo Leads</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../grupolead/cadGrupoLead.php"><i class="fas fa-plus-circle"></i>Cadastrar Grupo dos Leads</a>
                        <a class="dropdown-item" href="../grupolead/visGrupoLead.php"><i class="fas fa-eye"></i>Visualizar Grupo dos Leads</a>
                        <a class="dropdown-item" href="../grupolead/edtGrupoLead.php"><i class="fas fa-edit"></i>Editar Grupo dos Leads</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-trash"></i>Remover Grupo dos Leads</a>
                    </div>
                </li>

                <!-- Dropdown Mensagens-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-comments"></i>Mensagens</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../mensagem/cadMensagem.php"><i class="fas fa-plus-circle"></i>Cadastrar Mensagens</a>
                        <a class="dropdown-item" href="../mensagem/visMensagem.php"><i class="fas fa-eye"></i>Visualizar Mensagens</a>
                        <a class="dropdown-item" href="../mensagem/edtMensagem.php"><i class="fas fa-edit"></i>Editar Mensagens</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-trash"></i>Remover Mensagens</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-bullseye"></i>Realizar Disparo
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-file-pdf"></i>Relatórios
                    </a>
                </li>

            </ul>
            <!-- Links -->
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i> Perfil</a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                        <h6 class="text-center my-1">Olá, <?php echo $_SESSION['nomecompleto']?></h6>
                        <a class="dropdown-item" href="#"><i class="fas fa-user-circle"></i>Minha Conta</a>
                        <a class="dropdown-item" href="../login/logout.php"><i class="fas fa-sign-out-alt"></i>Sair</a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Collapsible content -->

    </nav>
    <!--/.Navbar-->
</body>
<?php require "../links/links_js.php"; ?>

</html>