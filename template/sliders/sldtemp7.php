<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  width: 100% !important;
  height: 100% !important;
  padding: 0;
  -webkit-text-size-adjust: none;
  /* stop WebKit and Windows mobile changing text size */
  -ms-text-size-adjust: 100%;
  /* stop WebKit and Windows mobile changing text size */
  margin: 0 auto !important;
  /* fix email not centered on Android 4.4 + Samsung Mail */
  background: #ececec;
}

table {
  border-collapse: collapse !important;
  mso-table-lspace: 0pt;
  mso-table-rspace: 0pt;
}

/* Remove spacing between tables in Outlook 2007 and up */

img {
  border: 0;
  line-height: 100%;
  outline: none;
  text-decoration: none;
  -ms-interpolation-mode: bicubic;
  /* smoother resized images in Internet Explorer */
}


@media screen and (max-width: 580px) {
  /* centre on gmail iphone */
  .container {
    width: 100vw !important;
  }

  .rwd-line {
    display: block;
  }

  .center {
    margin: 0 auto !important;
    text-align: center !important;
  }
  .img {
    width: 100% !important;
    height: auto !important;
  }
  .width100 {
    width: 100% !important;
  }
  .mobilehide {
    display: none !important;
  }
}

/* CAROUSEL STYLES */
.carousel-container,
input {
  display: none;
}

@media screen and (-webkit-min-device-pixel-ratio: 0), screen and (min--moz-device-pixel-ratio: 0) {
  @supports (color: #ffffff) {
    .fallback {
      display: none !important;
    }

    .carousel-container,
    .carousel-viewport {
      display: block !important;
      width: 600px;
      height: 400px;
    }

    .carousel-viewport {
      background-image: url("https://source.unsplash.com/random/1800x1200");
      background-size: 1800px 1200px;
      background-position: center center;
      transition: background-position 0.3s linear;
      -webkit-transition: background-position 0.3s linear;
    }

    /* Nav markers */
    .slide {
      display: none;
      width: 600px;
      height: 400px;
      position: relative;
      animation: fadeIn linear 0.7s;
      -webkit-animation: fadeIn linear 0.7s;
    }
    .slide label {
      position: absolute;
      width: 28px;
      height: 52px;
      font-size: 50px;
      color: #fff;
    }

    .slide label img {
      width: 100%;
      animation: pulse 1.5s ease-in-out infinite;
      -webkit-animation: pulse 1.5s ease-in-out infinite;
    }

    label.up {
      top: 10px;
      left: 50%;
      transform: translateX(-50%) rotate(-90deg);
      -webkit-transform: translateX(-50%) rotate(-90deg);
    }
    label.left {
      top: 50%;
      left: 10px;
      transform: translateY(-50%) rotate(-180deg);
      -webkit-transform: translateY(-50%) rotate(-180deg);
    }
    label.right {
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      -webkit-transform: translateY(-50%);
    }
    label.down {
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%) rotate(90deg);
      -webkit-transform: translateX(-50%) rotate(90deg);
    }

    /* CHECK CONTROLS */
    #slide1:checked ~ div .slide-tl {
      display: block !important;
    }
    #slide1:checked ~ .carousel-viewport {
      background-position: left top;
    }

    #slide2:checked ~ div .slide-tc {
      display: block !important;
    }
    #slide2:checked ~ .carousel-viewport {
      background-position: center top;
    }

    #slide3:checked ~ div .slide-tr {
      display: block !important;
    }
    #slide3:checked ~ .carousel-viewport {
      background-position: right top;
    }

    #slide4:checked ~ div .slide-ml {
      display: block !important;
    }
    #slide4:checked ~ .carousel-viewport {
      background-position: left center;
    }

    #slide5:checked ~ div .slide-mid {
      display: block !important;
    }
    #slide5:checked ~ .carousel-viewport {
      background-position: center center;
    }

    #slide6:checked ~ div .slide-mr {
      display: block !important;
    }
    #slide6:checked ~ .carousel-viewport {
      background-position: right center;
    }

    #slide7:checked ~ div .slide-bl {
      display: block !important;
    }
    #slide7:checked ~ .carousel-viewport {
      background-position: left bottom;
    }

    #slide8:checked ~ div .slide-bc {
      display: block !important;
    }
    #slide8:checked ~ .carousel-viewport {
      background-position: center bottom;
    }

    #slide9:checked ~ div .slide-br {
      display: block !important;
    }
    #slide9:checked ~ .carousel-viewport {
      background-position: right bottom;
    }

    @media screen and (max-width: 580px) {
      .carousel-container,
      .carousel-viewport,
      .slide {
        width: 100vw !important;
        height: 66vw !important;
      }

      .carousel-viewport {
        background-size: 300vw 198vw !important;
      }
    }

    /* fallbacks */
    div[class~="aolmail_fallback"],
    #MessageViewBody .fallback {
      display: block !important;
    }

    div[class~="aolmail_carousel-container"],
    #MessageViewBody .carousel-container {
      display: none !important;
    }

    @keyframes pulse {
      0% {
        transform: scale(1, 1);
      }
      50% {
        transform: scale(1.1, 1.1);
      }
      100% {
        transform: scale(1, 1);
      }
    }
    @-webkit-keyframes pulse {
      0% {
        -webkit-transform: scale(1, 1);
      }
      50% {
        -webkit-transform: scale(1.1, 1.1);
      }
      100% {
        -webkit-transform: scale(1, 1);
      }
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

    @-webkit-keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }
  }
}

    </style>
</head>
<body>
<table role="presentation" align="center" bgcolor="#ececec" border="0" cellpadding="0" cellspacing="0" width="100%" class="container">
  <tr>
    <td align="center">

      <!--[if (gte mso 9)|(IE)]>
		<table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
		<tr>
		<td align="center" valign="top" width="600">
		<![endif]-->
      <table role="presentation" bgcolor="#ffffff" width="100%" style="max-width:600px;border: solid 1px #d0d0d0" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="font-family: Arial, sans-serif; font-size: 11px;color:#575756; padding: 10px 0" align="center">
            <a href="#" target="_blank" style="color:#575756; text-decoration:underline">View in browser</a>
          </td>
        </tr>
        <tr>
          <td valign="top" align="center">

            <!-- FALLBACK HERO - STATIC IMAGE -->
            <div class="fallback">
              <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                <tr>
                  <td valign="top" align="center" style="font-size: 20px;font-family:Arial, Helvetica, sans-serif;">
                    <a href="#" target="_blank" style="color:#1a2b68">
                        <img src="https://source.unsplash.com/random/600x400" alt="Alt" style="display:block; border:none;" width="600" height="400" class="img">
                      </a>
                  </td>
                </tr>
              </table>
            </div>

            <!-- CAROUSEL -->
            <!--[if !mso]><!-- -->
            <div class="carousel-container" style="display:none">
              <input type="radio" name="slide" id="slide1">
              <input type="radio" name="slide" id="slide2">
              <input type="radio" name="slide" id="slide3">
              <input type="radio" name="slide" id="slide4">
              <input type="radio" name="slide" id="slide5" checked>
              <input type="radio" name="slide" id="slide6">
              <input type="radio" name="slide" id="slide7">
              <input type="radio" name="slide" id="slide8">
              <input type="radio" name="slide" id="slide9">
              <div class="carousel-viewport">
                <div class="slide slide-tl">
                  <label for="slide2" class="right">
                      &rrarr;
                    </label>
                  <label for="slide4" class="down">
                      &rrarr;
                    </label>
                </div>
                <div class="slide slide-tc">
                  <label for="slide1" class="left">
                      &rrarr;
                    </label>
                  <label for="slide5" class="down">
                      &rrarr;
                    </label>
                  <label for="slide3" class="right">
                      &rrarr;
                    </label>
                </div>
                <div class="slide slide-tr">
                  <label for="slide2" class="left">
                      &rrarr;
                    </label>
                  <label for="slide6" class="down">
                      &rrarr;
                    </label>
                </div>
                <div class="slide slide-ml">
                  <label for="slide1" class="up">
                      &rrarr;
                    </label>
                  <label for="slide5" class="right">
                      &rrarr;
                    </label>
                  <label for="slide7" class="down">
                      &rrarr;
                    </label>
                </div>
                <div class="slide slide-mid">
                  <label for="slide4" class="left">
                     &rrarr;
                    </label>
                  <label for="slide2" class="up">
                      &rrarr;
                    </label>
                  <label for="slide6" class="right">
                      &rrarr;
                    </label>
                  <label for="slide8" class="down">
                      &rrarr;
                    </label>
                </div>
                <div class="slide slide-mr">
                  <label for="slide3" class="up">
                      &rrarr;
                    </label>
                  <label for="slide5" class="left">
                      &rrarr;
                    </label>
                  <label for="slide9" class="down">
                      &rrarr;
                    </label>
                </div>
                <div class="slide slide-bl">
                  <label for="slide4" class="up">
                      &rrarr;
                    </label>
                  <label for="slide8" class="right">
                      &rrarr;
                    </label>
                </div>
                <div class="slide slide-bc">
                  <label for="slide7" class="left">
                      &rrarr;
                    </label>
                  <label for="slide5" class="up">
                      &rrarr;
                    </label>
                  <label for="slide9" class="right">
                      &rrarr;
                    </label>
                </div>
                <div class="slide slide-br">
                  <label for="slide8" class="left">
                      &rrarr;
                    </label>
                  <label for="slide6" class="up">
                      &rrarr;
                    </label>
                </div>
              </div>
            </div>
            <!--<![endif]-->

            <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
              <tr>
                <td align="center" style="padding-top:20px">
                  <h1 style="font-size: 23px;font-family:Arial, Helvetica, sans-serif;color: #1a2b68;line-height: 25px;font-weight: bold; text-transform: uppercase; margin: 0;" tabindex="0">Multidirectional carousel</h1>
                </td>
              </tr>
            </table>

            <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
              <tr>
                <td align="left" class="center" style="padding:30px 20px;">
                  <p style="color:#77787b; font-family:Arial, Helvetica, sans-serif; font-size:13px;line-height:19px; margin: 0" tabindex="0">
                    Use the arrows to scroll around the big image. 
                    <br><br>
                    Carousel type build that scrolls over large background image using directional arrows. Background is moved by changing the 'background-position' on relative input checked state. Checked state also controls which arrows will be visible on screen. Unsupported environments will display a fallback static image.
                    <br><br>
                    Background images provided by <a href="https://source.unsplash.com/" target="_blank">Unsplash Source</a>
                  </p>
                </td>
              </tr>
            </table>

          </td>
        </tr>
      </table>
      <!--[if (gte mso 9)|(IE)]>
		</td>
		</tr>
		</table>
		<![endif]-->

    </td>
  </tr>
</table>
</body>
</html>