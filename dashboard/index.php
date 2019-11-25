<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- importando meu proprio css e o font-awesome -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="flex">
        <div class="w15">
            <div class="sidebar ">
                <div class="topo">
                    <h3>JL {Developer}</h3>
                </div>
                <!-- topo -->
                <div class="menu">
                    <ul>
                        <li><i class="fas fa-clipboard-list"></i><a href=""> PAINEL</a></li>
                        <li><i class="fas fa-square"></i><a href=""> CONTEUDO</a></li>
                        <li><i class="fas fa-percentage"></i><a href=""> ESTATISTICAS</a></li>
                        <li><i class="fas fa-desktop"></i><a href=""> CONFIGURAÇÕES</a></li>
                        <li><i class="fas fa-question"></i><a href=""> DUVIDAS</a></li>
                        <li><i class="fas fa-users"></i><a href=""> USUARIOS</a></li>
                    </ul>
                </div>
            </div>
            <!-- sidebar -->
        </div>
        <!-- w15 -->
        <div class="w85">
            <div class="main-content">
                <header>
                    <div class="flex">
                        <div class="icone-alerta  w84">
                            <i class="fas fa-bell"></i>
                            <p>2</p>
                        </div>
                        <div class="pesquisa-campo ">
                            <div class="icone-pesquisa">
                                <i class="fas fa-search"></i>
                            </div>
                            <form><input type="text"></form>
                        </div>
                        <!-- pesquisa campo -->
                    </div>
                    <!-- flex -->
                </header>
                <!--header -->
            </div>
            <!-- main content -->
        </div>
        <!-- w85  -->
    </div>
    <!-- flex -->








    <script src="js/jquery.js"></script>
    <script src="js/functions.js"></script>
</body>

</html>