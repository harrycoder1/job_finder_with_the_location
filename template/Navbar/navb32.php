<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @charset "UTF-8";
.menu:before, .menu {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

li:before, .menu:before {
  font-family: "Material Icons" !important;
  font-feature-settings: "liga";
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

*, :before, :after {
  box-sizing: border-box;
  transition: 0.3s;
}

body {
  background: linear-gradient(135deg, #F93239, #DD2476);
  height: 100vh;
  margin: 0;
  font-family: Roboto;
}

.menu {
  background: #474747;
  height: 56px;
  width: 56px;
  border-radius: 5px;
  color: #E6E6E6;
  font-size: 2em;
  cursor: pointer;
}
.menu:before {
  content: "";
  font-size: inherit;
}

ul {
  background: inherit;
  padding: 0.5em 0;
  margin: 0;
  margin-top: 1em;
  border-radius: 5px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
  position: absolute;
  top: 100%;
  left: 0;
  color: inherit;
  font: 400 18px Roboto;
  white-space: nowrap;
  cursor: default;
}
ul.hidden {
  margin-top: 0.7em;
  visibility: hidden;
  opacity: 0;
}
ul:before {
  content: "";
  width: 0.75em;
  height: 0.75em;
  background: inherit;
  position: absolute;
  top: -0.375em;
  left: calc(56px / 2 - .375em);
  transform: rotate(45deg);
}

li {
  list-style: none;
  padding: 0.5em;
  padding-left: 2.5em;
  margin: 0;
  position: relative;
  cursor: pointer;
}
li:before {
  position: absolute;
  top: calc(5% + 8px);
  left: 8px;
}
li:nth-child(1):before {
  content: "";
}
li:nth-child(2):before {
  content: "";
}
li:nth-child(3):before {
  content: "";
}
li:nth-child(4):before {
  content: "";
}
li:hover {
  background: rgba(255, 255, 255, 0.08);
}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    
<div class="menu">
  <ul class="list">
    <li>Save</li>
    <li>Export to GitHub</li>
    <li>Delete</li>
    <li>Share</li>
  </ul>
</div>
<script>
    $(".menu").on("click", function () {
  $(".list").toggleClass("hidden");
});

</script>
</body>
</html>