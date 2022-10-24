<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .conte3{
            display: flex;
    flex-direction: column;
    font-size: 27px;
    font-family: cursive;
    font-weight: 600;
    justify-content: center;
    align-items: center;
    color: red;
        }
        .aw2{
            /* text-shadow: 1px 1px 12px orange; */
            text-decoration: none;
            border: 2px solid;
            padding: 13px;
            background-color: azure;
            
        }
        .aw2:hover{
            box-shadow: 2px 2px 23px red;
        
        }
    </style>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
<div class="conte3">
    <div class="nbv">Trending Cources in Engineering</div>
   
<div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>
</div> 
<div> Where, <br> CS - computer science <br> IT - Imformation Technology <br> Electronices and Telecommunication Engineering <br> AI - Artificial Intelligence Engineering <br>ME - mechanical Engineering <br>CE - Civil Engineering <br>EE - Electrical Engineering</div>
<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
    ['Contry', 'trending % Out of 100%'],
  
  ['CS IT',60],
  ['AI',53],
  ['ETC',45],
  ['ME',25],
  ['CE',33],
  ['EE',10]
]);

var options = {
  title:'cources'
};

var chart = new google.visualization.BarChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>
<div><span class="we1"><a class="aw2" href="../ecollege.php">
    <i class="fa fa-close"> close</i>
</a></span></div>
</div>

</body>
</html>



