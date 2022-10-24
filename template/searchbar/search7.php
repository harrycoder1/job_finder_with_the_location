<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Orbitron&display=swap");
@import url("https://fonts.googleapis.com/css?family=Hind&display=swap");
* {
  -webkit-font-smoothing: antialiased;
  color: #acbdce;
}

:root {
  --border-radius: 10px;
}

body, html {
  background: #e2e9f4;
  display: grid;
  height: 100%;
  grid-template: 1fr/100%;
  place-items: center;
}

.Card {
  padding: 1px;
  border-radius: var(--border-radius);
  background: linear-gradient(-67deg, rgba(200, 216, 231, 0.7), rgba(255, 255, 255, 0.8));
  overflow: hidden;
  box-shadow: -2px -2px 6px rgba(255, 255, 255, 0.6), 2px 2px 12px #c8d8e7;
  width: 380px;
}

.CardInner {
  padding: 16px 16px;
  background-color: #e2e9f4;
  border-radius: var(--border-radius);
}

.container {
  display: flex;
}

.Icon {
  min-width: 46px;
  min-height: 46px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: var(--border-radius);
  margin-right: 12px;
  box-shadow: -2px -2px 6px rgba(255, 255, 255, 0.6), 2px 2px 12px #c8d8e7;
}
.Icon svg {
  transform: translate(-1px, -1px);
}

label {
  font-family: "Hind", sans-serif;
  display: block;
  color: #3c4b66;
  margin-bottom: 12px;
  background: linear-gradient(45deg, #6b7b8f, #3c4b66);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.InputContainer {
  width: 100%;
}

input {
  background-color: #e3edf7;
  padding: 16px 32px;
  border: none;
  display: block;
  font-family: "Orbitron", sans-serif;
  font-weight: 600;
  color: #a9b8c9;
  -webkit-appearance: none;
  transition: all 240ms ease-out;
  width: 100%;
}
input::placeholder {
  color: #6d7f8f;
}
input:focus {
  outline: none;
  color: #6d7f8f;
  background-color: #eff5fa;
}

.InputContainer {
  --top-shadow: inset 1px 1px 3px #c5d4e3, inset 2px 2px 6px #c5d4e3;
  --bottom-shadow: inset -2px -2px 4px rgba(255,255,255, .7);
  position: relative;
  border-radius: var(--border-radius);
  overflow: hidden;
}
.InputContainer:before, .InputContainer:after {
  left: 0;
  top: 0;
  display: block;
  content: "";
  pointer-events: none;
  width: 100%;
  height: 100%;
  position: absolute;
}
.InputContainer:before {
  box-shadow: var(--bottom-shadow);
}
.InputContainer:after {
  box-shadow: var(--top-shadow);
}
    </style>
</head>
<body>
<div class="Card">
  <div class="CardInner">
  <label>Search for your favourite food</label>
  <div class="container">
    <div class="Icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#657789" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
    </div>
    <div class="InputContainer">
      <input placeholder="It just can't be pizza..."/>
    </div>
  </div>
 </div>
</div>
</body>
</html>