<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');

.container{
  padding: 50px;
}

.card{
  width: 300px;
  height: 420px;
  background-color: #1E2B32;
  border-radius: 10px 10px;
}

.header{
  border-radius: 10px 10px 0px 0px;
  padding: 5px;
  background-color: #2A3942;
}

h3{
  color: #FFFFFF;
  font-family: 'Roboto', sans-serif;
  margin-left: 1rem;
}

.iconM{
  font-size: 18px;
  margin-left: 170px;
  color: #2f89fc;
}

.icon{
  margin-right: 8px;
}

.body li{
  transition: 1s all;
  font-family: 'Roboto', sans-serif;
  font-size: 18px;
  padding: 15px;
  margin-left: -40px;
  margin-top: 0px;
  color: #fff;
  list-style: none;
  display: block;
  border-top-right-radius: 10px 10px;
  border-bottom-right-radius: 10px 10px;
}

li:hover{
  transition: 1s all;
  color: #2f89fc;
  background-color: rgba(42, 56, 65, 0.82);
  border-top-right-radius: 10px 10px;
  border-bottom-right-radius: 10px 10px;
  cursor: pointer;
}

.body > li{
  float: left;
}

.body li ul{
  background: #1E2B32;
  margin-left: 280px;
  margin-top: -38px;
  display: none;
  position: absolute;
  border-top-right-radius: 15px 15px;
  border-bottom-right-radius: 15px 15px;
}

.body li:hover > ul{
  display: block;
  cursor: pointer;
}
    </style>
</head>
<body>
<div class="container">
  <div class="card">
    <div class="header">
      <h3>Menu IU <i class="fas fa-angle-down iconM"></i></h3>
    </div>
    <div class="body">
      <ul>
        <li><i class="fas fa-home icon"></i> Home</li>
        <li><i class="fas fa-underline icon"></i> Tipography</li>
        <li><i class="fas fa-boxes icon"></i> Widgets</li>
        <li><i class="fas fa-table icon"></i> Tables</li>
        <li><i class="fab fa-wpforms icon"></i> Forms
          <ul>
            <li><i class="fas fa-pencil-alt icon"></i> First form</li>
            <li><i class="fas fa-paper-plane icon"></i> Second form</li>
          </ul>
        </li>
        <li><i class="fas fa-chart-pie icon"></i> Charts</li>
      </ul>
    </div>
  </div>
</div>
</body>
</html>