<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        [class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}

body {
  background: #ececec;
  overflow: hidden;
  user-select: none;
}

#Button {
  position: absolute; top: 15px; left: 15px;
  width: 60px; height: 60px;
  font-size: 18px; 
  text-align: center; 
  line-height: 60px; 
  background: #e74c3c;
  border-radius: 50%;
  color: #ececec;
  cursor: pointer;
  z-index: 1;
}

.Nav {
  position: absolute; 
  margin: auto; 
  top: 0; right: 0; bottom: 0; left: 0;
  width: 302px; height: 302px;
  font-size: 0;
  transform: scale(0);
  transition: transform 0.8s;
  box-shadow: 0px 0px 10px #999;
  z-index: 1;
}

a {
  display: inline-block;
  width: 150px; height: 150px;
  font-size: 28px; 
  text-decoration: none; 
  line-height: 150px; 
  text-align: center;
/*   text-shadow: 2px 2px 4px #666;  */
  color: #fff;
}

a:nth-of-type(odd) { margin-right: 2px; }
a:nth-child(1) { margin-bottom: 2px; background: #1abc9c; }
a:nth-child(2) { background: #2ecc71; }
a:nth-child(3) { background: #3498db; }
a:nth-child(4) { background: #9b59b6; }

.active {
  transform: scale(1);
}

canvas { position: absolute; }
    </style>
</head>
<body>
<div id="Button" class="fas fa-fire"></div>

<div class="Nav">
  <a href="#"><span class="fas fa-home"></span></a>
  <a href="#"><span class="fas fa-user"></span></a>
  <a href="#"><span class="fas fa-upload"></span></a>
  <a href="#"><span class="fas fa-wrench"></span></a>
</div>

<canvas></canvas>


<script>
    var canvas = $('canvas')[0];
var context = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

var Projectile;
var State = false;
var Explode = false;
var Collapse = false;
var Particles = [];

var colors = ["#1abc9c", "#2ecc71", "#3498db", "#9b59b6", "#9b59b6", "#f1c40f", "#e67e22", "#e74c3c"];

function Proj() {
  this.radius = 5.2;
  this.x = Math.random() * canvas.width;
  this.y = canvas.height + this.radius;
  this.color = "#e74c3c";
  this.velocity = {x: 0, y: 0};
  this.speed = 12;
}

Proj.prototype = {
  Update: function() {
    if(this.x > (canvas.width / 2) && this.x - (canvas.width / 2) <= 10 || this.x < (canvas.width / 2) && (canvas.width / 2) - this.x <= 10) {
      Explode = true;
      $('.Nav').addClass('active');
    } else {
      this.dx = (canvas.width / 2) - this.x;
      this.dy = (canvas.height / 2) - this.y;
      this.distance = Math.sqrt(this.dx * this.dx + this.dy * this.dy);
      this.velocity.x = (this.dx/this.distance) * this.speed;
      this.velocity.y = (this.dy/this.distance) * this.speed;
      this.x += this.velocity.x;
      this.y += this.velocity.y;
    }
  },

  Draw: function() {
    context.beginPath();
    context.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
    context.fillStyle = this.color;
    context.fill();
    context.closePath();
  }
};

function Particle() {
  this.x = canvas.width / 2;
  this.y = canvas.height / 2;
  this.radius = 4;
  this.color = colors[Math.round(Math.random() * (colors.length + 1))];

  this.velocity = {x: (Math.random() < 0.5 ? -1 : 1) * Math.random() * 10, y: (Math.random() < 0.5 ? -1 : 1) * Math.random() * 10};
  this.speed = 25;
  this.active = true;
}

Particle.prototype = {
  Update: function() {
    if(Collapse) {
      this.dx = (canvas.width / 2) - this.x;
      this.dy = (canvas.height / 2) - this.y;
      this.distance = Math.sqrt(this.dx * this.dx + this.dy * this.dy);
      this.velocity.x = (this.dx/this.distance) * this.speed;
      this.velocity.y = (this.dy/this.distance) * this.speed;
      this.x += this.velocity.x;
      this.y += this.velocity.y;

      if(this.x > (canvas.width / 2) && this.x - (canvas.width / 2) <= 15 || this.x < (canvas.width / 2) && (canvas.width / 2) - this.x <= 15) {
        if(this.y > (canvas.height / 2) && this.y - (canvas.height / 2) <= 15 || this.y < (canvas.height / 2) && (canvas.height / 2) - this.y <= 15) {
          this.active = false;
        }
      }
    } else {
      this.x += this.velocity.x;
      this.y += this.velocity.y;
    }
  },

  Draw: function() {
    context.beginPath();
    context.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
    context.lineWidth = 2.2;
    context.strokeStyle = this.color;
    context.stroke();
    context.closePath();
  }
};

function Update() {
  if(Particles.length < 100) {
    for(var x = Particles.length; x < 100; x++) {
      Particles.push(new Particle());
    }
  }
  
  if(Explode || Collapse) {
    Particles.forEach(function(particle) {
      particle.Update();
    });
  }

  Particles = Particles.filter(function(particle) {
    return particle.active;
  });

  if(State && !Explode) {
    Projectile.Update();
  }

  Render();
  requestAnimationFrame(Update);
}

function Render() {
  context.clearRect(0, 0, canvas.width, canvas.height);

  if(Collapse || Explode) {
    Particles.forEach(function(particle) {
      particle.Draw();
    });
  }

  if(State && !Explode) {
    Projectile.Draw();
  }
}

$('#Button').click(function() {
  State = !State;

  if(Explode && State == false) { 
    Collapse = true;
  } else {
    Collapse = false;
    Particles = [];
  }

  if(State) {
    Projectile = new Proj();
  } else {
    Projectile = null;
    Explode = false;
  }

  if(!State) {
    $('.Nav').removeClass('active');
  }
  $(this).toggleClass('fa-fire');
  $(this).toggleClass('fa-times');
});

$(document).ready(function() {
  Update();
});

$(window).resize(function() {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
});

</script>

</body>
</html>