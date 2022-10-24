<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .s1cont{
            display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
        }
        .titi1{
            font-family: 'Bungee', cursive;
            font-size: 39px;
            color: #ff1f1f;
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
        .wqe{
            display: flex;
            justify-content: center;
            margin-top: 80px;
            flex-direction: column;
            align-items: center;
            font-size: 29px;
            font-family: system-ui;
            font-weight: 600;
            color: green;
        }
    </style>
</head>
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Bungee&family=Courgette&family=Pacifico&family=Palette+Mosaic&display=swap" rel="stylesheet">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<body>
    <div class="s1cont">
        <div class="titi1">Students After 12th they are diverted based On the Course</div>
<div
id="myChart" class="ajku1" style="width:100%; max-width:600px; height:500px;">
</div>
<div><span class="we1"><a class="aw2" href="../ecollege.php">
    <i class="fa fa-close"> close</i>
</a></span></div>
</div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['Contry', 'Mhl'],
  ['ITI',8],
  ['Fail',11],
  ['Engineering',35],
  ['Polytechnique',12],
  ['Medical',25],
  ['Other Couses',14.5]

]);

var options = {
  title:'Students After 12th class',
  is3D:true
};

var chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>


<div class="wqe">
<div class="qa2">Range of 12th passout Student every Year</div>
<div ><canvas id="myChart2" style="width:100%;max-width:600px"></canvas></div></div>

<script>
var xValues = [2016, 2017, 2018, 2019];
var yValues = [70,80 ,66,86];

new Chart("myChart2", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 10, max:100}}],
    }
  }
});
</script>
    






    
</body>
</html>