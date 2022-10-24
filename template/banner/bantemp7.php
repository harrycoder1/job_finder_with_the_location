<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #banner {
    height: 300px;
    width: 300px;
    background: #666699;
    overflow: hidden;
    border: solid 1px rgba(0, 0, 0, 0.2);
}
#banner a {
    height: 100%;
    width: 100%;
    display: block;
    position: relative;
    overflow: hidden;
    animation: 1s fadein ease-in-out;
    animation-fill-mode: forwards;
}
#target {
    background: url(http://base.webdesignforyou.net/banner/target.png) center center no-repeat;
    background-size: 100% auto;
    margin: 0 auto;
    position: absolute;
    width: 500px;
    height: 500px;
    margin-top: -100px;
    margin-left: -100px;
    animation: 20s roty infinite linear;
}
#product {
    margin: 30px auto 0 auto;
    display: block;
    z-index: 10;
    width: 150px;
    position: relative;
    opacity: 0;
    animation: 1s growin ease-in-out 1s;
    animation-fill-mode: forwards;
}
#button {
    color: #fff;
    padding: 8px 15px 8px 15px;
    font-family: 'Roboto Slab';
    font-weight: 700;
    font-size: 18px;
    background: #3ba7d1;
    display: inline-block;
    margin: 10px 0 0 0;
    border-bottom: 2px solid rgba(0, 0, 0, 0.15);
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    border-radius: 3px;
    opacity: 0;
    animation: 1s fadein ease-in-out 2s;
    animation-fill-mode: forwards;
}
#sale {
    text-align: center;
    position: absolute;
    bottom: 20px;
    width: 100%;
    z-index: 10;
}
#sale-text {
    color: #fff;
    font-family: 'Satisfy';
    font-size: 26px;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    opacity: 0;
    animation: 1s fadein ease-in-out 1.5s;
    animation-fill-mode: forwards;
}
#badge {
    box-sizing: border-box;
    color: #fff;
    padding: 10px 0 0 0;
    font-weight: 800;
    font-family: 'Roboto Slab';
    font-size: 16px;
    text-align: center;
    width: 70px;
    height: 70px;
    background: #ff9900;
    border: solid 2px rgba(0, 0, 0, 0.2);
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    display: inline-block;
    border-radius: 50%;
    transform: rotate(345deg);
    animation: 1s fadein ease-in-out;
    -webkit-transition-delay: 6s;
    transition-delay: 6s;
    position: absolute;
    opacity: 0;
    transform: rotate(0deg);
    top: 0px;
    right: 0px;
    z-index: 10;
    animation: 1s rollin ease-in-out 2.5s;
    animation-fill-mode: forwards;
}
@keyframes fadein {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}
@keyframes roty {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
@keyframes rollin {
    0% {
        opacity: 0;
        transform: rotate(0deg);
        top: 0px;
        right: 0px;
    }
    100% {
        opacity: 1;
        transform: rotate(345deg);
        top: 40px;
        right: 40px;
    }
}
@keyframes growin {
    0% {
        opacity: 0;
        transform: scale(0.5);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}
    </style>
</head>
<body>
    
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href='https://fonts.googleapis.com/css?family=Satisfy|Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="banner">
            <a href="/">
                <div id="target"></div>
                <img id="product" src="http://base.webdesignforyou.net/banner/product.png">
                <div id="badge">SAVE NOW!</div>
                <div id="sale">
                    <span id="sale-text">30% off All Spa Products</span><br/>
                    <span id="button">See Special</span>
                </div>
            </a>
        </div>
     
    </body>
</html>
    
</body>
</html>