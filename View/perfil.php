<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PESHI</title>
    <link href="../Resources/css/styles_temp.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</head>
<?php session_start(); ?>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-green py-3">
        <a class="navbar-brand" href="Membros.php"><img class="img-responsive" style="height: 45px"
                src="../resources/img/logo.png" alt=""></a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->

        <!-- Navbar-->
        <a class="nav-link text-white"    href="perfil.php"><i class="fas fa-user fa-fw"></i></a>

    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Inicio</div>
                        <a class="nav-link" href="Membros.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Resumo
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Familia
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="Membros.php">Ver Membros</a>
                                <a class="nav-link" href="addMembro.php">Add Membro</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Dicas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse"
                                    data-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Para Voce
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                    data-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="#">Mercado</a>
                                        <a class="nav-link" href="#">Luz</a>
                                        <a class="nav-link" href="#">Agua</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-toggle="collapse"
                                    data-target="#pagesCollapseError" aria-expanded="false"
                                    aria-controls="pagesCollapseError">
                                    Todas
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                                    data-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="#">Mercado</a>
                                        <a class="nav-link" href="#">Luz</a>
                                        <a class="nav-link" href="#">Agua</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="relatorio.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Relatorio
                        </a>
                        <a class="nav-link" href="landingpage.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Sair
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logado como:</div>
                    <p class="nowrap"><?php echo $_SESSION['email']  ?></p> 
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content" class="bg-light">


            <div class="container-fluid pt-3 bg-light">
                <h1 class="display-4 ">Perfil</h1>
                <hr class="hr-green mb-5">

            </div>

            <div class="container">
                <!-- <div class="mt-5">
                    <div class="row bg-white">
                        <div class="col-xl-3 col-lg-5 rounded d-flex justify-content-center mt-4">
                            <img src="../Resources/img/homem.png" style="height: 250px;" class="img-fluid">
                        </div>

                        <div class="col container">
                            <p class="display-4 my-3 text-center">Meu Perfil</p>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Endereco de email:</label>
                                <input type="email" class="form-control" value="ian ga" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Senha</label>
                                <input type="password" class="form-control" value="***********"
                                    id="exampleInputPassword1" disabled>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Genero:</label>
                                    <input type="text" class="form-control" id="inputEmail4"  value="ian ga" disabled>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Tipo:</label>
                                    <input type="text" class="form-control" id="inputPassword4"  value="ian ga"
                                    disabled>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> -->
                <?php include("perfilshow.php") ?>


            </div>



            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="../Resources/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../Resources/assets/demo/chart-area-demo.js"></script>
    <script src="../Resources/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="../Resources/assets/demo/datatables-demo.js"></script>
</body>

</html>