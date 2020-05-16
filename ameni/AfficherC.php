<?php 

include "../Cores/categorieC.php";



if (isset ($_GET['supprimer']))
{   
$req="delete from catg where id=".$_GET['id'];
$db=config::getConnection();
$sql=$db->prepare($req);
$sql->execute();
header ('location:AfficherC.php');
}


function nbcateg($x)
{

$req="select * from prod";
$db=config::getConnection();
$listP=$db->query($req) ;
$nb=0;

foreach ($listP as $row) 
{
  if($x==$row['categ'])
  { 
    $nb+=1;
  }

}
return $nb;

}   


 $categ=new categorieC;
    if (isset($_GET['key'])) {
        $listC = $categ->rechercheCateg($_GET['key']);
    } else {
        $listC = $categ->affichercategorie();
    }

 

?>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DC Admin - Dashboard</title>

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

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Catégories</a>
          </li>
          <li class="breadcrumb-item active">Liste des catégories</li> 
        </ol>
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
    </form>
         
                                   </head>
                                    

                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                                <thead>
                                                    <tr>
                                                        <th>Réference</th>
                                                        <th>Categorie</th>
                                                        <th>Quantite produits</th>
                                                        <th>Date de creation</th>
                                                        <th>Description</th>
                                                      
                                                    </tr>
                                                </thead>
                                                <?PHP
                                                  $table = array();
                                                  $total=0;
                                                foreach ($listC as $row)
                                                 {
                                                    ?>
                                                 
                                                        <tr> 
                                                               <td>
                                                                <?PHP echo $row['refC']; ?>
                                                            </td>
                                                            <td>
                                                                <?PHP echo $row['nomC']; 
                                                                ?>
                                                            </td>
                                                            <td>
                                                               <?PHP echo $x=nbcateg($row['nomC']);
                                                                $table[$row['nomC']]= $x;
                                                                if ($x<2){?>
                                                                <h6 style="background-color: red" > Stock presque vide. </h6>
                                                                 <?php
                                                                }?>
                                                             
                                                            </td>
                                                            <td>
                                                                <?PHP echo $row['datecreation']; ?>
                                                            </td>
                                                            <td>
                                                                <?PHP echo $row['description']; 
                                                                $total+=1;?>
                                                            </td>
                                                            <td>
                                                            <form method="get" action="AfficherC.php" >
                                                            <input class="btn btn-primary btn-block" style="background-color: red" class="btn btn-primary btn-block" type="submit" name="supprimer" value="supprimer">
                                                            <input class="btn btn-primary btn-block" type="hidden" value="<?php echo $row['id']; ?>" name="id">
                                                            
                                                            </td>
                                                            <td>
                                                            <a class="btn btn-primary btn-block" href="modifierC.php?id=<?php echo $row['id'] ?>">
                                                            Modifier
                                                            </a>
                                                            </td>
                                                        </tr>
</form>
                                           
<?php
} 
?>
                                           
                                           </table> 
                                            <h5  style="color: white; background-color: green; width: 200px;" align="center"> <?php echo('Total de Catégories:'.$total)?></h5>

<form method="get" action="AjouterC.php" align="center">
   <button align="center" style="background-color: #0c6071; width: 300px" class="btn btn-primary btn-block" type="submit" > <a>  Ajouter une autre catégorie </a> </button> </form>

</form>
</br>

  
 </br>
    
              
</td>
</tr>
</table>
</div>

                

                 <fieldset style="border-color: white">
                <table align="center">
            <div    class="card-body">
               <?php
               $test=0;
               $chart_data='';
                foreach($table as $key => $value)
                  {

           $chart_data .= "{ idP:'".$key."', quantiteP:".$value."}, ";
                 
      
       $test+=1;
     if ($test==3)
      { break;
      }

    }
    $chart_data = substr($chart_data, 0, -2);

    ?>  </div>
           </table>
       </fieldset> 
 
              </div>
           
          </div>

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body>  
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 style="color: #696969" align="center">Statistique de quantité</h2>
   <h3 style="color: #4682b4" align="center"> Top 3 catégories </h3>   
   <br /><br />
   <div id="chart"></div>
  </div>
  
 </body>
</html>
<div style="width: 600px;"> 
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'idP',
 ykeys:['quantiteP'],
 labels:'produit',
 hideHover:'Date',
 stacked:true
});
</script>
</div>
</body>
 
</html>
</br>
</br>
</br>
</br>
</br>
</br>
  </br>
    
              

                
 <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

     

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

  

