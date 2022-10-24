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
    <div class="nbv">Highest Paying Engineering Branches In India in 2022 ( Engineering Degree)</div>
   
<div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>
</div> 
<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
    ['Contry', 'Average salary in India(in laks)'],
  ['Civil Engineer',3.08747],
  ['Mechanical Engineer',3.50334],
  ['Solar Photovoltaic Installer',4.85877],
  ['Wind Turbine Service Technician',5.00000],
  ['Industrial Engineer',4.05963],
  ['Electrical Engineer',3.66801],
  ['Electronics Engineer',3.99537],
  ['Petroleum Engineer',8.00000],
  ['Petroleum Engineer',4.98024],
  ['Robotics Engineer',4.37857],
  ['Environmental Engineer',4.46835],
  ['Computer Hardware Engineer',2.46439],
  ['Aerospace Engineer',8.36782],
  ['Chemical Engineer',4.89511],
  ['Health and Safety Engineer',3.95430],
  ['Biomedical Engineer',3.59625],
  ['Marine Engineer',7.09859],
  ['Naval Architect',6.72299],
  ['Mining and Geological Engineer',9.50000],
  ['Materials Engineer',7.02464],
  ['Agricultural Engineer',4.90819]
]);

var options = {
  title:'Highest Paying Engineering Branches In India in 2021'
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



