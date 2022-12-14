<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800%7CRaleway:100,200,300,400,600,700,800,900%7CMontserrat:100,200,300,400,500,600,700,800,900');
.box-shadow {
  box-shadow: 0px 0px 18px -3px rgba(143, 143, 143, 0.5);
}
.card:hover {
  box-shadow: 0px 0px 20px -3px rgba(143, 143, 143, 0.75);
}
.box-shadow-dark {
  box-shadow: 3px 3px 11px -3px rgba(0, 0, 0, 0.25);
}
body {
  background-color: yellow;
  font-family: 'Open Sans', Arial, Verdana;
}
section {
  padding-top: 2rem;
  padding-bottom: 2rem;
}
h6 {
  color: #990000;
}
.font-weight-bolder {
  font-weight: 900;
}
.display-1, .display-2, .display-3, .display-4 {
  font-weight: 900;
}
.heading-big {
  font-weight: 800;
  text-transform: uppercase;
  color: red;
  margin: 0;
  padding: 0.15rem 0;
  line-height: 1.2;
  font-size: 2rem;
  transition: color 0.5s ease-in, border-color 0.5s ease-in-out;
}
.heading-big-square {
  padding: 1rem 1rem;
  border: 10px solid red;
  margin: 0.5rem auto 1rem auto;
}
.heading-big:hover {
  color: #ff9900;
  border-color: #ff9900;
}
.card {
  transition: 0.5s ease;
  border-radius: 0;
  transform: perspective(3em) rotateX(0deg) rotateY(-1.175deg) rotateZ(-1deg);
}
.card-header {
  border-radius: 0;
}
.card-footer {
  padding-top: 1rem;
  padding-bottom: 1rem;
}
.card-header, .card-footer {
  transition: 0.5s ease;
}
.card:hover {
  border-color: #ffc107;
  transform: perspective(0em) rotateX(0deg) rotateY(0deg) rotateZ(0deg);
}
.card:hover .card-header, .card:hover .card-footer {
  color: #ba8b00;
  border-color: #ffc107;
  background-color: #ffeeba;
}
.card:hover .promotion-promo {
  transform: scale(1.175) translateY(2.5px);
  transform-origin: left center;
}
.card:hover .promotion-price {
  transform: translate(2.5px, 17.5px) scale(1.15);
  transform-origin: center right;
}
.card-body {
  position: relative;
  z-index: 0;
  overflow: hidden;
  padding-top: 2rem;
  padding-bottom: 2rem;
}
.card .btn {
  font-weight: bold;
  text-transform: uppercase;
}
.promotion-promo {
  font-weight: 700;
  font-size: 1.15rem;
  color: #ffc107;
  font-family: 'Montserrat', sans-serif;
  text-decoration: line-through;
  transition: 0.25s linear;
}
.promotion-price {
  position: absolute;
  bottom: 0;
  right: 0;
  background: #ffc107;
  width: 92px;
  height: 92px;
  padding-bottom: 0rem;
  padding-top: 1.25rem;
  text-align: center;
  font-weight: 700;
  font-family: 'Montserrat', sans-serif;
  font-size: 1.1rem;
  border-radius: 5rem;
  color: #fff;
  z-index: -1;
  transform: translate(5px, 27.5px) rotate(-9deg);
  border: 1px dashed #fff;
  transition: 0.25s linear;
  line-height: 1.15;
}
.promotion-price-desc {
  padding: 0;
  margin: 0 auto;
  text-transform: uppercase;
  font-size: 0.9rem;
  display: block;
}
.promotion-price-text {
  padding: 0;
  margin: 0 auto;
  font-weight: 900;
}
.card-animate {
  counter-reset: section;
}
.card-animate .card-body:before {
  transition: 0.5s ease;
  counter-increment: section;
  content: "" counter(section) "";
  display: block;
  font-size: 15rem;
  font-weight: 900;
  position: absolute;
  bottom: 5rem;
  line-height: 0;
  left: -0.85rem;
  padding: 0;
  margin: 0;
  color: rgba(0, 0, 0, 0.1);
  z-index: 0;
}
.card-animate .card:hover .card-body:before {
  transform: translate(10px, -10px);
}
.card-animate .card-text {
  margin-top: 2rem;
  margin-bottom: 2rem;
}
.card-animate .card-title {
  font-weight: 900;
  text-transform: uppercase;
}

    </style>
</head>
<body>
    <!-- HTML Setup -->
<section>
	<!-- heading -->
	<div class="container">
		<div class="row">			
			<div class="mx-auto">
				<div class="col-lg-12">				
					<h1 class="display-2 heading-big heading-big-square text-center">Hover Cards Transition Animation</h1>										
				</div>
			</div>
		</div>
	</div>
	
	<!-- cards -->
	<div class="container">
		<div class="row">			
			<div class="mx-auto">
				<div class="col-lg-12">
					<div class="text-center my-3">
						<h6 class="text-center my-5">Transform Transition cards samples</h6>						
						<div class="card-deck no-gutters">

							<div class="col-12 col-sm-6 col-md-6 col-lg-3">
								<div class="card h-100 mb-4">                    
									<div class="card-header">                                
										<h5 class="card-title m-0 p-0 font-weight-bolder text-secondary">Connected Devices and Sensors</h5>
									</div>
									<div class="card-body text-left">
										<p class="card-text">Arduino, Raspbery, Watson or Adafruit </p>
										<span class="font-lead-base font-weight-bold text-muted">20% Off!</span>
										<div class="promotion-promo">$ 11.5</div>
										<div class="promotion-price">
											<div class="promotion-price-desc">Now</div>
											<div class="promotion-price-text">$ 9.5</div>                                    
										</div>
									</div>
									<div class="card-footer"><a href="#" class="btn btn-warning">Order</a></div>
								</div>
							</div>

							<div class="col-12 col-sm-6 col-md-6 col-lg-3">
								<div class="card h-100 mb-4">                    
									<div class="card-header">                                
										<h5 class="card-title m-0 p-0 font-weight-bolder text-secondary">IOT Big Data Analytics</h5>
									</div>
									<div class="card-body text-left">
										<p class="card-text">Big Data and Analytics Dashboard for sensor projects.</p>
										<span class="font-lead-base font-weight-bold text-muted">20% Off!</span>
										<div class="promotion-promo">$ 22.23</div>
										<div class="promotion-price">
											<div class="promotion-price-desc">Now</div>
											<div class="promotion-price-text">$ 20.23</div>                                    
										</div>
									</div>
									<div class="card-footer"><a href="#" class="btn btn-warning">Order</a></div>
								</div>
							</div>

							<div class="col-12 col-sm-6 col-md-6 col-lg-3">
								<div class="card h-100 mb-4">                    
									<div class="card-header">                                
										<h5 class="card-title m-0 p-0 font-weight-bolder text-secondary">Device Data Counter Status</h5>
									</div>
									<div class="card-body text-left">
										<p class="card-text">Up to 500 registered devices, data analyzed per month.</p>
										<span class="font-lead-base font-weight-bold text-muted">20% Off!</span>
										<div class="promotion-promo">$ 12.2</div>
										<div class="promotion-price">
											<div class="promotion-price-desc">Now</div>
											<div class="promotion-price-text">$ 10.2</div>                                    
										</div>
									</div>
									<div class="card-footer"><a href="#" class="btn btn-warning">Order</a></div>
								</div>
							</div>

							<div class="col-12 col-sm-6 col-md-6 col-lg-3">
								<div class="card h-100 mb-4">                    
									<div class="card-header">                                
										<h5 class="card-title m-0 p-0 font-weight-bolder text-secondary">Enterprise Edition Package</h5>
									</div>
									<div class="card-body text-left">
										<p class="card-text">All features with cloud storage and Full support.</p>
										<span class="font-lead-base font-weight-bold text-muted">20% Off!</span>
										<div class="promotion-promo">$ 10</div>
										<div class="promotion-price">
											<div class="promotion-price-desc">Now</div>
											<div class="promotion-price-text">$ 8</div>                                    
										</div>
									</div>
									<div class="card-footer"><a href="#" class="btn btn-warning">Order</a></div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- cards::before -->
	<div class="container">
		<h6 class="text-center my-5">Transform Transition cards background samples</h6>
		<div class="row">
			<div class="col-lg-12">
				<div class="row card-animate">
					<div class="col-4">
						<div class="card border">								
							<div class="card-body">
								<div class="card-title">
									Card Title 1
								</div>
								<p class="card-text">Card Body</p>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card border">								
							<div class="card-body">
								<div class="card-title">
									Card Title 2
								</div>
								<p class="card-text">Card Body</p>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card border">								
							<div class="card-body">
								<div class="card-title">
									Card Title 3
								</div>
								<p class="card-text">Card Body</p>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>		
	</div>
</section>
</body>
</html>