<?php
require 'config.php';

$dataPoints = array();

if(isset($_GET['ver'])) {
    if($_GET['ver'] == "semana") {
        $handle = $link->prepare('SELECT * FROM datapoints WHERE label between date_sub(now(),INTERVAL 1 WEEK) and now() ORDER BY label ASC LIMIT 50');
    } else if($_GET['ver'] == "quincena") {
        $handle = $link->prepare('SELECT * FROM datapoints WHERE label between date_sub(now(),INTERVAL 15 DAY) and now() ORDER BY label ASC LIMIT 50');
    } else if($_GET['ver'] == "mes") {
        $handle = $link->prepare('SELECT * FROM datapoints WHERE label between date_sub(now(),INTERVAL 1 MONTH) and now() ORDER BY label ASC LIMIT 60');
    } else {
        $handle = $link->prepare('SELECT label, y FROM datapoints LIMIT 30');
    }   
} else {
    $handle = $link->prepare('SELECT label, y FROM datapoints LIMIT 40');
}
    
    
$handle->execute(); 
$result = $handle->fetchAll(\PDO::FETCH_OBJ);
		
foreach($result as $row){
    array_push($dataPoints, array("label"=> $row->label, "y"=> $row->y));
}
?>
<!DOCTYPE HTML>
<html>
<head> 
    <title>Gráficación de gastos</title>
    <script>
    window.onload = function () {
    
    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        exportEnabled: true,
        theme: "light1", 
        title:{
            text: "Gastos económicos"
        },
        data: [{
            type: "line",  
            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        }]
    });
    chart.render();
    
    }
    </script>
    <style>
        body {
            background-color: #3c6477;
            text-align:center;
        }
        button {
            padding: 20px;
            margin: 10px;
            width: 20vw;
            font-size: 22px;
        }
    </style>
</head>
<body>
<a href="agregar.php"><button>Agregar dato</button></a><hr>
<a href="index.php?ver=semana"><button>Ver por semana</button></a>
<a href="index.php?ver=quincena"><button>Ver por quincena</button></a>
<a href="index.php?ver=mes"><button>Ver por mes</button></a>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>         