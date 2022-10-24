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
            text-align: center;
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
        .vfghcont{
          display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
        }
    </style>
</head>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<body>
<div><span class="we1"><a class="aw2" href="../ecollege.php">
    <i class="fa fa-close"> close</i>
</a></span></div>
</div>
  <div class="mnpconr">
  <div class="titi1">Overall Student Apply for Engineering branches and Seats Available</div>

<div class="vfghcont">
<div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['seat', 'number'],
  ['Number Seat available in Computer Science',100],
  ['Number of People Apply for Seat',300],
 
]);

var options = {
  title:'World Wide Wine Production'
};

var chart = new google.visualization.BarChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>


<!-- for new -->
<div id="myChart1" style="width:100%; max-width:600px; height:500px;"></div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['seat', 'number'],
  ['Number Seat available in Imformation Technology',100],
  ['Number of People Apply for Seat',299],
 
]);

var options = {
  title:'Seat available range of IT'
};

var chart = new google.visualization.BarChart(document.getElementById('myChart1'));
  chart.draw(data, options);
}
</script>

<!-- for new1 -->
<div id="myChart2" style="width:100%; max-width:600px; height:500px;"></div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['seat', 'number'],
  ['Number Seat available in Artificial Intalligence',100],
  ['Number of People Apply for Seat',150],
 
]);

var options = {
  title:'Seat available range of AI'
};

var chart = new google.visualization.BarChart(document.getElementById('myChart2'));
  chart.draw(data, options);
}
</script>

<!-- for new3-->
<div id="myChart3" style="width:100%; max-width:600px; height:500px;"></div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['seat', 'number'],
  ['Number Seat available in Civil Engineering',100],
  ['Number of People Apply for Seat',80],
 
]);

var options = {
  title:'Seat available range of CE'
};

var chart = new google.visualization.BarChart(document.getElementById('myChart3'));
  chart.draw(data, options);
}
</script>

   
<!-- for new3-->
<div id="myChart4" style="width:100%; max-width:600px; height:500px;"></div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['seat', 'number'],
  ['Number Seat available in Mechanical Engineering',100],
  ['Number of People Apply for Seat',50],
 
]);

var options = {
  title:'Seat available range of ME'
};

var chart = new google.visualization.BarChart(document.getElementById('myChart4'));
  chart.draw(data, options);
}
</script>

<!-- for new3-->
<div id="myChart5" style="width:100%; max-width:600px; height:500px;"></div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['seat', 'number'],
  ['Number Seat available in Electrical Engineering',100],
  ['Number of People Apply for Seat',20],
 
]);

var options = {
  title:'Seat available range of EE'
};

var chart = new google.visualization.BarChart(document.getElementById('myChart5'));
  chart.draw(data, options);
}
</script>


<!-- for new3-->
<div id="myChart6" style="width:100%; max-width:600px; height:500px;"></div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['seat', 'number'],
  ['Number Seat available in ETC',100],
  ['Number of People Apply for Seat',99],
 
]);

var options = {
  title:'Seat available range of ETC'
};

var chart = new google.visualization.BarChart(document.getElementById('myChart6'));
  chart.draw(data, options);
}
</script>
</div>
</div>
</body>
</html>