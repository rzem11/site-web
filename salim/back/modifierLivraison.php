<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DC Admin - modifier</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="home.php">Lucid Dreamers</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <span class="badge badge-danger">9+</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <span class="badge badge-danger">7</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
            </li>
            <?php
                if(isset($_SESSION['user'])){
            ?>
            <h6><div style="color:#fff9;" class="mt-2"><?php echo 'Bonjour ' .$_SESSION['user'] ?></div></h6>
            <?php
                } 
                else{
            ?>
            <script>window.location="index.php";</script>
            <?php 
                }
            ?>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Login Screens:</h6>
                    <a class="dropdown-item" href="login.html">Login</a>
                    <a class="dropdown-item" href="register.html">Register</a>
                    <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Other Pages:</h6>
                    <a class="dropdown-item active" href="404.html">404 Page</a>
                    <a class="dropdown-item" href="blank.html">Blank Page</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="GestionLivraison.php">
                    <i class="fas fa-fw fa-box"></i>
                    <span>Gestion des livraisons</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="GestionLivreur.php">
                    <i class="fas fa-truck"></i>
                    <span>Gestion des livreurs</span></a>
            </li>
        </ul>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="home.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="GestionLivraison.php">Gestion des livraisons</a>
                    </li>
                    <li class="breadcrumb-item active">modifier une livraison</li>
                </ol>

                <!-- Page Content -->
                
                <div class="container">
                    <div class="card card-register mx-auto mt-5">
                        <div class="card-header">Modifier</div>
                        <div class="card-body">
                        <?PHP
                            include "../core/LivreurC.php";
                            include "../entities/Livreur.php";
                            include "../entities/livraison.php";
                            if (isset($_GET['idL'])){
                                $LivraisonC=new LivraisonC();
                                $result=$LivraisonC->recupererLivraison($_GET['idL']);
                                foreach($result as $row){
                                    $codeC=$row['codeC'];
                                    $idL=$row['idL'];
                                    $dateL=$row['dateL'];
                                    $idLivreur=$row['idLivreur'];
                                    $descL=$row['descL'];
                        ?>
                            <form method="POST">
                                <input type="hidden" name="idL" value=<?PHP echo $_GET['idL'];?>>
                                    <div class="form-group">
                                    <div class="form-label-group">
                                        <input type="number" id="CodeC" name="codeC" class="form-control" value="<?PHP echo $codeC ?>"
                                            placeholder="Commande ID" max="99999999" required="required" disabled>
                                        <label for="CodeC">Commande ID</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <input type="number" id="idL" name="idL" class="form-control" value="<?PHP echo $idL ?>"
                                            placeholder="Identifiant" max="99999999" required="required" disabled>
                                        <label for="idL">Identifiant</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <input type="date" id="dateL" name="dateL" value="<?PHP echo $dateL ?>"
                                            class="form-control" placeholder="Date de livraison" required="required">
                                        <label for="numL">Date de livraison</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <select type="number" id="idLivreur" name="idLivreur" value="<?PHP echo $idLivreur ?>" 
                                            class="form-control" placeholder="ID livreur" required="required">
                                            <option> <?PHP echo $idLivreur ?> </option>
                                            <?PHP
                                            
                                            $Livreur1C=new LivreurC();
                                            $listeLivreur=$Livreur1C->afficherLivreur();
                                            foreach($listeLivreur as $row){
                                            ?>
                                            <option  value="<?php echo $row['idLivreur'] ?>"> <?php echo $row['idLivreur'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <select type="text" id="descL" name="descL" class="form-control" value="<?PHP echo $descL ?>"
                                            placeholder="Etat" required="required">
                                            <option> <?PHP echo $descL ?> </option>
                                            <option> Livrée </option>
                                            <option> En cours </option>
                                            <option> Annulée </option>
                                        </select>
                                    </div>
                                </div>
                                <input class="btn btn-primary btn-block" type="submit" name="Confirmer" value="Confirmer">
                            </form>
                        <?PHP
                            }
                        }
                            if (isset($_POST['Confirmer'])){
                                $Livraison=new Livraison($_POST['codeC'],$_POST['idL'],$_POST['dateL'],$_POST['idLivreur'],$_POST['descL']);
                                $LivraisonC->modifierLivraison($Livraison,$_POST['idL']);
                        ?> 
                                
                                <script>window.location="GestionLivraison.php";</script>
                        <?php        
                            }
                        ?>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Salim Copyright © 2020</span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.content-wrapper -->

    <!--</div>
     /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php?logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>

</body>

</html>