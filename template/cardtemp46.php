<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .u-center-text {
  text-align: center !important;
}

.u-margin-bottom-small {
  margin-bottom: 1.5rem !important;
}

.u-margin-bottom-medium {
  margin-bottom: 4rem !important;
}

.u-margin-top-big {
  margin-top: 5rem !important;
}

body {
  font-family: "Lato", sans-serif;
  font-weight: 400;
  line-height: 1.7;
  color: #fff;
  background: #000;
}

.heading-primary {
  color: #fff;
  text-transform: uppercase;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  margin-bottom: 6rem;
}

.heading-primary--main {
  display: block;
  font-size: 6rem;
  font-weight: 400;
  letter-spacing: 3.5rem;
  -webkit-animation-name: moveInLeft;
          animation-name: moveInLeft;
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
  -webkit-animation-timing-function: ease-out;
          animation-timing-function: ease-out;
  /*
        animation-delay: 3s;
        animation-iteration-count: 3;
        */
}

.heading-primary--sub {
  display: block;
  font-size: 2rem;
  font-weight: 700;
  letter-spacing: 1.75rem;
  -webkit-animation: moveInRight 1s ease-out;
          animation: moveInRight 1s ease-out;
}

.heading-secondary {
  font-size: 3.5rem;
  text-transform: uppercase;
  font-weight: 700;
  color: transparent;
  letter-spacing: 0.2rem;
  line-height: 1;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
  color: #eee;
}

.btn, .btn:link, .btn:visited {
  text-transform: uppercase;
  text-decoration: none;
  padding: 1.5rem 4rem;
  display: inline-block;
  border-radius: 0.5rem;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
  position: relative;
  font-size: 1.6rem;
  border: none;
  cursor: pointer;
}

.btn:hover {
  -webkit-transform: translateY(-3px);
          transform: translateY(-3px);
  -webkit-box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
          box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
}

.btn:hover::after {
  -webkit-transform: scaleX(1.4) scaleY(1.6);
          transform: scaleX(1.4) scaleY(1.6);
  opacity: 0;
}

.btn:active, .btn:focus {
  outline: none;
  -webkit-transform: translateY(-1px);
          transform: translateY(-1px);
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
}

.btn--white {
  background-color: #fff;
  color: #777;
}

.btn--white::after {
  background-color: #fff;
}

.btn--green {
  background: -webkit-gradient(linear, left top, right top, from(#fc466b), to(#3f5efb));
  background: linear-gradient(to right, #fc466b, #3f5efb);
  color: #fff;
}

.btn--green::after {
  background-color: #55c57a;
}

*,
*::after,
*::before {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: inherit;
          box-sizing: inherit;
}

html {
  font-size: 62.5%;
}

body {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

.section-plans {
  background-color: #000;
  padding: 4rem 0 4rem 0;
}

.card {
  -webkit-perspective: 150rem;
          perspective: 150rem;
  -moz-perspective: 150rem;
  position: relative;
  height: 52rem;
}

.card__side {
  height: 52rem;
  -webkit-transition: all 0.8s ease;
  transition: all 0.8s ease;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  border-radius: 3px;
  overflow: hidden;
  -webkit-box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15);
          box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15);
}

.card__side--front {
  background-color: #fff;
}

.card__side--front-1 {
  background: linear-gradient(-45deg, #f403d1, #64b5f6);
}

.card__side--front-2 {
  background: linear-gradient(-45deg, #f321d7, #ffec61);
}

.card__side--front-3 {
  background: linear-gradient(-45deg, #24ff72, #9a4eff);
}

.card__side--back {
  -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
}

.card__side--back-1 {
  background: linear-gradient(-45deg, #64b5f6, #f403d1);
}

.card__side--back-2 {
  background: linear-gradient(-45deg, #ffec61, #f321d7);
}

.card__side--back-3 {
  background: linear-gradient(-45deg, #9a4eff, #24ff72);
}

.card:hover .card__side--front-1,
.card:hover .card__side--front-2,
.card:hover .card__side--front-3 {
  -webkit-transform: rotateY(-180deg);
          transform: rotateY(-180deg);
}

.card:hover .card__side--back {
  -webkit-transform: rotateY(0);
          transform: rotateY(0);
}

.card__title {
  height: 20rem;
  padding: 4rem 2rem 2rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.card__title--1 .fas {
  font-size: 5rem;
}

.card__title--2 .fas {
  font-size: 5rem;
}

.card__title--3 .fas {
  font-size: 5rem;
}

.card__heading {
  font-size: 4rem;
  font-weight: 300;
  text-transform: uppercase;
  text-align: center;
  color: #fff;
  width: 75%;
}

.card__heading-span {
  padding: 1rem 1.5rem;
  -webkit-box-decoration-break: clone;
  box-decoration-break: clone;
}

.card__details {
  padding: 0 2rem 2rem;
}

.card__details ul {
  list-style: none;
  width: 80%;
  margin: 0 auto;
}

.card__details ul li {
  text-align: center;
  font-size: 1.5rem;
  padding: 1rem;
}

.card__details ul li:not(:last-child) {
  border-bottom: 1px solid #eee;
}

.card__cta {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  width: 90%;
  text-align: center;
}

.card__price-box {
  text-align: center;
  color: #fff;
  margin-bottom: 8rem;
}

.card__price-only {
  font-size: 1.4rem;
  text-transform: uppercase;
}

.card__price-value {
  font-size: 6rem;
  font-weight: 100;
}

.row {
  max-width: 114rem;
  margin: 0 auto;
}

.row:not(:last-child) {
  margin-bottom: 5rem;
  margin-top: 5rem;
}

.row::after {
  content: "";
  display: table;
  clear: both;
}

.row [class^="col-"] {
  float: left;
}

.row [class^="col-"]:not(:last-child) {
  margin-right: 6rem;
}

.row .col-1-of-3 {
  width: calc((100% - 2 * 6rem) / 3);
}

    </style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://kit.fontawesome.com/bdd89edb33.js"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <title>Flipping Cards</title>
  </head>
  <body>
    <section class="section-plans" id="section-plans">
      <div class="u-center-text u-margin-bottom-big">
        <h2 class="heading-secondary">
          Hosting Plans
        </h2>
      </div>

      <div class="row">
        <div class="col-1-of-3">
          <div class="card">
            <div class="card__side card__side--front-1">
              <div class="card__title card__title--1">
                <i class="fas fa-paper-plane"></i>
                <h4 class="card__heading">Basic</h4>
              </div>

              <div class="card__details">
                <ul>
                  <li>1 Website</li>
                  <li>50 GB SSD Storage</li>
                  <li>Unmetered Bandwidth</li>
                  <li>Free SSL Certificate</li>
                  <li>1 Included Domain</li>
                  <li>1 Included Domain</li>
                </ul>
              </div>
            </div>
            <div class="card__side card__side--back card__side--back-1">
              <div class="card__cta">
                <div class="card__price-box">
                  <p class="card__price-only">Only</p>
                  <p class="card__price-value">$2.95/mo*</p>
                </div>
                <a href="#popup" class="btn btn--white">Select</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-1-of-3">
          <div class="card">
            <div class="card__side card__side--front-2">
              <div class="card__title card__title--2">
                <i class="fas fa-plane"></i>
                <h4 class="card__heading">Plus</h4>
              </div>

              <div class="card__details">
                <ul>
                  <li>Includes Basic Package Features</li>
                  <li>Unlimited Websites</li>
                  <li>Unlimited SSD Storage</li>
                  <li>Unlimited Domains</li>
                  <li>Unlimited Parked Domains</li>
                  <li>Unlimited Sub Domains</li>
                </ul>
              </div>
            </div>
            <div class="card__side card__side--back card__side--back-2">
              <div class="card__cta">
                <div class="card__price-box">
                  <p class="card__price-only">Only</p>
                  <p class="card__price-value">$5.45/mo*</p>
                </div>
                <a href="#popup" class="btn btn--white">Select</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-1-of-3">
          <div class="card">
            <div class="card__side card__side--front-3">
              <div class="card__title card__title--3">
                <i class="fas fa-rocket"></i>
                <h4 class="card__heading">Pro</h4>
              </div>

              <div class="card__details">
                <ul>
                  <li>Includes Plus Plan Features</li>
                  <li>High Performance</li>
                  <li>2 Spam Experts</li>
                  <li>Free SSL Certificate</li>
                  <li>Domain Privacy</li>
                  <li>Site Backup - CodeGuard Basic</li>
                </ul>
              </div>
            </div>
            <div class="card__side card__side--back card__side--back-3">
              <div class="card__cta">
                <div class="card__price-box">
                  <p class="card__price-only">Only</p>
                  <p class="card__price-value">$13.95/mo</p>
                </div>
                <a href="#popup" class="btn btn--white">Select</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="u-center-text u-margin-top-huge">
        <a href="#" class="btn btn--green">Get Started</a>
      </div>
    </section>
  </body>
</html>
</body>
</html>