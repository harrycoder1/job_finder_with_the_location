<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        :root {
    --menu-width: 37.5em; /* Width of menu */
    --items: 4; /* Number of items you have */
    --item-width: calc(var(--menu-width) / var(--items));
}

body {
    margin: 0;
    padding: 0;
    background: linear-gradient(45deg, #102eff, #d2379b);
    font-family: 'Roboto', sans-serif;
    height: 100vh;
    overflow: hidden;
    width: 100vw;
}

nav {
    width: var(--menu-width);
    display: flex;
    transform-style: preserve-3d;
    justify-content: space-evenly;
    position: relative;
    z-index: 2;
    margin: 0px auto;
    perspective: 2000px;
    flex-wrap: wrap;
    top: 3em;
}

nav .menu-item {
    color: white;
    font-weight: 600;
    transform-style: preserve-3d;
    flex-grow: 1;
    display: flex;
    flex-basis: var(--item-width);
    box-sizing: border-box;
    padding: 1em 1.5em;
    justify-content: center;
    perspective: 200px;
    letter-spacing: 0.5px;
    min-height: 7.5em;
}

nav .menu-text, nav .menu-text a {
    font-size: 1em;
    color: white;
    text-decoration: none;
    text-shadow: 0 1px 5px rgba(0,0,0,0.1);
    transition: color 0.1s ease-out;
    text-align: center;
}

nav .menu-text a:hover {
    color: rgba(255,255,255,0.5);
}

#sub-menu-holder {
    pointer-events: none;
    color: rgba(0,0,0,0.5);
    font-weight: normal;
    padding: 1em;
    position: absolute;
    transition: opacity 2 ease-out;
    transform: rotateX(-25deg) scale(1);
    transform-origin: 50% 7em 0em;
    opacity: 0;
    box-shadow: 0 2px 7px rgba(0,0,0,0.1), 0 2px 20px rgba(0,0,0,0.3);
    box-sizing: border-box;
    top: 3rem;
    border-radius: 10px;
    background: white;
    display: block;
    height: 300px;
    width: calc(var(--menu-width) * 1.5);
}

#sub-menu-container {
    position: absolute;
    z-index: -1;
    min-width: 100%;
    top: 2.5em;
    width: 100%;
}

nav .menu-item:hover ~ #sub-menu-container #sub-menu-holder {
    animation: clipPath 0.25s ease-out 1 forwards;        
    transition: clip-path 0.25s ease-out, left 0.15s ease-out, height 0.15s ease-out;
    opacity: 1;
    right: auto;
}
nav .menu-item:nth-of-type(1):hover ~ #sub-menu-container #sub-menu-holder,
nav .menu-item:nth-of-type(4):hover ~ #sub-menu-container #sub-menu-holder {
    clip-path: inset(0 28.75em 0 0 round 10px);
    height: 14em;
}

nav .menu-item:nth-of-type(2):hover ~ #sub-menu-container #sub-menu-holder,
nav .menu-item:nth-of-type(3):hover ~ #sub-menu-container #sub-menu-holder {
    clip-path: inset(0 15em 0 0 round 10px);
}

nav .menu-item:nth-of-type(1):hover ~ #sub-menu-container #sub-menu-holder {
    left: calc(-9em + -1px);
}
nav .menu-item:nth-of-type(2):hover ~ #sub-menu-container #sub-menu-holder {
    left: calc(-6.5em + -1px);
    height: 18.75em;
}
nav .menu-item:nth-of-type(3):hover ~ #sub-menu-container #sub-menu-holder {
    left: calc(2.75em + 1px);
    height: 24.5em;
}
nav .menu-item:nth-of-type(4):hover ~ #sub-menu-container #sub-menu-holder {
    left: calc(19em + 1px);
}

.menu-item .sub-menu {
    position: absolute;
    top: 7em;
    color: rgba(0,0,0,0.5);
    border-radius: 10px;
    min-width: 27.5em;
    pointer-events: none;
    box-sizing: border-box;
    z-index: 999;
    margin-left: -5em;
    clip-path: inset(0 10em 10em 15em);
    opacity: 0;
    font-weight: initial;
    padding: 1.5em;
    transition: all 0.25s ease-out, opacity 0.25s ease-in, margin-left 0.25s ease-out, clip-path 0.15s ease-out;
}

.menu-item .sub-menu.double {
    min-width: 41.25em;
    height: 18.75em;
    display: grid;
    grid-template-columns: 54% 50%;
}
.menu-item .sub-menu.triple {
    min-width: 41.25em;
    height: 25em;
    display: grid;
    padding: 1.5em 2.5em;
    grid-template-columns: 55% 45%;
}
.menu-item:hover .sub-menu {
    pointer-events: all;
    clip-path: inset(0 0 0 0);
}

.menu-text:after {
    transition: bottom 0.25s ease-out, opacity 0.01s ease-out 0.01s;
    opacity: 0;
    content: '';
    position: absolute;
    pointer-events: none;
    bottom: -5em;
    left: calc(50% - 10px);
    border-color: transparent transparent white transparent;
    border-width: 10px;
    border-style: solid;
}
.menu-item:hover .menu-text:after {
    bottom: 0.5em;
    opacity: 1;
    transition: bottom 0.25s ease-out, opacity 0.01s ease-out 0.15s;
}
.menu-item:hover .sub-menu {
    opacity: 1;
    margin-left: 0;
}

.menu-item:hover ~ #sub-menu-container #sub-menu-holder  {
    transition: transform 0.25s ease-out, opacity 0.25s ease-out, clip-path 0.25s ease-out;
}

@keyframes clipPath {
    0% {
        opacity: 0;
    }
    100% {
        transform: rotateX(0deg) scale(1);
        top: 4.5em;
        opacity: 1;        
    }
}

/* Menu specific */
.menu-item .title {
    font-weight: 500;
    color: rgb(44 70 86);
    margin: 0 0 0.25em 0;
}

.menu-item .icon-box * {
    transition: all 0.1s ease-out;
    position: relative;
}
.menu-item .icon-box.space {
    margin-bottom: 1.25em;
}
.menu-item .icon-box.flat {height: 1.5em;margin-bottom: 0.5em;}
.menu-item .icon, .menu-item .text {
    float: left;
    color: #9ea9af;
}

.menu-item .icon {
    color: rgb(44 70 86);
    font-size: 1.25em;
    margin: 0 1em 0 0;
}
.menu-item .icon-box {
    cursor: pointer;
}
.menu-item .icon-box {
    float: left;
    width: 100%;
    margin: 0;
    height: 4em;
    row-gap: 0;
    line-height: 1em;
}

.menu-item .icon-box .text i {
    clip-path: inset(0 100% 0 0);
    font-size: 0.75em;
    position: relative;
    top: -1px;
}

/* Base Icon Style */
.icon-box.gb .icon i:before {
    background: linear-gradient(45deg, #0c86ef, #0cef9b);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
    padding-left: 1px;
}

/* Define Icon Colors */
.icon-box.gb.a .icon i:before {background-image: linear-gradient(45deg, #2ca7ff 35%, #31d078 75%);}
.icon-box.gb.b .icon i:before {background-image: linear-gradient(45deg, #f32b2b 35%, #efbe0c 75%);}
.icon-box.gb.c .icon i:before {background-image: linear-gradient(45deg, #7176ff 35%, #b26cea 75%);}
.icon-box.gb.d .icon i:before {background-image: linear-gradient(45deg, #79c76f 35%, #bed09b 75%);}
.icon-box.gb.e .icon i:before {background-image: linear-gradient(45deg, #6082ff 35%, #ff5dbe 75%);}
.icon-box.gb.f .icon i:before {background-image: linear-gradient(45deg, #808080 35%, #bbbbbb 75%);}

.menu-item .icon-box:hover .text i {
    clip-path: inset(0 0 0 0);
    transition: clip-path 0.1s ease-out;
}

.menu-item .icon-box:hover .icon, .menu-item .icon-box:hover .title, .menu-item .icon-box:hover .sub-text {
    color: rgb(89 110 123);
}

#sub-menu-bottom {
    background: #d4e3ea70;
    position: absolute;
    bottom: 0;
    opacity: 0;
    transition: all 0.25s ease-out, height 0.1s ease-out;
    left: 0;
    width: 100%;
    height: 5em;
}
nav .menu-item:nth-of-type(3).highlight:hover ~ #sub-menu-container #sub-menu-holder #sub-menu-bottom {
    height: 7.5em;
}
.bottom-container {
    grid-area: 4 / -3 / 4 / 3;
    padding-top: 1.5em;
    color: #3a5260;
    font-weight: 500;
}

.top-container {
    grid-area: 1 / -3 / 1 / 3;
    margin: 0 0 2em 0;
}

.bottom-container a {
    float: right;
    background: linear-gradient(90deg, #8ea4b166, #a3b5bf6b);
    padding: 0.5em 1em;
    border-radius: 100px;
    position: absolute;
    color: #2c4655bf;
    font-weight: bold;
    text-decoration: none;
    right: 1.5em;
    bottom: 1.5em;
}

.bottom-container a:hover {
    background: linear-gradient(90deg, #8ea4b136, #a3b5bf33);
}

.sub-menu h3 {
    font-size: 1em;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: rgb(44 70 86 / 68%);
    margin: 0.75em 0;
}

.sub-menu .box a {
    width: 100%;
    float: left;
    font-size: 1em;
    line-height: 1.75em;
    color: #7a8a94;
    text-decoration: none;
}

.sub-menu .box a:hover {
    color: rgb(44 70 86);
}

.box {
    margin: 0 0 3em 0;
}

.icon.big i {
    font-size: 1.25em;
    top: 0.2em;
}
nav .menu-item.highlight:hover ~ #sub-menu-container #sub-menu-holder #sub-menu-bottom { opacity: 1; }

#info-box {
    position: absolute;
    bottom: 2em;
    right: 2em;
}

#info-box ul {
    list-style: none;
}
#info-box a {
    color: white;
    text-decoration: none;
    text-align: right;
    padding: 0.5em 0;
    transition: all 0.1s ease-out;
    display: block;
    text-transform: uppercase;
    font-size: 1.25em;
    font-weight: 900;
    letter-spacing: 1px;
}
#info-box a:hover {
    color: rgba(255,255,255,0.5);
}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<script src="https://kit.fontawesome.com/628c8d2499.js" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css" type="text/css" />
<nav id="menu">
    <div class="menu-item">
        <div class="menu-text">
            <a href="#">Products</a>
        </div>
        <div class="sub-menu">
            <div class="icon-box">
                <div class="icon"><i class="fal fa-wind-turbine"></i></div>
                <div class="text">
                    <div class="title">Turbo Editor <i class="far fa-arrow-right"></i></div>
                    <div class="sub-text">Edit your code while slowing down time.</div>
                </div>
            </div>
            <div class="icon-box">
                <div class="icon"><i class="fal fa-lightbulb-on"></i></div>
                <div class="text">
                    <div class="title">Idea Creator <i class="far fa-arrow-right"></i></div>
                    <div class="sub-text">Think of an idea, and have an AI create it.</div>
                </div>
            </div>
            <div class="icon-box">
                <div class="icon"><i class="fal fa-bomb"></i></div>
                <div class="text">
                    <div class="title">Super Collider <i class="far fa-arrow-right"></i></div>
                    <div class="sub-text">Remove mass from any object.</div>
                </div>
            </div>
            <div class="sub-menu-holder"></div>
        </div>
    </div>
    <div class="menu-item highlight">
        <div class="menu-text">
            <a href="#">Services</a>
        </div>
        <div class="sub-menu double">
            <div class="icon-box gb a">
                <div class="icon"><i class="far fa-question-circle"></i></div>
                <div class="text">
                    <div class="title">Consult <i class="far fa-arrow-right"></i></div>
                    <div class="sub-text">From Professionals</div>
                </div>
            </div>
            <div class="icon-box gb b">
                <div class="icon"><i class="far fa-users-class"></i></div>
                <div class="text">
                    <div class="title">Teach <i class="far fa-arrow-right"></i></div>
                    <div class="sub-text">In Classroom</div>
                </div>
            </div>
            <div class="icon-box gb c">
                <div class="icon"><i class="far fa-school"></i></div>
                <div class="text">
                    <div class="title">Learn <i class="far fa-arrow-right"></i></div>
                    <div class="sub-text">By Video</div>
                </div>
            </div>
            <div class="icon-box gb d">
                <div class="icon"><i class="far fa-chess-rook"></i></div>
                <div class="text">
                    <div class="title">Keep <i class="far fa-arrow-right"></i></div>
                    <div class="sub-text">The Castle</div>
                </div>
            </div>
            <div class="icon-box gb e">
                <div class="icon"><i class="far fa-video-plus"></i></div>
                <div class="text">
                    <div class="title">Become <i class="far fa-arrow-right"></i></div>
                    <div class="sub-text">A Creator</div>
                </div>
            </div>
            <div class="icon-box gb f">
                <div class="icon"><i class="far fa-cat"></i></div>
                <div class="text">
                    <div class="title">Understand <i class="far fa-arrow-right"></i></div>
                    <div class="sub-text">Our Journey</div>
                </div>
            </div>
            <div class="bottom-container">
                Ready to dive in? <a href="#">Get Started</a>
            </div>
            <div class="sub-menu-holder"></div>
        </div>
    </div>
    <div class="menu-item highlight">
        <div class="menu-text">
            <a href="#">Support</a>
        </div>
        <div class="sub-menu triple">
            <div class="top-container gb c icon-box">
                <div class="icon big"><i class="far fa-book"></i></div>
                <div class="text">
                    <div class="title">Where to start</div>
                    <div class="sub-text">Find out where to begin below</div>
                </div>
            </div>
            <div class="box">
                <h3>Your Journey</h3>
                <a href="#">Get Started</a>
                <a href="#">Learn the Basics</a>
                <a href="#">Get Advanced</a>
                <a href="#">Start Teaching</a>
            </div>
            <div class="box">
                <h3>Your Tools</h3>
                <a href="#">Turbo Editor</a>
                <a href="#">Time Stopper</a>
                <a href="#">Brain Enhancer</a>
                <a href="#">Network Maker</a>
            </div>
            <div class="icon-box flat">
                <div class="icon"><i class="fal fa-plug"></i></div>
                <div class="text">
                    <div class="title">API Guide <i class="far fa-arrow-right"></i></div>
                </div>
            </div>
            <div class="icon-box flat">
                <div class="icon"><i class="fal fa-comments"></i></div>
                <div class="text">
                    <div class="title">Support Line <i class="far fa-arrow-right"></i></div>
                </div>
            </div>
            <div class="icon-box flat">
                <div class="icon"><i class="fal fa-phone-volume"></i></div>
                <div class="text">
                    <div class="title">Live Chat <i class="far fa-arrow-right"></i></div>
                </div>
            </div>
            <div class="icon-box flat">
                <div class="icon"><i class="fal fa-book-spells"></i></div>
                <div class="text">
                    <div class="title">Documentation <i class="far fa-arrow-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item">
        <div class="menu-text">
            <a href="#">Community</a>
        </div>
        <div class="sub-menu">
            <div class="icon-box">
                <div class="icon"><i class="far fa-satellite"></i></div>
                <div class="text">
                    <div class="title">Forum <i class="far fa-arrow-right"></i></div>
                    <div class="sub-text">Join our passionate community.</div>
                </div>
            </div>
            <div class="icon-box">
                <div class="icon"><i class="fab fa-twitter-square"></i></div>
                <div class="text">
                    <div class="title">Twitter <i class="far fa-arrow-right"></i></div>
                    <div class="sub-text">Follow us on twitter.</div>
                </div>
            </div>
            <div class="icon-box">
                <div class="icon"><i class="fab fa-twitch"></i></div>
                <div class="text">
                    <div class="title">Live Stream <i class="far fa-arrow-right"></i></div>
                    <div class="sub-text">We stream content every day.</div>
                </div>
            </div>
            <div class="sub-menu-holder"></div>
        </div>
    </div>
    <div id="sub-menu-container">
        <div id="sub-menu-holder">
            <div id="sub-menu-bottom">

            </div>
        </div>
    </div>
</nav>


<div id="info-box">
    <ul>
        <li><a target="_top" href="https://twitter.com/thisisfjolt">Follow on Twitter</a></li>
        <li><a target="_top" href="https://fjolt.com/article/css-only-stripe-menu-with-clip">Read Article</a></li>
        <li><a target="_top" href="https://github.com/smpnjn/stripe-like-menu">GitHub Repo</a></li>
    </ul>
</div>
</body>
</html>