<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
@import url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');
body {
  color: #5D5F63;
  background: #293949;
  font-family: 'Open Sans',sans-serif;
  padding: 0;
  margin: 0;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
}
.sidebar-toggle {
  margin-left: -240px;
}
.sidebar {
  width: 240px;
  height: 100%;
  background: #293949;
  position: absolute;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  -ms-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
  z-index: 100;
  #leftside-navigation {
    ul, ul ul {
      margin: -2px 0 0;
      padding: 0;
    }
    ul {
      li {
        list-style-type: none;
        border-bottom: 1px solid rgba(255,255,255,.05);
        &.active {
          & > a {
            color: #1abc9c;
          }
          ul {
            display: block;
          }
        }
        a {
          color: #aeb2b7;
          text-decoration: none;
          display: block;
          padding: 18px 0 18px 25px;
          font-size: 12px;
          outline: 0;
          -webkit-transition: all 200ms ease-in;
          -moz-transition: all 200ms ease-in;
          -o-transition: all 200ms ease-in;
          -ms-transition: all 200ms ease-in;
          transition: all 200ms ease-in;
          &:hover {
            color: #1abc9c;
          }
          span {
            display: inline-block;
          }
          i {
            width: 20px;
            .fa-angle-left, .fa-angle-right {
              padding-top: 3px;
            }
          }
        }
      }
    }
    ul ul {
      display: none;
      li {
        background: #23313f;
        margin-bottom: 0;
        margin-left: 0;
        margin-right: 0;
        border-bottom: none;
        a {
          font-size: 12px;
          padding-top: 13px;
          padding-bottom: 13px;
          color: #aeb2b7;
        }
      }
    }
  }
}
</style>
</head>

<body>
<aside class="sidebar">
  <div id="leftside-navigation" class="nano">
    <ul class="nano-content">
      <li>
        <a href="index.html"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-cogs"></i><span>UI Elements</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>

          <li><a href="ui-alerts-notifications.html">Alerts &amp; Notifications</a>
          </li>
          <li><a href="ui-panels.html">Panels</a>
          </li>
          <li><a href="ui-buttons.html">Buttons</a>
          </li>
          <li><a href="ui-slider-progress.html">Sliders &amp; Progress</a>
          </li>
          <li><a href="ui-modals-popups.html">Modals &amp; Popups</a>
          </li>
          <li><a href="ui-icons.html">Icons</a>
          </li>
          <li><a href="ui-grid.html">Grid</a>
          </li>
          <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
          </li>
          <li><a href="ui-nestable-list.html">Nestable Lists</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-table"></i><span>Tables</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="tables-basic.html">Basic Tables</a>
          </li>

          <li><a href="tables-data.html">Data Tables</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa fa-tasks"></i><span>Forms</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="forms-components.html">Components</a>
          </li>
          <li><a href="forms-validation.html">Validation</a>
          </li>
          <li><a href="forms-mask.html">Mask</a>
          </li>
          <li><a href="forms-wizard.html">Wizard</a>
          </li>
          <li><a href="forms-multiple-file.html">Multiple File Upload</a>
          </li>
          <li><a href="forms-wysiwyg.html">WYSIWYG Editor</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu active">
        <a href="javascript:void(0);"><i class="fa fa-envelope"></i><span>Mail</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li class="active"><a href="mail-inbox.html">Inbox</a>
          </li>
          <li><a href="mail-compose.html">Compose Mail</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-bar-chart-o"></i><span>Charts</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="charts-chartjs.html">Chartjs</a>
          </li>
          <li><a href="charts-morris.html">Morris</a>
          </li>
          <li><a href="charts-c3.html">C3 Charts</a></li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-map-marker"></i><span>Maps</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="map-google.html">Google Map</a>
          </li>
          <li><a href="map-vector.html">Vector Map</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="typography.html"><i class="fa fa-text-height"></i><span>Typography</span></a>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-file"></i><span>Pages</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="pages-blank.html">Blank Page</a>
          </li>
          <li><a href="pages-login.html">Login</a>
          </li>
          <li><a href="pages-sign-up.html">Sign Up</a>
          </li>
          <li><a href="pages-calendar.html">Calendar</a>
          </li>
          <li><a href="pages-timeline.html">Timeline</a>
          </li>
          <li><a href="pages-404.html">404</a>
          </li>
          <li><a href="pages-500.html">500</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</aside>
<script>
    $("#leftside-navigation .sub-menu > a").click(function(e) {
  $("#leftside-navigation ul ul").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),
  e.stopPropagation()
})
</script>
</body>
</html>