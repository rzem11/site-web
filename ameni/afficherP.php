<script>
function sure(){
  return confirm("Voulez-vous vraiment supprimer ce produit?");
}
</script>
<?php 
 
include "../Cores/produitC.php";


if (isset ($_POST['supprimer']))
{   
$req="delete from prod where id=".$_POST['id'];
$db=config::getConnection();
$sql=$db->prepare($req);
$sql->execute();

}

 $prod=new produitC;
    if (isset($_GET['key']))
     {
        $listP = $prod->rechercherprod($_GET['key']);
    } 
    else {
        $listP = $prod->afficherproduit();
    }

if (isset ($_GET['tri']))
  {
        $listP = $prod->triprod();
    } 
    else {
        $listP = $prod->afficherproduit();
    }

?>
<html>
<head>
  
 </head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Stocks des produits</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">ERAYEN</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
   
    <!-- Navbar Search -->
   

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Produits</span> 
        </a>

        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="nav-link" href="ajouterP.php">
          <h6 class="dropdown-header">Ajouter Produit</h6>
        </a>
          <div class="dropdown-divider"></div>
          <a class="nav-link" href="afficherP.php">
          <h6 class="dropdown-header">Afficher Stock</h6>
        </a>
          
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Catégories</span> 
        </a>

        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="nav-link" href="AjouterC.php">
          <h6 class="dropdown-header">Ajouter Catégorie</h6> 
        </a>
          <div class="dropdown-divider"></div>
          <a class="nav-link" href="AfficherC.php">
          <h6 class="dropdown-header">Afficher Stock</h6>
        </a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
     <div style="margin-left: 1.2em" >
                                    <a href="pdf.php"> Imprimer cette page</a>
                                  </div>
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Produits</a>
          </li>
          <li class="breadcrumb-item active">Stock des produits</li> 
        </ol>

        
          

<body> 

         
           <!-- Navbar Search -->
    <form method="get" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" name="key" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
        <input class="btn btn-primary btn-block" style="background-color: #008B8B"  type="submit" name="tri" value="Trier par nom">
      
    </form>
                                    
                                   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                 
                <thead>
                  <tr style="border-width: 2px">
                   
                   <th scope="col" style="border-width: 2px"> Photo </th>
                   <th scope="col" style="border-width: 2px"> Réference</th>
                   <th scope="col" style="border-width: 2px"> Catégorie </th>
                   <th scope="col" style="border-width: 2px"> Nom  </th>
                   <th scope="col" style="border-width: 2px"> Prix VG </th>
                   <th scope="col" style="border-width: 2px"> Prix VL </th>
                  
                  <th scope="col"> Caractéristiques du produit </th>
                   </h4>
                  </tr>
                         </thead>

<?php

  

$total=0;
foreach ($listP as $prod)
{


echo('<tr>'); 
echo('<td> <img src="produits/'.$prod['photo'].'" width="100" height="100" /> </td>'); 

echo('<td>'.$prod['ref'].'</td>');

echo('<td>'.$prod['categ'].'</td>');
 
echo('<td>'.$prod['nomP'].'</td>');

echo('<td>'.$prod['prixVG'].'</td>');

echo('<td>'.$prod['prixVL'].'</td>');

echo('<td>'.$prod['carac'].'</td>');


$total+=1;

?>


<td>
<form method="POST" action="afficherP.php" >
<input class="btn btn-primary btn-block" style="background-color: red"  onclick="sure()" type="submit" name="supprimer" value="supprimer">

<input  type="hidden" value="<?php echo $prod['id']; ?>" name="id">
</form>
</td>
<td>
<a class="btn btn-primary btn-block" href="modifierP.php?id=<?php echo $prod['id'] ?>">
Modifier
</a>
</tr>
<?php
}
?>





</table> 
 <h5  style="color: white; background-color: green; width: 200px;" align="center"> <?php echo('Total de produits:'.$total)?></h5>
<form method="get" action="ajouterP.php" >
   <button align="center" style="background-color: #0c6071; width: 300px" class="btn btn-primary btn-block" type="submit" > <a>  Ajouter un autre produit  </a> </button>
</form>
</br>
 <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

     

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>


