<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  --primary-1: 230, 15%, 22%; /* Neutral */
  --primary-2: 230, 15%, 20%; /* Dark */
  --primary-3: 230, 15%, 18%; /* Darker */
  --primary-4: 230, 15%, 45%; /* Lightest */
  --secondary: 166, 69%, 81%; /* Splash of Color */
  --transition: cubic-bezier(0.77, 0, 0.175, 1); 
}

*, *:before, *:after {
  box-sizing: border-box;
}

body {
  height: 100vh;
  margin: 0;
  display: grid;
  place-items: center;
  background: linear-gradient(296.91deg, #3f3547 3.73%, #7D81A4 97.68%); 
}

.multi-button {
  --shadow: 286, 24%, 14%;
  position: relative;
  padding: .2rem;
  background: hsl(var(--primary-1));
  border: 1px solid hsl(var(--primary-2));  
  box-shadow: 
    1px 1px 1px hsla(var(--shadow),.12),
    3px 3px 3px hsla(var(--shadow),.11), 
    5px 5px 5px hsla(var(--shadow),.1),
    7px 7px 7px hsla(var(--shadow),.09),
    11px 11px 11px hsla(var(--shadow),.08),
    13px 13px 13px hsla(var(--shadow),.07),
    17px 17px 17px hsla(var(--shadow),.06),
    19px 19px 19px hsla(var(--shadow),.05),
    23px 23px 23px hsla(var(--shadow),.04),
    29px 29px 29px hsla(var(--shadow),.03);
  border-radius: 4px;
  user-select: none;
}

label {
  display: inline-block;
  position: relative;
  padding: .8rem 1.4rem; 
  color: #5C617B;
  font-size: 16px;
  font-weight: 600;
  font-family: 'Poppins', 'Helvetica', sans-serif;
  text-transform: uppercase;
  letter-spacing: 4px;
  border: none;
  border-radius: 2px;
  background: none;
  transition: all .4s var(--transition); 
  cursor: pointer;
}

span {
  margin-right: .1rem;
}

span svg {
  height: 16px;
  width: 16px;
}

label:before {
  content: '';
  position: absolute;
  height: 1px;
  width: 0;
  top: 20%;
  left: 50%;
  background: hsla(var(--secondary),.35);
  border-radius: 2px;  
  transition: all .25s var(--transition);
}

label:hover:before {
  width: 80%;
  left: 10%;
  border-top: 1px solid hsl(var(--secondary));
}

input:checked + label:before {
  height: 60%;
  bottom: 20%;
}

input:checked + label {  
  color: hsl(var(--secondary));
  transition-delay: .1s;
}

input[type="checkbox"] {
  display: none;
}
    </style>
</head>
<body>
<div class="multi-button">
  <input name="buttons" type="checkbox" id="cut" checked="checked">
  <label for="cut">
    <span><?xml version="1.0" encoding="UTF-8"?>
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <circle cx="6" cy="6" r="3"/>
        <circle cx="6" cy="18" r="3"/>
        <line x1="20" x2="8.12" y1="4" y2="15.88"/>
        <line x1="14.47" x2="20" y1="14.48" y2="20"/>
        <line x1="8.12" x2="12" y1="8.12" y2="12"/>
      </svg>
    </span>Cut</label>
  <input name="buttons" type="checkbox" id="copy">
  <label for="copy">
    <span><?xml version="1.0" encoding="UTF-8"?>
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/>
        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/>
      </svg>
    </span>Copy</label>
  <input name="buttons" type="checkbox" id="paste">
  <label for="paste">
    <span><?xml version="1.0" encoding="UTF-8"?>
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
        <rect x="8" y="2" width="8" height="4" rx="1" ry="1"/>
      </svg>
    </span>Paste</label>
</div>
    
</body>
</html>