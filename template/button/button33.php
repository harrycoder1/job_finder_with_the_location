<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        :root {
  --button-height: 60px;
}

html {
  box-sizing: border-box;
  height: 100%;
}

body {
  margin: 0;
  padding: 20px;
  width: 100%;
  height: 100%;
  background-image: linear-gradient(#ff9966, #ff5e62);
  background-position: center;
  background-size: cover;
  display: flex;
  align-items: center;
  justify-content: center;
}

.Button {
  background: 4px solid white;
  border: none;
  display: inline-block;
  height: var(--button-height);
  overflow: hidden;
  padding: 0 40px;
  position: relative;
}

.Button,
svg {
  cursor: pointer;
  font-family: 'Roboto';
  font-size: 24px;
  text-transform: uppercase;
}

    </style>
</head>
<body>
<button class="Button js-button">
  Hover over me
</button>
<script>
    const btn = document.querySelector('.js-button');
const btnText = btn.textContent;
const width = btn.clientWidth;
const height = btn.clientHeight;
const svg = Snap(width, height);
const color1 = '#FFFFFF';
const gradient = 'L(0, 0, 300, 300)#0575E6-#021B79';
const maskOffset = btn.clientHeight;

const border = svg.
rect(0, 0, width, height).
attr({ 'fill': 'none', 'stroke': color1, 'stroke-width': 4, 'class': 'border' });

const mask = svg.
path(`M0,0 L${width + maskOffset},0 L${width},${height} L-${maskOffset}, ${height} Z`).
attr({ 'fill': 'white', 'stroke': 'white', 'class': 'mask', 'stroke-width': 0 }).
transform(`t-${width + maskOffset},0`);

const maskInvert = mask.
clone().
transform('t0,0');

const text = svg.
text(width / 2, height / 2, btnText).
attr({ 'text-anchor': 'middle', 'dominant-baseline': 'central', 'fill': color1 });

const button = svg.
group(text, border).
attr({ mask: maskInvert });

const textMasked = text.
clone().
attr({ 'fill': gradient });

const borderMasked = border.
clone().
attr({ 'stroke': gradient });

const masked = svg.
group(textMasked, borderMasked).
attr({ mask });

svg.hover(
() => {
  mask.attr('stroke-width', 4);
  mask.stop().animate({ transform: 't0,0' }, 500, mina.easein);
  maskInvert.stop().animate({ transform: `t${width + maskOffset},0` }, 500, mina.easein);
},
() => {
  mask.stop().animate({ transform: `t-${width + maskOffset},0` }, 350, mina.easeout, () => mask.attr('stroke-width', 0));
  maskInvert.stop().animate({ transform: 't0,0' }, 350, mina.easeout);
});


svg.click(() => btn.click());
btn.replaceWith(svg.node);
</script>
</body>
</html>