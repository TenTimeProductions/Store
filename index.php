<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Dashboard | FM Group - TenTimesProductions</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/excite-bike/jquery-ui.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="public/css/icons.css">
    <link rel="stylesheet" href="public/css/basic.css">
    <link rel="stylesheet" href="public/css/main.css">
</head>
<body>
    <header>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="logo"><img src="" alt="logo" />
                        </div>
                    </div>
                    <div class="col-sm-3 pull-right">
                        <div class="login">
                            <a href="#" class="texto"><span class="icon-icomoon icon-person-outline"></span>
                        </div>Login</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="container">
        <!--BARRA DE PESQUISA-->
        <div class="row search">
            <div class="form-group col-sm-3 col-sm-offset-9 alinhar">
                <div class="icon-addon addon-md">
                    <input type="text" placeholder="Search" class="form-control" id="search" name="search">
                    <label for="search" class="icon-icomoon icon-search" rel="tooltip" title="email"></label>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <ul class="nav nav-pills nav-stacked sidebar-menu" data-spy="affix" data-offset-top="90">
                <li>
                    <span class="menu-topic">General</span>
                </li>
                <li class="item-menu" role="presentation" class="active">
                    <a href="#home" data-toggle="tab" data-url="dashboard.php">Home</a>
                </li>
                <li class="item-menu" role="presentation">
                    <a href="#profile" data-toggle="tab" data-url="user-info.php">Profile</a>
                </li>
                <li class="item-menu" role="presentation">
                    <a href="#mensagens" data-toggle="tab" data-url="messages.php">Messages</a>
                </li>

                <hr>

                <li>
                    <span class="menu-topic">Administrador</span>
                </li>
                <li class="item-menu" role="presentation">
                    <a href="#morestuff" data-toggle="tab">More Stuff</a>
                </li>
                <li class="item-menu" role="presentation">
                    <a href="#bla2" data-toggle="tab">More Stuff</a>
                </li>

                <hr>

                <li>
                    <span class="menu-topic">Vendedor</span>
                </li>
                <li class="item-menu" role="presentation">
                    <a href="#morestuff" data-toggle="tab">More Stuff</a>
                </li>
                <li class="item-menu" role="presentation">
                    <a href="#bla2" data-toggle="tab">More Stuff</a>
                </li>

                <hr>

                <li>
                    <span class="menu-topic">Cliente</span>
                </li>
                <li class="item-menu" role="presentation">
                    <a href="#morestuff" data-toggle="tab">More Stuff</a>
                </li>
                <li class="item-menu" role="presentation">
                    <a href="#bla2" data-toggle="tab">More Stuff</a>
                </li>

                <hr>

                <li>
                    <span class="menu-topic">2015 © TenTimesProductions</span>
                </li>
            </ul>
        </div>
        <div class="col-sm-10">
            <div class="tab-content border">
                <!--CONTEUDO -->
                <!-- 1º TAB-->
                <div class="tab-pane fade in active" id="home"></div>
                <!-- 2º TAB-->
                <div class="tab-pane fade" id="profile"></div>
                <!-- 3º TAB-->
                <div class="tab-pane fade" id="mensagens"></div>
                <!-- 4º TAB-->
                <div class="tab-pane fade" id="morestuff">
                    <div class="col-sm-11 col-sm-offset-1">
                        <!-- UMA TAB-->
                        <div class="row">
                            <div class="col-sm-12 header2">
                                <h3>STUFF</h3>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-13">
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest compiled and minified JavaScript -->
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/js/main.js"></script>
</body>

</html>
