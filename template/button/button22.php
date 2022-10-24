<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  align-items: center;
  background: #e4edfa;
  display: flex;
  justify-content: center;
  height: 100vh;
}
.utveckling {
  animation: Utveckling 6.5s infinite;
  stroke-width: 10;
  fill: none;
  stroke: #5f7cfb;
}
.pil {
  animation: Pil 6.5s infinite;
}
.bock {
  animation: Bock 6.5s infinite;
  fill: none;
  stroke-dasharray: 31 82;
  stroke-dasharray: none;
  stroke-dashoffset: -47px;
  stroke-linecap: butt;
  stroke-linejoin: miter;
  stroke-miterlimit: 4;
  stroke-width: 4;
  stroke: #ffffff;
}
@keyframes Pil {
  0% {
    transform: translateY(0);
  }
  6% {
    transform: translateY(-65px);
  }
  62.49% {
    transform: translateY(-65px);
  }
  62.5% {
    transform: translateY(65px);
  }
  68.5% {
    transform: translateY(0px);
  }
}
@keyframes Utveckling {
  0% {
    stroke-width: 10;
  }
  3.1% {
    stroke-width: 10;
    stroke-dasharray: 1 179;
  }
  3.6% {
    stroke-width: 25;
    stroke-dasharray: 1 179;
  }
  28% {
    stroke-width: 25;
    stroke-dasharray: 174 179;
  }
  34% {
    stroke-width: 10;
    stroke-dasharray: 179 179;
  }
  100% {
    stroke-width: 10;
    stroke-dasharray: 179 179;
  }
}
@keyframes Bock {
  0% {
    stroke-dasharray: 1 82;
    stroke-dashoffset: 0px;
  }
  29% {
    stroke-dasharray: 1 82;
    stroke-dashoffset: 0px;
  }
  35% {
    stroke-dasharray: 31 82;
    stroke-dashoffset: -50px;
  }
  62% {
    stroke-dasharray: 31 82;
    stroke-dashoffset: -50px;
    transform: translateY(0px);
  }
  68% {
    stroke-dasharray: 31 82;
    stroke-dashoffset: -50px;
    transform: translateY(-65px);
  }
  100% {
    stroke-dasharray: 31 82;
    stroke-dashoffset: -50px;
    transform: translateY(-65px);
  }
}

    </style>
</head>
<body>
<svg width="100" height="100" viewBox="0 0 100 100">
            <defs>
                <clipPath id="clipIt">
                    <circle
                        fill="black"
                        r="35"
                        cy="50"
                        cx="50"
                        />
                    </clipPath>
                </defs>
                <path
                    class="utveckling"
                    d="M 49.99955,21.646452 A 28.35355,28.353548 0 0 0 21.646,50
                    28.35355,28.353548 0 0 0 49.99955,78.353548
                    28.35355,28.353548 0
                    0 0 78.3531,50 28.35355,28.353548 0 0 0 49.99955,21.646452
                    Z"
                    />
                    <g class="cut" clip-path="url(#clipIt)">
                        <circle
                            r="35"
                            cy="50"
                            cx="50"
                            style="opacity:1;fill:#1939ff;fill-opacity:1;stroke:none;stroke-width:12.9174"
                            />
                            <g class="pil">
                                <path
                                    d="m 40.056531,47.971893 9.914191,-9.514425
                                    9.994144,9.514425"
                                    style="fill:none;stroke:#ffffff;stroke-width:3.8;stroke-linecap:round;stroke-linejoin:miter;stroke-opacity:1;stroke-miterlimit:4;stroke-dasharray:none"
                                    />
                                    <path
                                        d="M 49.970722,38.457468 V 61.56393"
                                        style="fill:none;stroke:#ffffff;stroke-width:3.8;stroke-linecap:round;stroke-linejoin:miter;stroke-opacity:1;stroke-miterlimit:4;stroke-dasharray:none"
                                        />
                                    </g>
                                    <path
                                        class="bock"
                                        d="m 49.533063,13 c 0,0
                                        -4.038975,0.243204 -7.084664,1.6
                                        -10.965877,4.88509 -12.03936,12.900449
                                        -12.029016,15.995361 0.02524,7.552595
                                        4.607455,12.168562 6.129905,13.956538 C
                                        41.41924,50.271203 47.447623,56.491
                                        47.447623,56.491 L 63.320719,42.911532"
                                        />
                                    </g>
                                </svg>
</body>
</html>