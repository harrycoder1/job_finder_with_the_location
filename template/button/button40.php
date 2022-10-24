<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *,
*:after,
*:before {
  box-sizing: border-box;
}
body {
  min-height: 100vh;
  display: grid;
  place-items: center;
  background: #1a1a1a;
}
#app {
  display: grid;
  grid-template-columns: 1fr;
  grid-gap: 1rem;
}
.dir-control {
  --borderWidth: 2;
  --buttonColor: #c7edef;
  --bg: #0d0d0d;
  --backdrop: transparent;
  --fontSize: 1;
  --horizontalPadding: 16;
  --verticalPadding: 8;
  background: var(--backdrop);
  border: calc(var(--borderWidth) * 1px) solid var(--buttonColor);
  border-radius: 9999px;
  text-align: center;
  line-height: 24px;
  color: var(--textColor, var(--buttonColor));
  cursor: pointer;
  font-size: calc(var(--fontSize) * 1rem);
  font-weight: bold;
  font-family: sans-serif;
  outline: transparent;
  padding: calc(var(--verticalPadding) * 1px) calc(var(--horizontalPadding) * 1px);
  position: relative;
  text-decoration: none;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 300px;
  transition: transform 0.2s;
  transform: translate(0, calc(var(--y, 0) * 1%)) scale(var(--scale, 1));
}
.dir-control:hover {
  --y: -5;
  --scale: 1.05;
}
.dir-control:active {
  --y: 0;
  --scale: 0.95;
}
.dir-control span {
  -webkit-clip-path: var(--clip);
  bottom: calc(var(--borderWidth) * -1px);
  clip-path: var(--clip);
  left: calc(var(--borderWidth) * -1px);
  position: absolute;
  right: calc(var(--borderWidth) * -1px);
  top: calc(var(--borderWidth) * -1px);
  z-index: 1;
}
.dir-control span:nth-of-type(1):hover,
.dir-control span:nth-of-type(2):hover,
.dir-control span:nth-of-type(3):hover,
.dir-control span:nth-of-type(4):hover {
  --clip: polygon(0 0, 100% 0, 100% 100%, 0 100%);
  z-index: 2;
}
.dir-control span:nth-of-type(1):hover ~ b:nth-of-type(1),
.dir-control span:nth-of-type(2):hover ~ b:nth-of-type(2),
.dir-control span:nth-of-type(3):hover ~ b:nth-of-type(3),
.dir-control span:nth-of-type(4):hover ~ b:nth-of-type(4) {
  --clip: inset(0 0 0 0);
}
.dir-control span:nth-of-type(1) {
  --clip: polygon(0 0, 100% 0, 50% 50%, 50% 50%);
}
.dir-control span:nth-of-type(2) {
  --clip: polygon(100% 0, 100% 100%, 50% 50%);
}
.dir-control span:nth-of-type(3) {
  --clip: polygon(0 100%, 100% 100%, 50% 50%);
}
.dir-control span:nth-of-type(4) {
  --clip: polygon(0 0, 0 100%, 50% 50%);
}
.dir-control b {
  -webkit-clip-path: var(--clip);
  background: var(--slideColor, var(--buttonColor));
  border: calc(var(--borderWidth) * 1px) solid var(--buttonColor);
  bottom: calc(var(--borderWidth) * -1px);
  font-weight: bold;
  clip-path: var(--clip);
  color: var(--bg, #fafafa);
  left: calc(var(--borderWidth) * -1px);
  padding: calc(var(--verticalPadding) * 1px) calc(var(--horizontalPadding) * 1px);
  position: absolute;
  right: calc(var(--borderWidth) * -1px);
  top: calc(var(--borderWidth) * -1px);
  transition: -webkit-clip-path 0.25s ease;
  transition: clip-path 0.25s ease;
  transition: clip-path 0.25s ease, -webkit-clip-path 0.25s ease;
  border-radius: 9999px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.dir-control b:nth-of-type(1) {
  --clip: inset(0 0 100% 0);
}
.dir-control b:nth-of-type(2) {
  --clip: inset(0 0 0 100%);
}
.dir-control b:nth-of-type(3) {
  --clip: inset(100% 0 0 0);
}
.dir-control b:nth-of-type(4) {
  --clip: inset(0 100% 0 0);
}
.dir-control--secondary {
  --buttonColor: #fff;
  --bg: #0d0d0d;
}
.dir-control--filled {
  --backdrop: #c7edef;
  --slideColor: #0d0d0d;
  --textColor: #0d0d0d;
  --bg: #c7edef;
}

    </style>
</head>
<body>
    
<div id="app"></div>
<script>function _extends() {_extends = Object.assign || function (target) {for (var i = 1; i < arguments.length; i++) {if (window.CP.shouldStopExecution(0)) break;var source = arguments[i];for (var key in source) {if (Object.prototype.hasOwnProperty.call(source, key)) {target[key] = source[key];}}}window.CP.exitedLoop(0);return target;};return _extends.apply(this, arguments);}import React, { Fragment } from 'https://cdn.skypack.dev/react';
import { render } from 'https://cdn.skypack.dev/react-dom';

const ROOT_NODE = document.querySelector('#app');

const Button = ({ as, children, filled, secondary, ...rest }) => {
  const that = {
    as };

  return /*#__PURE__*/(
    React.createElement(that.as, _extends({ className: `dir-control ${secondary ? 'dir-control--secondary' : ''} ${filled ? 'dir-control--filled' : ''}` }, rest),
    children, /*#__PURE__*/
    React.createElement("span", null), /*#__PURE__*/
    React.createElement("span", null), /*#__PURE__*/
    React.createElement("span", null), /*#__PURE__*/
    React.createElement("span", null), /*#__PURE__*/
    React.createElement("b", { "aria-hidden": "true" }, children), /*#__PURE__*/
    React.createElement("b", { "aria-hidden": "true" }, children), /*#__PURE__*/
    React.createElement("b", { "aria-hidden": "true" }, children), /*#__PURE__*/
    React.createElement("b", { "aria-hidden": "true" }, children)));


};
Button.defaultProps = {
  as: 'button' };


const App = () => /*#__PURE__*/
React.createElement(Fragment, null, /*#__PURE__*/
React.createElement(Button, { role: "button" }, "Click Me!"), /*#__PURE__*/
React.createElement(Button, { as: "a", href: "#" }, "Link Me!"), /*#__PURE__*/
React.createElement(Button, { role: "button", secondary: true }, "Click Me!"), /*#__PURE__*/
React.createElement(Button, { as: "a", href: "#", secondary: true }, "Link Me!"), /*#__PURE__*/
React.createElement(Button, { role: "button", filled: true }, "Click Me!"), /*#__PURE__*/
React.createElement(Button, { as: "a", href: "#", filled: true }, "Link Me!"));



render( /*#__PURE__*/React.createElement(App, null), ROOT_NODE);</script>
</body>
</html>