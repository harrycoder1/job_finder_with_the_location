<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Page */

html {
    box-sizing: border-box;
}

*, 
*:before, 
*:after {
    box-sizing: inherit;
}

body {
    background-color: #3498db; 
}

.nav {
    width: 550px;
    margin: 100px auto 0 auto;
    text-align: center;
}

/* Navigation */

.nav {
    font-family: Georgia, Arial, sans-serif;
    font-size: 14px;
}

.nav-items {
    padding: 0;
    list-style: none;
}

.nav-item {
    display: inline-block;
    margin-right: 25px;
}

.nav-item:last-child {
    margin-right: 0;
}

.nav-link,
.nav-link:link, 
.nav-link:visited, 
.nav-link:active,
.submenu-link,
.submenu-link:link, 
.submenu-link:visited, 
.submenu-link:active {
    display: block;
    position: relative;
    font-size: 14px;
    letter-spacing: 1px;
    cursor: pointer;
    text-decoration: none;
    outline: none;
}

.nav-link,
.nav-link:link, 
.nav-link:visited, 
.nav-link:active {
    color: #fff;
    font-weight: bold;
}

.nav-link::before {
    content: "";
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    height: 3px;
    background: rgba(0,0,0,0.2);
    opacity: 0;
    -webkit-transform: translate(0, 10px);
    transform: translate(0, 10px);
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.nav-link:hover::before,
.nav-link:hover::before {
    opacity: 1;
    -webkit-transform: translate(0, 5px);
    transform: translate(0, 5px);
}

.dropdown {
    position: relative;
}

.dropdown .nav-link {
    padding-right: 15px;
    height: 17px;
    line-height: 17px;
}

.dropdown .nav-link::after {
    content: "";
    position:absolute;
    top: 6px;
    right: 0;
    border: 5px solid transparent;
    border-top-color: #fff;
}

.submenu {
    position: absolute;
    top: 100%;
    left: 50%;
    z-index: 100;
    width: 200px;
    margin-left: -100px;
    background: #fff;
    border-radius: 3px;
    line-height: 1.46667;
    margin-top: -5px;
    box-shadow: 0 0 8px rgba(0,0,0,.3);
    opacity:0;
    -webkit-transform: translate(0, 0) scale(.85);
    transform: translate(0, 0)scale(.85);
    transition: transform 0.1s ease-out, opacity 0.1s ease-out;
    pointer-events: none;
}

.submenu::after, 
.submenu::before {
    content: ""; 
    position: absolute;
    bottom: 100%;
    left: 50%;
    margin-left: -10px;
    border: 10px solid transparent;
    height: 0;
}

.submenu::after {
    border-bottom-color: #fff;
}

.submenu::before {
    margin-left: -13px;
    border: 13px solid transparent;
    border-bottom-color: rgba(0,0,0,.1);
    -webkit-filter:blur(1px);
    filter:blur(1px);
}

.submenu-items {
    list-style: none;
    padding: 10px 0;
}

.submenu-item {
    display: block;
    text-align: left;
}

.submenu-link,
.submenu-link:link, 
.submenu-link:visited, 
.submenu-link:active {
    color: #3498db;
    padding: 10px 20px;
}

.submenu-link:hover {
    text-decoration: underline;
}

.submenu-seperator {
    height: 0;
    margin: 12px 10px;
    border-top: 1px solid #eee;
}

.show-submenu .submenu {
    opacity: 1;
    -webkit-transform: translate(0, 25px) scale(1);
    transform: translate(0, 25px) scale(1);
    pointer-events: auto;
}

    </style>
</head>
<body>
<nav role="navigation" class="nav">
    <ul class="nav-items">
        <li class="nav-item">
            <a href="#" class="nav-link"><span>Home</span></a>
        </li> 
        <li class="nav-item dropdown">
            <a href="#" class="nav-link"><span>Products</span></a>
            <nav class="submenu">
                <ul class="submenu-items">
                    <li class="submenu-item"><a href="#" class="submenu-link">Product #1</a></li>
                    <li class="submenu-item"><a href="#" class="submenu-link">Product #2</a></li>
                    <li class="submenu-item"><a href="#" class="submenu-link">Product #3</a></li>
                </ul>
            </nav>
        </li> 
        <li class="nav-item">
            <a href="#" class="nav-link"><span>Services</span></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link"><span>Pricing</span></a>
        </li> 
        <li class="nav-item">
            <a href="#" class="nav-link"><span>News</span></a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link"><span>More</span></a>
            <nav class="submenu">
                <ul class="submenu-items">
                    <li class="submenu-item"><a href="#" class="submenu-link">About</a></li>
                    <li class="submenu-item"><a href="#" class="submenu-link">Contact</a></li>
                    <li class="submenu-item"><hr class="submenu-seperator" /></li>
                    <li class="submenu-item"><a href="#" class="submenu-link">Support</a></li>
                    <li class="submenu-item"><a href="#" class="submenu-link">FAQs</a></li>
                    <li class="submenu-item"><a href="#" class="submenu-link">Careers</a></li>
                </ul>
            </nav>
        </li>  
    </ul>
</nav>
<script>
    [].slice.call(document.querySelectorAll('.dropdown .nav-link')).forEach(function(el){
    el.addEventListener('click', onClick, false);
});

function onClick(e){
    e.preventDefault();
    var el = this.parentNode;
    el.classList.contains('show-submenu') ? hideSubMenu(el) : showSubMenu(el);
}

function showSubMenu(el){
    el.classList.add('show-submenu');
    document.addEventListener('click', function onDocClick(e){
        e.preventDefault();
        if(el.contains(e.target)){
            return;
        }
        document.removeEventListener('click', onDocClick);
        hideSubMenu(el);
    });
}

function hideSubMenu(el){
    el.classList.remove('show-submenu');
}
</script>
</body>
</html>