<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500,700);
body {
  background-color: #e3e7f3;
  height: 100vh;
  overflow: hidden;
  font-family: "Roboto", sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
}

.menu {
  position: relative;
  padding: 5px;
  width: 245px;
  display: flex;
  background: linear-gradient(135deg, #9a0dfe, #637dfb);
  box-shadow: 0 2px 12px 0 rgba(91, 41, 191, 0.5);
  border-radius: 4px;
}

.fa {
  font-size: 24px;
  position: relative;
  top: 3px;
  opacity: 0.7;
}

.fa-cog {
  position: relative;
  left: 3px;
}

.menu_text {
  padding-left: 10px;
}

.menu_box {
  background: #000;
  box-shadow: 0 2px 12px 0 rgba(91, 41, 191, 0.5);
  border-radius: 4px;
  position: absolute;
  bottom: calc(100% + 14px);
  left: 0;
  width: 100px;
  padding: 10px;
  opacity: 0;
  -moz-transform: translateY(100%) translateX(-30%) scale(0.1);
  -ms-transform: translateY(100%) translateX(-30%) scale(0.1);
  -webkit-transform: translateY(100%) translateX(-30%) scale(0.1);
  transform: translateY(100%) translateX(-30%) scale(0.1);
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
}
.menu_box:after {
  content: "";
  position: absolute;
  left: 20px;
  bottom: -20px;
  border: 10px solid transparent;
  border-top: 10px solid #000;
}

.menu_list {
  color: #fff;
  font-size: 14px;
  line-height: 18px;
  opacity: 0.7;
}

.menu_label {
  position: relative;
  cursor: pointer;
  font-size: 20px;
  line-height: 30px;
  text-transform: uppercase;
  color: #fff;
  width: 44px;
  overflow: hidden;
  display: flex;
  padding: 0 10px;
  border-radius: 4px;
  background-color: rgba(255, 255, 255, 0);
  box-sizing: border-box;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.menu_label:hover .fa {
  opacity: 1;
}

.menu_text {
  opacity: 0;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.menu_input[type=radio] {
  display: none;
}
.menu_input[type=radio]:checked + .menu_label {
  background-color: rgba(255, 255, 255, 0.3);
  width: 112px;
}
.menu_input[type=radio]:checked + .menu_label .fa {
  opacity: 1;
}
.menu_input[type=radio]:checked + .menu_label .menu_text {
  opacity: 1;
}
.menu_input[type=radio]:checked + .menu_label + .menu_box {
  opacity: 1;
  -moz-transform: translateY(0) translateX(0) scale(1);
  -ms-transform: translateY(0) translateX(0) scale(1);
  -webkit-transform: translateY(0) translateX(0) scale(1);
  transform: translateY(0) translateX(0) scale(1);
}

.rabbit {
  width: 50px;
  height: 50px;
  position: absolute;
  bottom: 20px;
  right: 20px;
  z-index: 3;
  fill: #fff;
}

    </style>
</head>
<body>
<div class="menu">
  <input checked="" class="menu_input" id="btn1" name="menu" type="radio" /><label class="menu_label" for="btn1">
    <div class="fa fa-bars"></div>
    <div class="menu_text">
      menu
    </div>
  </label>
  <div class="menu_box">
    <div class="menu_list">
      About Us
    </div>
    <div class="menu_list">
      Contact Us
    </div>
  </div>
  <input class="menu_input" id="btn2" name="menu" type="radio" /><label class="menu_label" for="btn2">
    <div class="fa fa-user"></div>
    <div class="menu_text">
      users
    </div>
  </label><input class="menu_input" id="btn3" name="menu" type="radio" /><label class="menu_label" for="btn3">
    <div class="fa fa-comments"></div>
    <div class="menu_text">
      chat
    </div>
  </label><input class="menu_input" id="btn4" name="menu" type="radio" /><label class="menu_label" for="btn4">
    <div class="fa fa-cog"></div>
    <div class="menu_text">
      edit
    </div>
  </label>
</div>
<a class="box-item" href="https://codepen.io/Anna_Batura/" target="_blank"><svg class="rabbit" version="1.2" viewBox="0 0 600 600"><path d="m 335.94313,30.576451 c -9.79312,-0.146115 -17.39091,4.439466 -17.39091,13.789758 0,11.508038 -2.91019,60.415461 1.40532,76.238951 4.31553,15.82355 21.58583,38.97215 34.51834,54.67597 10.06946,12.22726 4.34772,41.69626 4.34772,56.0813 0,14.38499 -2.89751,25.9107 -8.65153,25.9107 -5.75402,0 -14.35971,5.75217 -20.11373,11.50612 -5.75395,5.75402 -11.51588,12.95631 -18.70841,7.20229 -7.19251,-5.75402 -20.15388,-11.49441 -43.16987,-15.80992 -23.01609,-4.31551 -61.84129,-0.0234 -86.29583,8.60763 -24.45458,8.63104 -76.25857,56.11061 -90.643535,77.6882 -14.385056,21.5775 -15.799189,87.73247 -14.36068,97.80193 1.438509,10.06953 -2.908267,17.28255 -10.100778,8.65153 -7.192459,-8.63104 -12.911438,-4.30381 -12.911438,-4.30381 0,0 -7.202292,14.37045 -7.202292,21.56298 0,7.19244 2.854564,14.36068 2.854564,14.36068 0,0 -11.506099,8.65056 -11.506099,14.40458 0,5.75397 11.515881,15.83044 18.708391,24.46146 7.192546,8.63097 31.651182,25.89997 41.720624,24.46148 10.069543,-1.43851 28.775063,-0.0121 35.967573,4.3038 7.19253,4.31551 24.44687,10.06761 46.02443,11.5061 21.57752,1.43851 81.97845,5.75307 97.80193,5.75307 15.82357,0 20.1675,-2.86435 27.35996,-10.05688 7.19253,-7.19245 -5.78527,-15.84115 -10.10079,-25.9107 -4.31551,-10.06946 14.40363,-7.16912 20.15765,-8.60763 5.75402,-1.43849 21.59424,-11.5061 31.66376,-11.5061 10.06953,0 8.6165,10.05589 21.56298,15.80993 12.94654,5.75393 31.63939,24.43902 46.02443,27.31602 14.38497,2.87695 47.47173,0.0121 58.97979,-4.30381 11.50797,-4.31551 10.06946,-14.37044 0,-21.56297 -10.06955,-7.19244 -34.50663,-20.16742 -38.82214,-27.35994 -4.31551,-7.19246 -5.74329,-15.81969 1.44924,-23.01224 7.19251,-7.19252 14.35876,-4.30292 25.86678,-10.05685 11.50806,-5.75402 15.80992,-23.04354 15.80992,-33.11301 0,-10.06953 1.36928,-21.01352 5.75307,-27.31602 3.67345,-5.28128 5.10015,-22.13212 5.30499,-33.64009 0.21874,-12.28864 -5.29329,-15.24871 -9.60881,-22.44122 -4.31543,-7.19246 4.30285,-17.25917 10.05687,-17.25917 5.75402,0 31.65108,-4.33602 41.72062,-8.65153 10.06946,-4.31546 20.16744,-23.03273 27.35995,-31.66377 7.19246,-8.63095 1.41799,-27.31512 -8.65154,-33.06907 -10.06954,-5.75402 -10.07746,-21.59431 -18.70841,-31.66377 -8.63103,-10.06953 -18.68507,-31.62961 -27.31604,-38.82213 -8.63101,-7.19253 -28.77502,-12.95535 -35.96755,-12.95535 -7.19253,0 -11.50612,9e-4 -11.50612,-5.75306 0,-5.75402 -1.44924,-12.9203 -1.44924,-25.86678 0,-12.94655 -16.24344,-68.464566 -37.3729,-102.149659 -4.40799,-7.027282 -11.5581,-5.405316 -20.15765,-2.898485 -5.69412,1.659863 -8.60761,4.35564 -8.60761,23.056136 0,18.700566 -11.50515,-0.03133 -17.25917,-10.100794 -5.75403,-10.069512 -15.86265,-21.58444 -28.80918,-24.461458 -2.42749,-0.539415 -4.76669,-0.800692 -7.02665,-0.834399 z" id="rabbit"></path></svg></a>
</body>
</html>