<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Montserrat);
body,html{
    margin: 0;
    padding: 0;
    font-family: 'Montserrat', sans-serif;
}
.hero-nav{
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 400px;
    min-height: 105px;
    background-image: url(https://images.unsplash.com/photo-1442606383395-175ee96ed967?q=80&fm=jpg&s=5c8c74be9bc91b47c79a1aaf92264be5);
    background-size: cover;
    background-position: center;
    overflow: hidden;
    .hero-nav__inner{
        z-index: 1;
    }
    h1{
        color: #efefef;
        font-size: 5vw;
    }
    &:before{
        content: "";
        background: rgba(#000, 0);
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        transition: background 400ms;
    }
    &.fixme{
        &:before{
            background: rgba(#000, 0.8);
        }
    }
}
.page-content{
    width: 30em;
    margin: 0 auto;
    line-height: 1.625;
}
    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="hero-nav">
    <div class="hero-nav__inner">
        <h1>Neat Title</h1>
        <div class="hero-nav__button">
            <a href="#" class="btn"></a>
        </div>
    </div>
</div>
<div class="page-content">
    <p>Laws of physics, billions upon billions, radio telescope a still more glorious dawn awaits inconspicuous motes of rock and gas hydrogen atoms, across the centuries? Permanence of the stars, venture courage of our questions, gathered by gravity shores
        of the cosmic ocean rich in mystery tendrils of gossamer clouds extraplanetary cosmic fugue. Trillion, the ash of stellar alchemy of brilliant syntheses how far away gathered by gravity laws of physics descended from astronomers, rich in heavy
        atoms, Sea of Tranquility?</p>
    <p>Finite but unbounded Flatland at the edge of forever hearts of the stars hydrogen atoms, Sea of Tranquility Orion's sword. Dispassionate extraterrestrial observer, preserve and cherish that pale blue dot the carbon in our apple pies Apollonius of
        Perga, a mote of dust suspended in a sunbeam globular star cluster rogue. Across the centuries a still more glorious dawn awaits culture. Citizens of distant epochs encyclopaedia galactica from which we spring tingling of the spine made in the
        interiors of collapsing stars! Drake Equation. Take root and flourish great turbulent clouds how far away, colonies, not a sunrise but a galaxyrise a still more glorious dawn awaits another world! Astonishment. Hydrogen atoms!</p>
    <p>Descended from astronomers another world circumnavigated cosmic ocean made in the interiors of collapsing stars birth decipherment the sky calls to us preserve and cherish that pale blue dot, great turbulent clouds, dispassionate extraterrestrial
        observer, astonishment stirred by starlight rich in mystery Cambrian explosion, laws of physics Hypatia. Network of wormholes worldlets white dwarf, star stuff harvesting star light Rig Veda extraplanetary another world Tunguska event globular
        star cluster kindling the energy hidden in matter. Cosmos. The only home we've ever known. How far away.</p>
    <p>Stirred by starlight shores of the cosmic ocean. Cambrian explosion Flatland the carbon in our apple pies hydrogen atoms! Tunguska event rich in heavy atoms preserve and cherish that pale blue dot, birth finite but unbounded. Rich in heavy atoms great
        turbulent clouds, hearts of the stars encyclopaedia galactica. Cambrian explosion dream of the mind's eye Apollonius of Perga another world not a sunrise but a galaxyrise Hypatia billions upon billions a still more glorious dawn awaits, Hypatia
        worldlets colonies at the edge of forever bits of moving fluff, the ash of stellar alchemy and billions upon billions upon billions upon billions upon billions upon billions upon billions.</p>
</div>
<script>
    var heroShinker = function() {
    var hero = $('.hero-nav'),
        heroHeight = $('.hero-nav').outerHeight(true);
        $(hero).parent().css('padding-top', heroHeight);
    $(window).scroll(function() {
        var scrollOffset = $(window).scrollTop();
        if (scrollOffset < heroHeight) {
            $(hero).css('height', (heroHeight - scrollOffset));
        }
        if (scrollOffset > (heroHeight - 215)) {
            hero.addClass('fixme');
        } else {
            hero.removeClass('fixme');
        };
    });
}
heroShinker();
</script>
</body>
</html>