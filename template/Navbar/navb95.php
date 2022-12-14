<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* reset */
* {
  margin: 0;
  padding: 0;
}

#wrapper {
  position: absolute;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

label {
  cursor: pointer;
}
label:focus {
  outline: none;
}

.menu {
  position: absolute;
  top: 0;
  left: 0;
  background: #fff;
  width: 240px;
  height: 100%;
  transform: translate3d(-240px, 0, 0);
  transition: transform 0.35s;
}
.menu label.menu-toggle {
  position: absolute;
  right: -60px;
  width: 60px;
  height: 60px;
  line-height: 0px;
  display: block;
  padding: 0;
  text-indent: -9999px;
  background: #fff url(https://cdn4.iconfinder.com/data/icons/wirecons-free-vector-icons/32/menu-alt-512.png) 50% 50%/25px 25px no-repeat;
}
.menu ul li > label {
  background: url(https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-arrow-right-b-128.png) 95% 50%/16px 16px no-repeat;
}
.menu ul li a, .menu ul li label {
  display: block;
  text-align: center;
  padding: 0 20px;
  line-height: 60px;
  text-decoration: none;
  color: #000;
}
.menu ul li a:hover, .menu ul li label:hover {
  color: #666;
}

/* hide inputs */          
.menu-checkbox {
  display: none;
}

/* hide navigation icon for sublabels */    
.menu .menu label.menu-toggle {
  background: none;
}

/* fade in checked menu */    
.menu-checkbox:checked + .menu {
  transform: translate3d(0, 0, 0);
}

/* for show */
html, body {
  height: 100%;
}

body {
  background: url(https://37.media.tumblr.com/f6c67ec2821a91051e4175f8a102e1e2/tumblr_n6rzpcsMk41st5lhmo1_1280.jpg) 50% 50%/cover;
}

p {
  margin-bottom: 15px;
}

#info {
  display: table;
  background: rgba(0, 0, 0, 0.4);
  height: 100%;
  width: 100%;
}
#info #info-content {
  display: table-cell;
  vertical-align: middle;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
  font-size: 12px;
}
#info #info-content h1 {
  color: #fff;
  border: 3px solid #fff;
  text-align: center;
  background: rgba(0, 0, 0, 0.1);
  font-size: 22px;
  font-weight: normal;
  padding: 20px;
  margin: 10px;
  display: inline-block;
}
#info #info-content h1 strong {
  display: block;
  font-size: 26px;
}
    </style>
</head>
<body>
<div id="wrapper">
  <div id="info">
    <div id="info-content">
      <h1>Multi level <strong>CSS-only push menu</strong></h1>
      <p>&lt;noscript&gt;No javascript required&lt;/noscript&gt;</p>
    </div>
  </div>

  <input type="checkbox" id="menu" name="menu" class="menu-checkbox">
  <div class="menu">
    <label class="menu-toggle" for="menu"><span>Toggle</span></label>
    <ul>
      <li>
        <a href="#">Menu-1</a>
      </li>
      <li>
        <a href="#">Menu-2</a>
      </li>
      <li>      
        <label for="menu-3">Menu-3</label>
        <input type="checkbox" id="menu-3" name="menu-3" class="menu-checkbox">
        <div class="menu">
          <label class="menu-toggle" for="menu-3"><span>Toggle</span></label>
          <ul>
            <li>
              <a href="#">Menu-3-1</a>
            </li>
            <li>
              <label for="menu-3-2">Menu-3-2</label>
              <input type="checkbox" id="menu-3-2" name="menu-3-2" class="menu-checkbox">
              <div class="menu">
                <label class="menu-toggle" for="menu-3-2"><span>Toggle</span></label>
                <ul>
                  <li>
                    <a href="#">Menu-3-2-1</a>
                  </li>
                  <li>
                    <a href="#">Menu-3-2-2</a>
                  </li>
                  <li>
                    <label for="menu-3-2-3">Menu-3-2-3</label>
                    <input type="checkbox" id="menu-3-2-3" name="menu-3-2-3" class="menu-checkbox">
                    <div class="menu">
                      <label class="menu-toggle" for="menu-3-2-3"><span>Toggle</span></label>
                      <ul>
                        <li>
                          <a href="#">Menu-3-2-3-1</a>
                        </li>
                        <li>
                          <a href="#">Menu-3-2-3-2</a>
                        </li>
                        <li>
                          <a href="#">Menu-3-2-3-3</a>
                        </li>
                        <li>
                          <a href="#">Menu-3-2-3-4</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a href="#">Menu-3-2-4</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="#">Menu-3-3</a>
            </li>
            <li>
              <a href="#">Menu-3-4</a>
            </li>
          </ul>
        </div>
      </li>
      <li>
        <label for="menu-4">Menu-4</label>
        <input type="checkbox" id="menu-4" name="menu-4" class="menu-checkbox">
        <div class="menu">
          <label class="menu-toggle" for="menu-4"><span>Toggle</span></label>
          <ul>
            <li>
              <a href="#">Menu-4-1</a>
            </li>
            <li>
              <a href="#">Menu-4-2</a>
            </li>
            <li>
              <a href="#">Menu-4-3</a>
            </li>
            <li>
              <a href="#">Menu-4-4</a>
            </li>
          </ul>
        </div>
      </li>      
      <li>
        <label for="menu-5">Menu-5</label>
        <input type="checkbox" id="menu-5" name="menu-5" class="menu-checkbox">
        <div class="menu">
          <label class="menu-toggle" for="menu-5"><span>Toggle</span></label>
          <ul>
            <li>
              <a href="#">Menu-5-1</a>
            </li>
            <li>
              <a href="#">Menu-5-2</a>
            </li>
            <li>
              <a href="#">Menu-5-3</a>
            </li>
            <li>
              <a href="#">Menu-5-4</a>
            </li>
          </ul>
        </div>
      </li>
      <li>
        <a href="#">Menu-6</a>
      </li>
    </ul>
  </div>
</div><!-- #wrapper -->

</body>
</html>