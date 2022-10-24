<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,700');

body{
  margin:0;
  padding:0;
}
h1{
  font-family: 'Montserrat', sans-serif;
  font-size:45px;
  font-weight:700;
  text-align:center;
  color:#2c3e50;
}
h2{
  font-family: 'Montserrat', sans-serif;
  font-size:25px;
  font-weight:400;
  text-align:center;
  color:#2c3e50;
}
.row{
  width:100%;
  height:80vh;
  padding:0;
  margin:0;
  display: flex;
  justify-content: center;
  flex-direction: column;
  position:relative;
}

/* -- SVG CSS -- */

.svg-separator{
  display: block;
  background: 0 0;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  z-index: 9;
  -webkit-transform: translateY(-100%) translateY(2px);
  transform: translateY(-100%) translateY(2px);
  width: 100%;
}
.svg-separator.bottom{
  top: auto;
  bottom: 0;
}
.sep1{
  transform: translateY(-100%) translateY(2px) scale(1,1);
  transform-origin: top;
}
.sep2 {
  transform: translateY(-100%) translateY(2px) scale(1,1);
  transform-origin: top;
}
.sep3 {
  transform: translateY(-100%) translateY(2px) scale(1,1);
  transform-origin: top;
}
.sep4 {
  transform: translateY(-100%) translateY(2px) scale(1,1);
  transform-origin: top;
}
.sep5 {
  transform: translateY(-100%) translateY(2px) scale(1,1);
  transform-origin: top;
}
.sep6 {
  transform: translateY(-100%) translateY(2px) scale(1,1);
  transform-origin: top;
}
.sep7 {
  transform: translateY(-100%) translateY(2px) scale(1,1);
  transform-origin: top;
}
.sep8 {
  transform: translateY(-100%) translateY(2px) scale(1,1);
  transform-origin: top;
}
.sep9 {
  transform: translateY(0%) translateY(-2px) scale(-1,-1);
  transform-origin: bottom;
}
.sep10 {
  transform: translateY(-100%) translateY(2px) scale(1,1);
  transform-origin: top;
}
.sep11 {
  transform: translateY(-100%) translateY(2px) scale(1,1);
  transform-origin: top;
}
.sep12 {
  transform: translateY(-100%) translateY(2px) scale(1,1);
  transform-origin: top;
}

/* -- Row BG Color -- */

.green{background-color:#03a678;}
.green2{background-color:#1bbc9b;}
.red{background-color:#d24d57;}
.light-grey{background-color:#ecf0f1;}
.light-grey2{background-color:#ecf0f1;}
.dark-blue{background-color:#22313f;}
.grey-blue{background-color:#6c7a89;}
.black{background-color:#333;}
.stupid-blue{background-color:#19b5fe;}
    </style>
</head>
<body>
<div class="row">
  <h1>ROW SEPARATOR</a>
</div>
<div class="row red">
  <div>
    <svg id="" preserveAspectRatio="xMidYMax meet" class="svg-separator sep1" viewBox="0 0 1600 100" style="" data-height="100">
<path class="" style="opacity: 1;fill: #bc4565;" d="M1040,56c0.5,0,1,0,1.6,0c-16.6-8.9-36.4-15.7-66.4-15.7c-56,0-76.8,23.7-106.9,41C881.1,89.3,895.6,96,920,96
C979.5,96,980,56,1040,56z"></path>
<path class="" style="opacity: 1;fill: #bc4565;" d="M1699.8,96l0,10H1946l-0.3-6.9c0,0,0,0-88,0s-88.6-58.8-176.5-58.8c-51.4,0-73,20.1-99.6,36.8
c14.5,9.6,29.6,18.9,58.4,18.9C1699.8,96,1699.8,96,1699.8,96z"></path>
<path class="" style="opacity: 1;fill: #bc4565;" d="M1400,96c19.5,0,32.7-4.3,43.7-10c-35.2-17.3-54.1-45.7-115.5-45.7c-32.3,0-52.8,7.9-70.2,17.8
c6.4-1.3,13.6-2.1,22-2.1C1340.1,56,1340.3,96,1400,96z"></path>
<path class="" style="opacity: 1;fill: #bc4565;" d="M320,56c6.6,0,12.4,0.5,17.7,1.3c-17-9.6-37.3-17-68.5-17c-60.4,0-79.5,27.8-114,45.2
c11.2,6,24.6,10.5,44.8,10.5C260,96,259.9,56,320,56z"></path>
<path class="" style="opacity: 1;fill: #bc4565;" d="M680,96c23.7,0,38.1-6.3,50.5-13.9C699.6,64.8,679,40.3,622.2,40.3c-30,0-49.8,6.8-66.3,15.8
c1.3,0,2.7-0.1,4.1-0.1C619.7,56,620.2,96,680,96z"></path>
<path class="" style="opacity: 1;fill: #bc4565;" d="M-40,95.6c28.3,0,43.3-8.7,57.4-18C-9.6,60.8-31,40.2-83.2,40.2c-14.3,0-26.3,1.6-36.8,4.2V106h60V96L-40,95.6
z"></path>
<path class="" style="opacity: 1;fill: #af3f5d;" d="M504,73.4c-2.6-0.8-5.7-1.4-9.6-1.4c-19.4,0-19.6,13-39,13c-19.4,0-19.5-13-39-13c-14,0-18,6.7-26.3,10.4
C402.4,89.9,416.7,96,440,96C472.5,96,487.5,84.2,504,73.4z"></path>
<path class="" style="opacity: 1;fill: #af3f5d;" d="M1205.4,85c-0.2,0-0.4,0-0.6,0c-19.5,0-19.5-13-39-13s-19.4,12.9-39,12.9c0,0-5.9,0-12.3,0.1
c11.4,6.3,24.9,11,45.5,11C1180.6,96,1194.1,91.2,1205.4,85z"></path>
<path class="" style="opacity: 1;fill: #af3f5d;" d="M1447.4,83.9c-2.4,0.7-5.2,1.1-8.6,1.1c-19.3,0-19.6-13-39-13s-19.6,13-39,13c-3,0-5.5-0.3-7.7-0.8
c11.6,6.6,25.4,11.8,46.9,11.8C1421.8,96,1435.7,90.7,1447.4,83.9z"></path>
<path class="" style="opacity: 1;fill: #af3f5d;" d="M985.8,72c-17.6,0.8-18.3,13-37,13c-19.4,0-19.5-13-39-13c-18.2,0-19.6,11.4-35.5,12.8
c11.4,6.3,25,11.2,45.7,11.2C953.7,96,968.5,83.2,985.8,72z"></path>
<path class="" style="opacity: 1;fill: #af3f5d;" d="M743.8,73.5c-10.3,3.4-13.6,11.5-29,11.5c-19.4,0-19.5-13-39-13s-19.5,13-39,13c-0.9,0-1.7,0-2.5-0.1
c11.4,6.3,25,11.1,45.7,11.1C712.4,96,727.3,84.2,743.8,73.5z"></path>
<path class="" style="opacity: 1;fill: #af3f5d;" d="M265.5,72.3c-1.5-0.2-3.2-0.3-5.1-0.3c-19.4,0-19.6,13-39,13c-19.4,0-19.6-13-39-13
c-15.9,0-18.9,8.7-30.1,11.9C164.1,90.6,178,96,200,96C233.7,96,248.4,83.4,265.5,72.3z"></path>
<path class="" style="opacity: 1;fill: #af3f5d;" d="M1692.3,96V85c0,0,0,0-19.5,0s-19.6-13-39-13s-19.6,13-39,13c-0.1,0-0.2,0-0.4,0c11.4,6.2,24.9,11,45.6,11
C1669.9,96,1684.8,96,1692.3,96z"></path>
<path class="" style="opacity: 1;fill: #af3f5d;" d="M25.5,72C6,72,6.1,84.9-13.5,84.9L-20,85v8.9C0.7,90.1,12.6,80.6,25.9,72C25.8,72,25.7,72,25.5,72z"></path>
<path class="" style="fill: rgb(210, 77, 87);" d="M-40,95.6C20.3,95.6,20.1,56,80,56s60,40,120,40s59.9-40,120-40s60.3,40,120,40s60.3-40,120-40
s60.2,40,120,40s60.1-40,120-40s60.5,40,120,40s60-40,120-40s60.4,40,120,40s59.9-40,120-40s60.3,40,120,40s60.2-40,120-40
s60.2,40,120,40s59.8,0,59.8,0l0.2,143H-60V96L-40,95.6z"></path>
</svg>
  </div>
</div>
<div class="row light-grey">
  <div>
    <svg id="" preserveAspectRatio="xMidYMax meet" class="svg-separator sep2" viewBox="0 0 1600 200" style="display: block;" data-height="200">
<polygon class="" style="fill: rgb(236, 240, 241);" points="-4,0 1604,198 1604,204 -4,204 	"></polygon>
<polygon class="" style="opacity: 1;fill: #d2d7d3;" points="1604,198 1604,186 -4,0 -4,0 	"></polygon>
<polygon class="" style="opacity: 1;fill: #bdc3c7;" points="1604,186 1604,174 -4,0 -4,0 	"></polygon></svg>
  </div>
</div>
<div class="row dark-blue">
  <div>
    <svg id="" preserveAspectRatio="xMidYMax meet" class="svg-separator sep3" viewBox="0 0 1600 100" style="display: block;" data-height="100">
<path class="" style="opacity: 1;fill: #273a4c;" d="M-40,71.627C20.307,71.627,20.058,32,80,32s60.003,40,120,40s59.948-40,120-40s60.313,40,120,40s60.258-40,120-40s60.202,40,120,40s60.147-40,120-40s60.513,40,120,40s60.036-40,120-40c59.964,0,60.402,40,120,40s59.925-40,120-40s60.291,40,120,40s60.235-40,120-40s60.18,40,120,40s59.82,0,59.82,0l0.18,26H-60V72L-40,71.627z"></path>
<path class="" style="opacity: 1;fill: #2a3f54;" d="M-40,83.627C20.307,83.627,20.058,44,80,44s60.003,40,120,40s59.948-40,120-40s60.313,40,120,40s60.258-40,120-40s60.202,40,120,40s60.147-40,120-40s60.513,40,120,40s60.036-40,120-40c59.964,0,60.402,40,120,40s59.925-40,120-40s60.291,40,120,40s60.235-40,120-40s60.18,40,120,40s59.82,0,59.82,0l0.18,14H-60V84L-40,83.627z"></path>
<path class="" style="fill: rgb(34, 49, 63);" d="M-40,95.627C20.307,95.627,20.058,56,80,56s60.003,40,120,40s59.948-40,120-40s60.313,40,120,40s60.258-40,120-40s60.202,40,120,40s60.147-40,120-40s60.513,40,120,40s60.036-40,120-40c59.964,0,60.402,40,120,40s59.925-40,120-40s60.291,40,120,40s60.235-40,120-40s60.18,40,120,40s59.82,0,59.82,0l0.18,138H-60V96L-40,95.627z"></path></svg>
  </div>
</div>
<div class="row green2">
  <div>
    <svg id="" preserveAspectRatio="xMidYMax meet" class="svg-separator sep4" viewBox="0 0 1600 200" style="display: block;" data-height="200">
<polygon class="" style="fill: rgb(27, 188, 155);" points="886,86 800,172 714,86 -4,86 -4,204 1604,204 1604,86 "></polygon> 
<polygon class="" style="opacity: 1;fill: #0e9382;" points="800,172 886,86 900,86 800,186 700,86 714,86 "></polygon> 
<polygon class="" style="opacity: 1;fill: #14a084;" points="800,162 876,86 888,86 800,174 712,86 724,86 "></polygon></svg>
  </div>
</div>
<div class="row">
  <div>
    <svg id="" preserveAspectRatio="xMidYMax meet" class="svg-separator sep5" viewBox="0 0 1600 200" style="display: block;" data-height="200">
<polygon class="" style="fill: rgb(255, 255, 255);" points="1488,134 1304,100 1068,152 909.935,92.044 672,198 364,142 242,32 -4,95 -4,204 1604,204 1604,0 "></polygon> 
<polygon class="" style="opacity: 1;fill: #95a5a6;" points="672,198 364,142 242,32 -4,95 -4,82.333 242,32 374,136 "></polygon> 
<polygon class="" style="opacity: 1;fill: #95a5a6;" points="894,86 672,198 909.935,92.044 "></polygon> 
<polygon class="" style="opacity: 1;fill: #6c7a89;" points="1068,152 1302,86 1486,126 1604,0 1488,134 1304,100 "></polygon></svg>
  </div>
</div>
<div class="row grey-blue">
  <div>
    <svg id="" preserveAspectRatio="xMidYMax meet" class="svg-separator sep6" viewBox="0 0 1600 200" style="display: block;" data-height="200">
<polygon class="" style="fill: rgb(108, 122, 137);" points="-4,188.586 174,76 292,124 402,60 536,108 752,8 882,66 990,32 1210,116 1380,64 1536,150 1604,115.09 1604,204 -4,204 "></polygon> 
<polygon class="" style="opacity: 1;fill: #95a5a6;" points="174,76 174,78 -4,198 -4,188.586 "></polygon> 
<polygon class="" style="opacity: 1;fill: #95a5a6;" points="292,124 302,138 402,64 402,60 "></polygon> 
<polygon class="" style="opacity: 1;fill: #95a5a6;" points="536,108 544,120 752,12 752,8 "></polygon> 
<polygon class="" style="opacity: 1;fill: #95a5a6;" points="882,66 890,78 990,36 990,32 "></polygon> 
<polygon class="" style="opacity: 1;fill: #95a5a6;" points="1210,116 1222,130 1380,68 1380,64 "></polygon> 
<polygon class="" style="opacity: 1;fill: #95a5a6;" points="1536,150 1546,164 1604,124 1604,115.09 "></polygon> 
<polygon class="" style="opacity: 1;fill: #34495e;" points="174,76 292,124 282,140 174,78 "></polygon> 
<polygon class="" style="opacity: 1;fill: #34495e;" points="402,60 536,108 528,120 402,64 "></polygon> 
<polygon class="" style="opacity: 1;fill: #34495e;" points="752,8 882,66 874,80 752,12 "></polygon> 
<polygon class="" style="opacity: 1;fill: #34495e;" points="990,32 990,36 1192,130 1210,116 "></polygon> 
<polygon class="" style="opacity: 1;fill: #34495e;" points="1380,64 1536,150 1526,168 1380,68 "></polygon></svg>
  </div>
</div>
<div class="row light-grey2">
  <div>
    <svg id="" preserveAspectRatio="xMidYMax meet" class="svg-separator sep7" viewBox="0 0 1600 200" style="display: block;" data-height="200">
<polygon class="" style="fill: #ecf0f1" points="1611.912,205.954 -14.224,206 -9.912,2.046 1616.224,162.165 "></polygon> 
<polygon class="" style="opacity: 1;fill: #59abe3;" points="167.262,39.589 107.551,33.709 123.443,15.177 183.154,21.057 "></polygon> 
<polygon class="" style="opacity: 1;fill: #d2527f;" points="286.684,51.348 226.973,45.468 242.865,26.936 302.577,32.816 "></polygon> 
<polygon class="" style="opacity: 1;fill: #d2527f;" points="47.839,27.83 -11.872,21.95 4.021,3.418 63.732,9.298 "></polygon> 
<polygon class="" style="opacity: 1;fill: #59abe3;" points="406.107,63.107 346.395,57.227 362.288,38.695 421.999,44.575 "></polygon> 
<polygon class="" style="opacity: 1;fill: #d2527f;" points="525.529,74.866 465.818,68.986 481.71,50.454 541.422,56.334 "></polygon> 
<polygon class="" style="opacity: 1;fill: #59abe3;" points="644.952,86.625 585.24,80.745 601.133,62.213 660.844,68.093 "></polygon> 
<polygon class="" style="opacity: 1;fill: #d2527f;" points="764.374,98.384 704.663,92.504 720.555,73.973 780.267,79.852 "></polygon> 
<polygon class="" style="opacity: 1;fill: #59abe3;" points="883.797,110.143 824.085,104.263 839.978,85.732 899.689,91.611 "></polygon> 
<polygon class="" style="opacity: 1;fill: #d2527f;" points="1003.219,121.902 943.508,116.023 959.4,97.491 1019.111,103.37 "></polygon> 
<polygon class="" style="opacity: 1;fill: #59abe3;" points="1122.641,133.661 1062.93,127.782 1078.823,109.25 1138.534,115.129 "></polygon> 
<polygon class="" style="opacity: 1;fill: #d2527f;" points="1242.064,145.42 1182.353,139.541 1198.245,121.009 1257.956,126.888 "></polygon> 
<polygon class="" style="opacity: 1;fill: #59abe3;" points="1361.486,157.179 1301.775,151.3 1317.668,132.768 1377.379,138.647 "></polygon> 
<polygon class="" style="opacity: 1;fill: #d2527f;" points="1480.909,168.938 1421.198,163.059 1437.09,144.527 1496.801,150.406 "></polygon> 
<polygon class="" style="opacity: 1;fill: #59abe3;" points="1600.331,180.697 1540.62,174.818 1556.513,156.286 1616.224,162.165 "></polygon></svg>
  </div>
</div>
<div class="row">
  <div>
    <svg id="" preserveAspectRatio="xMidYMax meet" class="svg-separator sep8" viewBox="0 0 1600 200" style="display: block;" data-height="200">
<path class="" style="opacity: 1;fill: #6c7a89;" d="M1615.6,58.4c-8.6,20.7-19.2,31.4-26.8,36.8c-4.4-7.6-8.7-18.4-10.9-33.4
c-9.2,22.6-20.9,33.4-28.6,38.3c-2.4-7.7-4.4-16.4-6-26.2c-10.4,25.9-22.8,42.1-33.4,52.2c-2.8-6.5-5.2-14.5-6.8-24.4
c-5.2,13.2-11.2,22.4-16.8,28.8c-3.9-5.1-8.1-12.1-11.9-21.5c6.8,0.7,13.6,1.4,20.4,2.1c0,0-20-9.9-26.6-49.3
c-4.6,12-10,20.7-15.2,27c-8.1-12.1-16.5-30.2-21.1-56.8c-15.1,39.7-35.4,57-47.2,64.2c-3.8-7.1-7.4-16.7-9.7-29.2
c-8.5,22.9-19.8,34-27.3,39.2c-8.5-11.9-17.5-30.1-22.7-57.5c-8.3,22.9-18.3,38.4-27.6,48.9c-5.4-7.4-11.2-18.9-14.5-36.1
c-7.8,22-18.2,33.2-25.7,38.8c-2.7-4.1-5.5-9-8-14.9c6.8,0.5,13.6,1,20.4,1.4c0,0-20.4-9.2-28.3-48.4
c-8.5,24.4-20.4,35.7-27.8,40.6c-9-11.7-18.8-30-24.7-58c-17,50.2-43.2,65.9-51.6,69.7c-7.3-11.5-14.5-27.5-19.4-49.5
c-9.3,28.5-21.7,46-32.1,56.5c-4.5-7.1-9-17-12.1-30.5c-5.7,18-13.4,29-19.9,35.6c-8.8-11.5-18.2-29.1-24.3-55.3
c-5.6,17.9-12.4,31.5-19.2,41.8c-6.8-5.6-17.6-18-23.7-43.2c-4.8,15.8-11.2,26.3-17.1,33.2c-9.3-5.7-32.3-24.1-44.6-72.7
c-8.8,29.7-21.1,47.7-31.5,58.5C889,58.6,885,49.8,882,38.2c-11,38.5-32,46-32,46c6.8,0.1,13.6,0.1,20.4,0.2
c-8.5,15.8-17.6,23.9-23.2,27.7c-7.1-7.5-15-18-22.5-32.6c10.8,0,21.7,0.1,32.5,0.2c0,0-33.2-12.5-49.9-74
c-7.2,26.2-17.4,43.4-26.7,54.6c-4.1-6.6-8.2-15.2-11.3-26.6c-2.2,8.3-4.9,15.2-7.8,20.9C752,43.5,741.6,26.3,734.1,0
c-11.6,44.1-31.9,63.1-42.4,70.4c-6.3-6.8-13.5-17.9-18.7-35.6c-6,23.7-16,36-23,41.9c-7.9-10.8-16-25.9-22.3-46.9
c-5.8,23.6-14.1,40.1-22.2,51.6c-3.5-5.9-6.9-13.4-9.7-22.6c-8.3,34.8-25.7,45.2-29.2,47c-0.2,0-0.4,0-0.6,0
c-6.8-10.2-13.5-23.7-19.1-41.3c-3.4,14.8-7.9,26.9-12.7,36.6c-7.3-5.2-18.6-16.8-26.4-41C505,72.7,501,82,496.8,89
c-7.9-10.6-16-25.2-22.6-45.3c-4.7,21.5-11.7,37.2-18.8,48.6c-6.9-6.4-15.3-17.5-21.6-36.4c-5.7,26.8-17.1,39.4-23.7,44.7
c-10.5-10.4-22.8-27.6-32.4-55.4c-3.9,19.2-9.7,33.9-15.8,45c-6.6-6.5-14.4-17.2-20.5-34.5c-2.2,11.3-5.5,20-9,26.8
c-11.9-8.4-29.9-26.2-43.1-63.1c-12.1,62.6-44.2,77.5-44.3,77.6c10.8-0.9,21.7-1.8,32.5-2.7c-9,21.2-19.4,34.5-27.5,42.5
c-5.8-6.5-12.1-16.2-17.3-30.4c-0.8,4.3-1.7,8.3-2.8,12c-7.2-4-20.7-14.7-30.6-41.1c-6.9,39.4-27,49-27,49
c6.8-0.7,13.5-1.3,20.3-1.9c-0.9,2.1-1.8,4.1-2.7,6c-11.9,1.1-23.8,2.3-35.7,3.5c-7-3.7-21.1-14.1-31.6-41
c-4.5,27.3-15.4,40.4-21.7,45.9c-5.9-6.4-12.3-15.8-17.7-29.7c-1.5,9.8-3.9,17.7-6.6,24.2C66.7,123,55.2,107.3,45.5,83.1
c-2.2,14.5-5.6,26.5-9.5,36.4c-7.5-5.7-17.5-16.3-25.7-36.3C9.3,90.4,7.8,96.6,6,101.9c-10.5-10-22.5-25.7-32.8-50.4
c-0.4,2.5-0.7,4.9-1.2,7.2c7.3,57.9,10.2,77.5,17.5,135.4l1619.5-1.6c6.2-49.3,7.4-58.7,13.6-108
C1619.7,77.7,1617.1,69.1,1615.6,58.4z"></path>
<path class="" style="opacity: 1;fill: #95a5a6;" d="M85.8,155c5.1-0.6,10.1-1.1,15.2-1.7c0,0-13.6-3.6-27.3-24c5.9-0.7,11.7-1.3,17.6-1.9
c0,0-18.8-4.7-31.6-37c-5.3,34.4-22.6,43.1-22.6,43.1c5.9-0.7,11.7-1.4,17.6-2C46,154.4,33.5,161,33.5,161
c5.1-0.6,10.1-1.2,15.2-1.8c-11.7,23-25.4,30-25.5,30l94.1-10.6C117.3,178.6,102.4,174.9,85.8,155z"></path>
<path class="" style="opacity: 1;fill: #95a5a6;" d="M367.5,131.9c4.7-0.3,9.5-0.6,14.2-0.9c0,0-12.6-3.9-24.5-23.6c5.5-0.4,11-0.7,16.5-1.1
c0,0-17.3-5.1-28-35.9c-6.3,32-22.8,39.4-22.8,39.4c5.5-0.4,11-0.8,16.5-1.2c-9.1,21.1-21,26.7-21,26.7c4.7-0.4,9.5-0.7,14.2-1
c-11.9,21.1-25,27.1-25,27.1l88.3-6.1C396,155.3,382.2,151.1,367.5,131.9z"></path>
<path class="" style="opacity: 1;fill: #95a5a6;" d="M714.6,108.9c6.5-0.1,13-0.2,19.5-0.2c0,0-16.8-6.3-31.7-33.9c7.5-0.1,15.1-0.2,22.6-0.3
c0,0-23.3-8.2-35.7-50.9c-11,43.1-33.9,52.1-33.9,52.1c7.5-0.2,15.1-0.3,22.6-0.5c-13.9,28.1-30.5,34.9-30.5,34.9
c6.5-0.2,13-0.3,19.5-0.4c-17.7,27.9-35.9,35.1-35.9,35.1l120.6-2.1C751.7,142.8,733.3,136.1,714.6,108.9z"></path>
<path class="" style="opacity: 1;fill: #95a5a6;" d="M997.7,115.2c5.7,0.2,11.5,0.3,17.2,0.5c0,0-14.6-6.2-26.7-31.1c6.7,0.2,13.3,0.4,20,0.6
c0,0-20.2-8.2-29.5-46.3c-11.3,37.6-31.9,44.7-31.9,44.7c6.7,0.1,13.3,0.3,20,0.5c-13.4,24.3-28.3,29.6-28.3,29.7
c5.7,0.1,11.5,0.2,17.2,0.4c-16.7,23.9-33,29.6-33,29.6l106.5,2.8C1029.2,146.5,1013.1,139.9,997.7,115.2z"></path>
<path class="" style="opacity: 1;fill: #95a5a6;" d="M1224.6,124.7c5.9,0.4,11.9,0.8,17.8,1.2c0,0-15-6.9-26.6-33.2c6.9,0.4,13.8,0.9,20.7,1.3
c0,0-20.7-9.2-29-49.1c-13.1,38.6-34.7,45.2-34.7,45.2c6.9,0.4,13.8,0.8,20.7,1.2c-14.7,24.7-30.4,29.7-30.4,29.7
c5.9,0.3,11.9,0.7,17.8,1c-18.1,24.2-35.3,29.5-35.3,29.5l110.4,6.7C1256.1,158.3,1239.7,150.9,1224.6,124.7z"></path>
<path class="" style="opacity: 1;fill: #95a5a6;" d="M1357.2,144.3c4.1,0.3,8.2,0.7,12.3,1.1c0,0-10.2-5-17.9-23.3c4.8,0.4,9.5,0.8,14.3,1.2
c0,0-14.1-6.6-19.2-34.3c-9.6,26.5-24.6,30.7-24.6,30.7c4.8,0.4,9.5,0.8,14.3,1.1c-10.5,16.8-21.4,20.1-21.4,20.1
c4.1,0.3,8.2,0.6,12.3,1c-12.9,16.4-24.9,19.8-24.9,19.8l76.2,6.3C1378.5,168,1367.2,162.7,1357.2,144.3z"></path>
<path class="" style="opacity: 1;fill: #95a5a6;" d="M1593.7,159.5c5.8,0.7,11.6,1.4,17.4,2.1c0,0-14.3-7.6-24.2-34c6.8,0.8,13.5,1.6,20.3,2.5
c0,0-19.8-10.2-25.7-49.7c-15,37.1-36.6,42.4-36.6,42.4c6.8,0.8,13.5,1.5,20.3,2.3c-15.8,23.4-31.5,27.5-31.5,27.5
c5.8,0.7,11.6,1.3,17.4,2c-19.1,22.7-36.3,27-36.3,27l104,12.2c1.3,0.2,2.7,0.3,4,0.5C1622.7,194.2,1607,186,1593.7,159.5z"></path>
<path class="" style="fill: rgb(255, 255, 255);" d="M1475.4,177c0,0-16.4-8.1-30.8-35.3c6,0.6,12.1,1.2,18.1,1.8
c0,0-15-7.6-25.8-34.8c7,0.7,14,1.4,21,2.1c0,0-20.7-10.1-27.7-51c-14.7,38.8-36.9,44.7-37,44.7c7,0.6,14,1.3,21,2
c-15.9,24.6-32,29.2-32,29.2c6,0.5,12.1,1.1,18.1,1.7c-19.3,24-37,28.8-37,28.8c-10.7-0.9-21.3-1.9-32-2.7c0,0-18.1-8.4-34.4-37.7
c6.6,0.5,13.2,1,19.7,1.6c0,0-16.5-7.9-29-37.2c7.6,0.6,15.3,1.2,22.9,1.8c0,0-22.8-10.5-31.5-54.8c-15,42.6-39.1,49.6-39.1,49.7
c7.7,0.5,15.3,1.1,23,1.6c-16.7,27.2-34.1,32.6-34.1,32.6c6.6,0.4,13.2,0.9,19.7,1.3c-20.4,26.6-39.5,32.3-39.5,32.3
c-10.7-0.7-21.4-1.3-32.1-2c0,0-12.9-5.6-24.8-26c4.6,0.3,9.3,0.5,13.9,0.8c0,0-11.7-5.3-20.9-25.8c5.4,0.3,10.8,0.6,16.1,0.9
c0,0-16.2-7-22.9-38.1c-9.9,30.3-26.7,35.6-26.7,35.6c5.4,0.3,10.8,0.5,16.1,0.8c-11.3,19.4-23.5,23.4-23.5,23.4
c4.6,0.2,9.3,0.4,13.9,0.7c-14,19-27.4,23.3-27.4,23.3c-53.5-2.4-107-4.2-160.5-5.3c0,0-21.3-8.4-42.1-40.7
c7.6,0.1,15.1,0.2,22.7,0.4c0,0-19.4-7.9-35.9-40.5c8.8,0.1,17.6,0.2,26.4,0.4c0,0-26.9-10.4-40.1-60.5
c-14.1,49.9-41.2,59.7-41.2,59.7c8.8,0,17.6,0.1,26.4,0.1c-17.1,32.3-36.6,39.8-36.7,39.8c7.6,0,15.1,0,22.7,0.1
c-21.4,32-42.8,39.9-42.9,39.9c-46.2,0.1-92.3,0.6-138.5,1.7c0,0-20.7-7.1-41.9-37.2c7.2-0.2,14.5-0.4,21.7-0.6
c0,0-18.9-6.7-36-37.3c8.4-0.3,16.8-0.5,25.3-0.7c0,0-26.1-8.8-40.8-56.2c-11.5,48.3-36.9,58.8-36.9,58.8c8.4-0.3,16.8-0.7,25.3-1
c-15,31.6-33.4,39.6-33.4,39.6c7.2-0.3,14.5-0.6,21.7-0.9c-19.2,31.4-39.3,39.9-39.4,39.9c-12.7,0.6-25.4,1.2-38.1,1.8
c0,0-17.2-5.4-35.2-29.6c5.9-0.3,11.9-0.6,17.8-1c0,0-15.6-5.1-30.3-29.8c6.9-0.4,13.8-0.8,20.7-1.1c0,0-21.6-6.7-34.6-45.3
c-8.4,39.9-29,49-29,49c6.9-0.4,13.8-0.9,20.7-1.3c-11.7,26.3-26.6,33.2-26.6,33.2c5.9-0.4,11.9-0.8,17.8-1.1
c-15.1,26.2-31.5,33.5-31.5,33.5c-40.1,2.7-80.1,5.8-120.2,9.2c0,0-22.1-6.1-46.2-36c7.5-0.7,15.1-1.4,22.6-2.1
c0,0-20.2-5.8-40-36.5c8.8-0.8,17.6-1.6,26.3-2.4c0,0-27.9-7.4-46.3-55.9C156.2,83.3,130.3,96,130.3,96c8.8-0.9,17.6-1.8,26.3-2.7
c-13.6,34-32.3,43.5-32.3,43.5c7.5-0.8,15.1-1.6,22.6-2.3c-17.9,34.1-38.4,44.2-38.4,44.3c-38,4.1-75.9,7.6-113.8,12.3
c0.4,3.3,0.8,7.6,1.3,10.9c0,13.3,1608,13.3,1608,0c0.4-3.3,0.8-7.6,1.3-10.9C1562,185.6,1518.8,181.6,1475.4,177z"></path></svg>
   </div> 
  <div>
    <svg id="" preserveAspectRatio="xMidYMax meet" class="svg-separator sep9 bottom" viewBox="0 0 1600 200" style="display: block;" data-height="200">
<circle class="" style="opacity: .8;fill: #ffffff;" cx="8" cy="112" r="26"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="8" cy="64" r="14"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="8" cy="34" r="8"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="8" cy="16" r="2"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="96" cy="112" r="26"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="96" cy="64" r="14"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="96" cy="34" r="8"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="96" cy="16" r="2"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="184" cy="112" r="26"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="184" cy="64" r="14"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="184" cy="34" r="8"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="184" cy="16" r="2"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="272" cy="112" r="26"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="272" cy="64" r="14"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="272" cy="34" r="8"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="272" cy="16" r="2"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="360" cy="112" r="26"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="360" cy="64" r="14"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="360" cy="34" r="8"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="360" cy="16" r="2"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="448" cy="112" r="26"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="448" cy="64" r="14"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="448" cy="34" r="8"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="448" cy="16" r="2"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="536" cy="112" r="26"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="536" cy="64" r="14"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="536" cy="34" r="8"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="536" cy="16" r="2"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="624" cy="112" r="26"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="624" cy="64" r="14"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="624" cy="34" r="8"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="624" cy="16" r="2"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="712" cy="112" r="26"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="712" cy="64" r="14"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="712" cy="34" r="8"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="712" cy="16" r="2"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="800" cy="112" r="26"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="800" cy="64" r="14"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="800" cy="34" r="8"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="800" cy="16" r="2"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="888" cy="112" r="26"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="888" cy="64" r="14"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="888" cy="34" r="8"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="888" cy="16" r="2"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="976" cy="112" r="26"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="976" cy="64" r="14"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="976" cy="34" r="8"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="976" cy="16" r="2"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="1064" cy="112" r="26"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="1064" cy="64" r="14"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="1064" cy="34" r="8"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="1064" cy="16" r="2"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="1152" cy="112" r="26"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="1152" cy="64" r="14"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="1152" cy="34" r="8"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="1152" cy="16" r="2"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="1240" cy="112" r="26"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="1240" cy="64" r="14"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="1240" cy="34" r="8"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="1240" cy="16" r="2"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="1328" cy="112" r="26"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="1328" cy="64" r="14"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="1328" cy="34" r="8"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="1328" cy="16" r="2"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="1416" cy="112" r="26"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="1416" cy="64" r="14"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="1416" cy="34" r="8"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="1416" cy="16" r="2"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="1504" cy="112" r="26"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="1504" cy="64" r="14"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="1504" cy="34" r="8"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="1504" cy="16" r="2"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="1592" cy="112" r="26"></circle> 
<circle class="" style="opacity: .8;fill: #ffffff;" cx="1592" cy="64" r="14"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="1592" cy="34" r="8"></circle> 
<circle class="" style="opacity: .6;fill: #ffffff;" cx="1592" cy="16" r="2"></circle> 
<path class="" style="fill: rgb(255, 255, 255);" d="M1638,192c0-25.405-20.595-46-46-46c-20.729,0-38.25,13.713-44,32.561 c-5.75-18.848-23.271-32.561-44-32.561s-38.25,13.713-44,32.561c-5.75-18.848-23.271-32.561-44-32.561s-38.25,13.713-44,32.561 c-5.75-18.848-23.271-32.561-44-32.561s-38.25,13.713-44,32.561c-5.75-18.848-23.271-32.561-44-32.561s-38.25,13.713-44,32.561 c-5.75-18.848-23.271-32.561-44-32.561s-38.25,13.713-44,32.561c-5.75-18.848-23.271-32.561-44-32.561s-38.25,13.713-44,32.561 C1014.25,159.713,996.729,146,976,146s-38.25,13.713-44,32.561C926.25,159.713,908.729,146,888,146s-38.25,13.713-44,32.561 C838.25,159.713,820.729,146,800,146s-38.25,13.713-44,32.561C750.25,159.713,732.729,146,712,146s-38.25,13.713-44,32.561 C662.25,159.713,644.729,146,624,146s-38.25,13.713-44,32.561C574.25,159.713,556.729,146,536,146s-38.25,13.713-44,32.561 C486.25,159.713,468.729,146,448,146s-38.25,13.713-44,32.561C398.25,159.713,380.729,146,360,146s-38.25,13.713-44,32.561 C310.25,159.713,292.729,146,272,146s-38.25,13.713-44,32.561C222.25,159.713,204.729,146,184,146s-38.25,13.713-44,32.561 C134.25,159.713,116.729,146,96,146s-38.25,13.713-44,32.561C46.25,159.713,28.729,146,8,146c-25.405,0-46,20.595-46,46 c0,24.056,18.469,43.787,42,45.816V238h1596v-0.708C1621.589,233.504,1638,214.675,1638,192z"></path></svg>
  </div>
</div>
<div class="row black">
</div>
<div class="row stupid-blue">
  <div>
    <svg id="" preserveAspectRatio="xMidYMax meet" class="svg-separator sep10" viewBox="0 0 1600 200" style="display: block;" data-height="200">
<path class="" style="opacity: 1;fill: #2574a9;" d="M-16,129.803C28.268,129.803,43.874,86,74.839,86 c26.605,0,15.874,35.884-0.894,27.723c8.831,0,8.943-12.52,0.894-12.52c-12.967,0-9.167,38.455,26.829,38.455s1.409,0,1.409,0 v16.097H-16V129.803z"></path> 
<path class="" style="opacity: 1;fill: #1e8bc3;" d="M-114,123.448C-17.538,133.448,16.468,38,83.943,38 c57.974,0,34.59,78.192-1.949,60.41c19.244,0,19.487-27.282,1.949-27.282c-28.256,0-19.974,83.795,58.462,83.795s3.071,0,3.071,0 V180H-114V123.448z"></path> 
<path class="" style="opacity: 1;fill: #1e8bc3;" d="M158,172.749C238.596,172.749,267.01,93,323.386,93 c48.439,0,28.901,65.332-1.628,50.474c16.079,0,16.282-22.795,1.628-22.795c-23.609,0-16.689,70.013,48.846,70.013s2.566,0,2.566,0 L158,192V172.749z"></path> 
<path class="" style="opacity: 1;fill: #2574a9;" d="M156,160.626c53.515,0,72.381-52.953,109.815-52.953 c32.163,0,19.19,43.38-1.081,33.514c10.676,0,10.811-15.136,1.081-15.136c-15.676,0-11.081,46.488,32.433,46.488s1.704,0,1.704,0 V192H156V160.626z"></path> 
<path class="" style="opacity: 1;fill: #2574a9;" d="M-108.04,114.107c68.046,0,92.035-67.331,139.634-67.331 c40.897,0,24.4,55.159-1.375,42.615c13.575,0,13.747-19.245,1.375-19.245c-19.933,0-14.09,59.111,41.24,59.111s2.166,0,2.166,0V154 h-183.04V114.107z"></path> 
<path class="" style="fill: rgb(25, 181, 254);" d="M-4,142.333C121.654,142.333,165.952,18,253.846,18 c75.519,0,45.058,101.856-2.538,78.692c25.067,0,25.385-35.538,2.538-35.538c-36.808,0-26.019,109.154,76.154,109.154 s1276,0,1276,0V216H-4V142.333z"></path></svg>
  </div>
</div>
<div class="row dark-blue">
  <div>
    <svg id="" preserveAspectRatio="xMidYMax meet" class="svg-separator sep11" viewBox="0 0 1600 100" style="display: block;" data-height="100">
<polygon class="" style="fill: rgb(34, 49, 63);" points="-40,63.667 19.833,3.833 80,64 140,4 200,64 260,4 320,64 380,4 440,64 500,4 560,64 620,4 680,64 740,4 800,64 860,4 920,64 980,4 1040,64 1100,4 1160,64 1220,4 1280.333,64.333 1340.333,4.333 1400,64 1460,4 1520,64 1578,6 1636,64 1636,104 -40,104 "></polygon> 
<polygon class="" style="opacity: 1;fill: #f89406;" points="-40,86 20,26 80,86 140,26 200,76 260,4 200,64 140,4 80,64 19.833,3.833 -40,63.667 "></polygon> 
<polygon class="" style="opacity: 1;fill: #eb9532;" points="1159,69 1220,8 1281,73 1340,14 1399,73 1460,12 1521,73 1578,16 1634,72 1636,73.333 1636,64 1578,6 1520,64 1460,4 1400,64 1340.333,4.333 1280.333,64.333 1220,4 1160,64 1100,4 1040,64 1100,10 "></polygon></svg>
  </div>
</div>
<div class="row">
  <div>
    <svg id="" preserveAspectRatio="xMidYMax meet" class="svg-separator sep12" viewBox="0 0 1600 200" style="display: block;" data-height="200">
<polygon class="" style="fill: rgb(255, 255, 255);" points="-4,24 800,198 1604,24 1604,204 -4,204 "></polygon> 
<polygon class="" style="opacity: 1;fill: #95a5a6;" points="-4,0 800,198 1604,0 1604,11.833 800,198 -4,12 "></polygon> 
<polygon class="" style="opacity: 1;fill: #d2d7d3;" points="-4,12 -4,24 800,198 1604,24 1604,11.833 800,198 "></polygon></svg>
  </div>
  <h2>MORE COMING SOON...</br><span style="font-size:12px;font-style:italic;">(maybe...I'm a really lazy person)</span></h2>
</div>
</body>
</html>