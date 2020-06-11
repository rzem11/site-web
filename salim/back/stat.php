<?php  
 $connect = mysqli_connect("localhost", "root", "", "salim");  
 include_once('config1.php');

 $query = "SELECT descL, count(*) as number FROM livraison GROUP BY descL";  
 $result = mysqli_query($connect, $query);  
 ?> 


<html>  
      <head>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['descL', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["descL"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'pourcentage des livreurs disponible et non disponible',  
                      //is3D:true,  
                      pieHole: 0.5 
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
                <h3 align="center">Statistique</h3>  
                <br />  
                <div id="piechart" style="width: 1000px; height: 600px;"></div>  
           </div>  
      </body>  
 </html>