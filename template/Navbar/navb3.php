<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="style.css" rel="stylesheet">
    <style>
        *, *:after, *:before {
  box-sizing: border-box;
}
@media (prefers-color-scheme: light) {
  :root {
    --color-bg-primary: #d0d6df;
    --color-bg-primary-offset: #f1f3f7;
    --color-bg-secondary: #fff;
    --color-text-primary: #3a3c42;
    --color-text-primary-offset: #898c94;
    --color-orange: #FF6347;
    --color-green: #228B22;
    --color-purple: #9665c4;
    --color-black: var(--color-text-primary);
    --color-red: #d92027;
    --color-black: #000;
    --internal-light-dark: #f00;
  
  }
}
[data-theme="light"] {
  --color-bg-primary: #d0d6df;
    --color-bg-primary-offset: #f1f3f7;
    --color-bg-secondary: #fff;
    --color-text-primary: #3a3c42;
    --color-text-primary-offset: #898c94;
    --color-orange: #FF6347;
    --color-green: #228B22;
    --color-purple: #9665c4;
    --color-black: var(--color-text-primary);
    --color-red: #d92027;
    --color-black: #000;
    --internal-light-dark: #f00;
}
[data-theme="dark"] {
  --color-bg-primary: #23272a;
  --color-bg-primary-offset: #B0B0B0;
  --color-bg-secondary: #2c2f33;
  --color-text-primary: #fff;
  --color-text-primary-offset: #fff;
  --color-orange: #FF6347;
  --color-green: #228B22;
}


body {
  font-family: "Inter", sans-serif;
  background-color: var(--color-bg-primary);
  color: var(--color-text-primary);
}
span {
  color: var(--color-text-primary);
}
.is-dark-background{
  background: var(--color-bg-primary);
}
.is-green {
  color: var(--color-green);
}
.is-purple {
  color: var(--color-purple);
}
.is-black {
  color: var(--color-text-primary);
}
.left {
  text-align: left;
}
.center {
  text-align: center;
}
h3 {
  margin-block-end: 0px;
}
.menu {
  display: flex;
  position: absolute;
  flex-direction: column;
  background-color: var(--color-bg-secondary);
  border-radius: 10px;
  box-shadow: 0 10px 20px rgba(64, 64, 64, 0.15);
  top: 10;
  left: 10;
  width: 208px;
  
}
.menu.settings {
    width: 300px !important;
}
.menu-list {
  margin: 0;
  display: block;
  width: 100%;
  padding: 8px;
}
.menu-list, ul {
    list-style-type: none;
}
.menu-list + .menu-list {
  border-top: 1px solid #ddd;
}
.menu-sub-list {
  display: none;
  padding: 8px;
  background-color: var(--color-bg-secondary);
  border-radius: 10px;
  box-shadow: 0 10px 20px rgba(64, 64, 64, 0.15);
  position: absolute;
  left: 100%;
  right: 0;
  z-index: 100;
  width: 100%;
  top: 0;
  flex-direction: column;
}
.menu-sub-list:hover {
  display: flex;
}
.menu-item {
  position: relative;
}
.menu-button {
  font: inherit;
  color: inherit;
  outline: none;
  border: 0;
  padding: 8px 8px;
  width: 100%;
  
  border-radius: 8px;
  display: flex;
  align-items: center;
  position: relative;
  background-color: var(--color-bg-secondary);
}
.menu-button:hover {
  background-color: var(--color-bg-primary-offset);
}
.menu-button:hover + .menu-sub-list {
  display: flex;
}
.menu-button:hover svg {
  stroke: var(--color-text-primary);
}
.menu-button:hover svg.fa {
    color:  var(--color-text-primary);
  }
.context-button:hover svg.fa {
  color:  var(--color-text-primary);
}

.menu-button svg {
  width: 20px;
  height: 20px;
  margin-right: 10px;
  stroke: var(--color-text-primary-offset);
}
.menu-button svg.fa {
    width: 20px;
    height: 20px;
    margin-right: 10px;
    color: var(--color-text-primary-offset);
  }
.context-button svg.fa {
  height: 30px;
  margin-right: 10px;
  color: var(--color-text-primary-offset);
}
.menu-button svg:nth-of-type(2) {
  margin-right: 0;
  position: absolute;
  right: 8px;
}
.menu-button span:nth-of-type(2) {
    margin-right: 0;
    position: absolute;
    right: 8px;
    font-size: x-small;
  }
  .menu-button span.second{
    color: var(--color-text-primary-offset);
    font-size: small;
    margin-left: 5px;
  }

  .menu-button.tor span:nth-of-type(1) {
    color: var(--color-text-primary-offset);
    font-size: small;
    margin-left: 5px;
  }
.menu-button--delete:hover {
  color: var(--color-red);
}
.menu-button--delete:hover svg:first-of-type {
  stroke: var(--color-red);
}
.menu-button--orange svg:first-of-type {
  stroke: var(--color-orange);
  color: var(--color-orange);
}
.menu-button--green svg:first-of-type {
  stroke: var(--color-green);
}
.menu-button--purple svg:first-of-type {
  stroke: var(--color-purple);
}
.menu-button--black svg:first-of-type {
  stroke: var(--color-black);
}
.menu-button--checked svg:nth-of-type(2) {
  stroke: var(--color-purple);
}
/* .yeeet*/

.context-buttons {
    display: flex;
    flex-direction: row;
    position: relative;
    justify-content: space-between;
    background-color: var(--color-bg-secondary);
    color: var(--color-text-primary);
  }
.context-buttons span {
    padding-left: 40px;
    margin-right: 10px;
}
.context-button {
    font: inherit;
    outline: none;
    border: 0;
    padding: 10px 15px;
    border-radius: 8px;
    background-color: var(--color-bg-secondary);
  }
  .context-button:hover {
    background-color: var(--color-bg-primary-offset);
  }
  .context-button:hover + .menu-sub-list {
    display: flex;
  }
  .context-button:hover svg {
    fill: var(--color-text-primary);
  }
  .context-button svg {
    width: 100%;
    
    margin-right: 10px;
    fill: var(--color-text-primary-offset);
  }
  .menu-button svg:nth-of-type(2) {
    margin-right: 0;
    position: absolute;
    right: 8px;
  }


  .settings-button {
    font: inherit;
    outline: none;
    color: inherit;
    border: 0;
    height: 20px;
    border-radius: 8px;
    background-color: var(--color-bg-secondary);
  }
  .settings-button:hover {
    background-color: var(--color-bg-primary-offset);
  }
 
  .settings-button svg {
    width: 100%;
    height: 100%;
    margin-right: 10px;
  }

.break{
  border-top: 1px solid #ddd;
}
.menu-button span.disabled,  .context-button:hover:disabled {
  color: var(--color-text-primary-offset) ;
}
.menu-button:hover:disabled, .context-button:hover:disabled {
  background-color: var(--color-bg-secondary);
}
.tor {
  padding: 0px 8px!important;
  font-size: small;
  
}
.tor:hover {
  background-color: var(--color-bg-secondary);
}
.context-button p {
  height: 10px;
}

/* break */

.modal-window {
  position: fixed;
  background-color: rgba(255, 255, 255, 0.5);
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 999;
  visibility: hidden;
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s;
}
.modal-window:target {
  visibility: visible;
  opacity: 1;
  pointer-events: auto;
}
.modal-window > div {
  width: 400px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: var(--color-bg-secondary);
}
.modal-close {
  color: var(--color-text-primary);
  line-height: 50px;
  font-size: 80%;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
  width: 70px;
  text-decoration: none;
}
.modal-close:hover {
  color: var(--color-text-primary);
}
/* Demo Styles */


.modal-window div:not(:last-of-type) {
  margin-bottom: 15px;
}

.no-link {
  color: inherit;
  text-decoration:none; 
}
    </style>
</head>

<body>
    <!-- <div class="container"> -->
    <!-- code here -->
    <div class="menu">
        <ul class="menu-list">
            <li class="menu-item context-buttons">
                <button class="context-button">
                    <svg viewBox="0 0 16 16">
                        <path d="M16,7H3.8l5.6-5.6L8,0L0,8l8,8l1.4-1.4L3.8,9H16V7z"></path>
                        </svg>
                </button>
                <button class="context-button">
                    <svg viewBox="0 0 16 16">
                        <path d="M8,0L6.6,1.4L12.2,7H0v2h12.2l-5.6,5.6L8,16l8-8L8,0z"></path>
                        </svg>
                    </button>
                    <button class="context-button">
                        <svg viewBox="0 0 16 16">
                            <path d="M13.6,2.3C12.2,0.9,10.2,0,8,0C3.6,0,0,3.6,0,8s3.6,8,8,8c3.7,0,6.8-2.5,7.7-6h-2.1c-0.8,2.3-3,4-5.6,4c-3.3,0-6-2.7-6-6
                                s2.7-6,6-6c1.7,0,3.1,0.7,4.2,1.8L9,7h7V0L13.6,2.3z"></path>
                            </svg>
                        </button>
                        <button class="context-button">
                            <svg viewBox="0 0 16 16" class="favourite">
                                <path d="M8,12.2l4.9,3l-1.3-5.6L16,5.8l-5.8-0.5L8,0L5.8,5.3L0,5.8l4.4,3.8l-1.3,5.6L8,12.2z"></path>
                                </svg>
                            </button>
            
        </li>
        </ul>
        <ul class="menu-list">
            <li class="menu-item"><button class="menu-button">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>

              
                <span>Save as... </span>
                <span>CTRL+S </span>
                </button></li>
              
                <li class="menu-item"><button class="menu-button">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
            
                    <span>Print... </span>
                    <span>CTRL+P </span>
                    </button></li>
        </ul>
        <ul class="menu-list">
            <li class="menu-item"><button class="menu-button">
                <svg ></svg>
           
                <span>Select All</span>
                <span>CTRL+A</span>
                </button></li>

        </ul>
        <ul class="menu-list">
            <li class="menu-item"><button class="menu-button">
                <svg></svg>
           
                <span>View source</span>
                <span>CTRL+U</span>
                </button></li>
            <li class="menu-item"><button class="menu-button">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>

          
                <span>Inspect</span>
                <span>CTRL+SHIFT+I</span>
                </button></li>

        </ul>
    </div>




    <!-- break -->
    
    <div style="padding-left: 250px;">
        <div class="menu">
            <ul class="menu-list">
                <li class="menu-item"><button class="menu-button">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>  
        
                    <span>New tab to the right</span>
                 
                    </button></li>
  </ul>
           

            <ul class="menu-list">
                <li class="menu-item"><button class="menu-button">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
            
                            <span>Reload tab </span>
                            <span>CTRL+R</span>
                            </button></li>
        
                <li class="menu-item"><button class="menu-button">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><line x1="23" y1="9" x2="17" y2="15"></line><line x1="17" y1="9" x2="23" y2="15"></line></svg>
              
                            <span>Mute tab </span>
                            
                            </button></li>
                <li class="menu-item"><button class="menu-button">
                  <svg></svg>
                            <span>Duplicate tab </span>
                        
                            </button></li>
               
            </ul>
            <ul class="menu-list">
                <li class="menu-item"><button class="menu-button">
                    <svg ></svg>
               
                    <span>Close tab</span>
                    <span>CTRL+W</span>
                    </button></li>
                <li class="menu-item"><button class="menu-button">
                    <svg ></svg>
              
                    <span>Close other tabs</span>
                    </button></li>
                
    
            </ul>
         
        </div>
    </div>
    

     <!-- break -->
    
     <div style="padding-left: 500px;">
        <div class="menu">
            <ul class="menu-list">
                <li class="menu-item"><button class="menu-button">
            <svg></svg>     
         
                    <span>Undo </span>
                    <span>CTRL+Z</span>
                    </button></li>
            </ul>
            <ul class="menu-list">
                <li class="menu-item"><button class="menu-button">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="6" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle><line x1="20" y1="4" x2="8.12" y2="15.88"></line><line x1="14.47" y1="14.48" x2="20" y2="20"></line><line x1="8.12" y1="8.12" x2="12" y2="12"></line></svg>    
                     
                            <span>Cut </span>
                            <span>CTRL+X</span>
                            </button></li>
        
                <li class="menu-item"><button class="menu-button">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                    
                            <span>Copy </span>
                            <span>CTRL+C</span>
                            </button></li>
                <li class="menu-item"><button class="menu-button">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>   
                    
                            <span>Paste </span>
                            <span>CTRL+A</span>
                            </button></li>
                <li class="menu-item"><button class="menu-button">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>   
                  
                            <span>Delete </span>
                            <span>CTRL+V</span>
                            </button></li>
            </ul>
            <ul class="menu-list">
                <li class="menu-item"><button class="menu-button">
                    <svg ></svg>
                   
                    <span>Select All</span>
                    <span>CTRL+A</span>
                    </button></li>
    
            </ul>
         
        </div>
    </div>


    <!-- break -->
    
    <div style="padding-left: 750px;">
        <div class="menu settings">
            
            <ul class="menu-list">
                <li class="menu-item"><button class="menu-button">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
           
                            <span>New tab  </span>
                            <span>CTRL+T</span>
                            </button></li>
                <li class="menu-item"><button class="menu-button">
                    <svg></svg>
                            <span>New window  </span>
                            <span>CTRL+N</span>
                            </button></li>
                        </ul>

                        <ul class="menu-list">
                            <li id="dark-mode" class="menu-item context-buttons">
                                <button class="context-button" onclick="darkMode()">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fa"><path fill="currentColor" d="M464 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM256 96c0 17.7-14.3 32-32 32s-32-14.3-32-32 14.3-32 32-32 32 14.3 32 32zm96 0c0 17.7-14.3 32-32 32s-32-14.3-32-32 14.3-32 32-32 32 14.3 32 32zm96 0c0 17.7-14.3 32-32 32s-32-14.3-32-32 14.3-32 32-32 32 14.3 32 32z" class=""></path></svg>

                                </button>
                                <button id="light-mode" class="context-button" onclick="lightMode()">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fa"><path fill="currentColor" d="M464 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-80 80c0-17.7 14.3-32 32-32s32 14.3 32 32-14.3 32-32 32-32-14.3-32-32zm-96 0c0-17.7 14.3-32 32-32s32 14.3 32 32-14.3 32-32 32-32-14.3-32-32zm-96 0c0-17.7 14.3-32 32-32s32 14.3 32 32-14.3 32-32 32-32-14.3-32-32zm272 314c0 3.3-2.7 6-6 6H54c-3.3 0-6-2.7-6-6V192h416v234z" class=""></path></svg>
                                    </button>
                
                        </li>
                        </ul>

            <ul class="menu-list">
                <li class="menu-item"><button class="menu-button">
                    <svg class="fa" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M528 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm0 400H48V80h480v352zM208 256c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm-89.6 128h179.2c12.4 0 22.4-8.6 22.4-19.2v-19.2c0-31.8-30.1-57.6-67.2-57.6-10.8 0-18.7 8-44.8 8-26.9 0-33.4-8-44.8-8-37.1 0-67.2 25.8-67.2 57.6v19.2c0 10.6 10 19.2 22.4 19.2zM360 320h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8zm0-64h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8zm0-64h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8z" class=""></path></svg>
              
                            <span>New Identity  </span>
                            <span>CTRL+SHIFT+U</span>
                            </button></li>
                <li class="menu-item"><button class="menu-button">
                    <svg></svg> 
                            <span>New Tor IP  </span>
                            <span>CTRL+SHIFT+L</span>
                            </button></li>
  </ul>
           

            <ul class="menu-list">
                <li class="menu-item"><button class="menu-button">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            <span>History </span>
                            
                            </button></li>
        
                <li class="menu-item"><button class="menu-button">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                            <span>Downloads </span>
                            <span>CTRL+R</span>
                            </button></li>
                <li class="menu-item"><button class="menu-button">
                  <svg></svg>  
                            <span>Bookmarks</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                            </button>
                            <ul class="menu-sub-list">
                                <li class="menu-item"><button class="menu-button">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                    <span>Bookmark this page </span>
                                    <span>CTRL+D</span>
                                </button></li>


                                <li class="menu-item"><button class="menu-button">

                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>

                                  <span>Search Bookmarks </span>
            
                                </button></li>
                             
                                <li class="menu-item break" ></li>

                                <li class="menu-item"><button disabled class="menu-button">
                                  <span class="disabled">Search Bookmarks </span>
            
                                </button></li>


                                <li class="menu-item"><button class="menu-button">
                                    <?xml version="1.0" encoding="iso-8859-1"?>
                                            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                <g>
                                                    <circle style="fill:#FF5722;" cx="54.674" cy="256" r="53.333" />
                                                    <circle style="fill:#FF5722;" cx="406.61" cy="458.667" r="53.333" />
                                                    <circle style="fill:#FF5722;" cx="406.61" cy="53.333" r="53.333" />
                                                    <path style="fill:#FF5722;" d="M262.098,147.669c2.383,4.129,7.216,6.176,11.84,5.013c55.924-14.4,113.089,18.592,128.597,74.219
                                                    c1.298,4.593,5.489,7.764,10.261,7.765h87.168c5.891,0.003,10.669-4.77,10.673-10.661c0-0.566-0.045-1.132-0.134-1.691
                                                    c-6.168-38.801-22.959-75.137-48.512-104.981c-3.524-4.066-9.524-4.871-13.995-1.877c-12.228,8.182-26.61,12.548-41.323,12.544
                                                    c-40.78-0.145-73.959-32.869-74.667-73.643c-0.078-5.395-4.171-9.882-9.536-10.453c-33.448-3.504-67.251,0.925-98.667,12.928
                                                    c-5.501,2.108-8.251,8.277-6.143,13.778c0.201,0.524,0.443,1.032,0.724,1.518L262.098,147.669z" />
                                                    <path style="fill:#FF5722;" d="M499.986,277.333h-87.168c-4.772,0.001-8.963,3.173-10.261,7.765
                                                    c-15.489,55.642-72.67,88.643-128.597,74.219c-4.624-1.163-9.457,0.884-11.84,5.013l-43.605,75.541
                                                    c-2.947,5.101-1.201,11.625,3.9,14.572c0.486,0.281,0.994,0.523,1.518,0.724c31.384,12.127,65.217,16.56,98.667,12.928
                                                    c5.365-0.571,9.458-5.059,9.536-10.453c0.472-41.14,34.205-74.109,75.345-73.637c14.435,0.165,28.511,4.521,40.516,12.538
                                                    c4.491,2.991,10.507,2.157,14.016-1.941c25.542-29.826,42.332-66.138,48.512-104.917c0.931-5.817-3.03-11.287-8.847-12.218
                                                    C501.118,277.378,500.552,277.333,499.986,277.333z" />
                                                    <path style="fill:#FF5722;" d="M223.548,330.261c-40.254-41.333-40.254-107.211,0-148.544c3.338-3.429,3.983-8.662,1.579-12.8
                                                    l-43.541-75.371c-1.564-2.711-4.239-4.599-7.317-5.163c-3.058-0.527-6.198,0.246-8.661,2.133
                                                    c-30.98,25.188-54.276,58.557-67.243,96.32c-1.451,4.211-0.133,8.881,3.307,11.712c31.735,25.306,36.947,71.546,11.641,103.281
                                                    c-3.432,4.304-7.337,8.209-11.641,11.641c-3.44,2.831-4.758,7.501-3.307,11.712c12.975,37.729,36.263,71.067,67.221,96.235
                                                    c1.905,1.549,4.286,2.392,6.741,2.389c0.644-0.004,1.286-0.061,1.92-0.171c3.078-0.564,5.754-2.452,7.317-5.163l43.541-75.413
                                                    C227.516,338.928,226.879,333.696,223.548,330.261z" /></g><g></g><g></g><g></g><g></g> <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>  <g>  </g>  <g> </g> <g></g></svg>

                                    <span>Ubuntu </span>
              
                                  </button></li>




                                  <li class="menu-item"><button class="menu-button">
                                    <?xml version="1.0" encoding="iso-8859-1"?>
                                    <?xml version="1.0" encoding="iso-8859-1"?>
                                    <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#F2F2F2;" d="M512,256c0,127.969-93.895,234.005-216.555,252.98c-2.769,0.428-5.559,0.815-8.359,1.149
                                        c-9.007,1.097-18.16,1.714-27.429,id=1.839C258.435,511.99,257.223,512,256,512s-2.435-0.01-3.657-0.031
                                        c-9.268-0.125-18.422-0.742-27.429-1.839c-2.8-0.334-5.59-0.721-8.359-1.149C93.895,490.005,0,383.969,0,256
                                        C0,114.615,114.615,0,256,0S512,114.615,512,256z"/>
                                    <g>
                                        <path style="fill:#222123;" d="M512,256c0,9.644-0.533,19.163-1.578,28.536c-0.115,1.045-0.23,2.1-0.355,3.145
                                            c-0.658,5.308-1.484,10.574-2.456,15.778c-0.188,1.034-0.387,2.058-0.596,3.072c-18.098,90.436-83.832,163.652-169.942,192.355
                                            c-12.978,2.508-17.586-5.465-17.586-12.288c0-8.432,0.293-35.997,0.293-70.249c0-23.886-8.182-39.466-17.356-47.407
                                            c44.335-4.932,90.425-19.122,108.711-71.471c0.366-1.024,0.711-2.069,1.045-3.124c1.024-3.187,1.933-6.51,2.748-9.979
                                            c0.24-1.034,0.481-2.079,0.7-3.145c2.393-11.337,3.689-24.137,3.689-38.599c0-27.941-9.937-50.782-26.352-68.712
                                            c2.664-6.447,11.431-32.486-2.508-67.751c0,0-21.462-6.875-70.332,26.248c-20.459-5.674-42.371-8.516-64.125-8.62
                                            c-21.755,0.104-43.656,2.947-64.084,8.62c-48.912-33.123-70.416-26.248-70.416-26.248c-13.897,35.265-5.13,61.304-2.476,67.751
                                            c-16.374,17.93-26.384,40.772-26.384,68.712c0,14.451,1.296,27.251,3.699,38.588c0.219,1.066,0.449,2.111,0.69,3.145
                                            c0.815,3.469,1.735,6.802,2.759,9.989c0.334,1.055,0.69,2.1,1.045,3.124c18.275,52.255,64.24,66.644,108.45,71.67
                                            c-7.325,6.395-13.96,17.69-16.259,34.241c-14.608,6.541-51.66,17.847-74.491-21.285c0,0-13.542-24.576-39.246-26.384
                                            c0,0-24.984-0.324-1.745,15.559c0,0,16.771,7.879,28.421,37.46c0,0,15.026,45.693,86.246,30.208
                                            c0.115,21.389,0.345,41.556,0.345,47.658c0,6.76-4.692,14.691-17.492,12.319C88.9,470.235,23.092,397.009,4.984,306.531v-0.01
                                            c-0.209-1.014-0.408-2.038-0.585-3.062c-0.982-5.204-1.808-10.47-2.456-15.778c-0.136-1.045-0.251-2.09-0.366-3.145
                                            C0.533,275.163,0,265.644,0,256C0,114.615,114.636,0,256,0C397.375,0,512,114.615,512,256z"/>
                                        <path style="fill:#222123;" d="M94.678,363.698c-1.849-0.878-3.856-0.512-4.409,0.794c-0.596,1.275,0.439,3.009,2.299,3.845
                                            c1.829,0.878,3.824,0.502,4.389-0.773C97.604,366.289,96.538,364.534,94.678,363.698z"/>
                                        <path style="fill:#222123;" d="M106.6,373.802c-1.682-1.776-3.992-2.309-5.245-1.181c-1.243,1.149-0.93,3.542,0.742,5.319
                                            c1.62,1.787,4.012,2.32,5.235,1.191C108.607,377.981,108.272,375.609,106.6,373.802z"/>
                                        <path style="fill:#222123;" d="M117.457,387.709c-1.609-2.257-4.138-3.239-5.716-2.152c-1.609,1.097-1.609,3.824-0.042,6.102
                                            c1.588,2.278,4.148,3.302,5.726,2.205C119.024,392.756,119.024,390.019,117.457,387.709z"/>
                                        <path style="fill:#222123;" d="M129.849,401.575c-2.205-2.1-5.214-2.529-6.635-0.982c-1.4,1.546-0.784,4.483,1.452,6.541
                                            c2.194,2.111,5.183,2.529,6.583,0.982C132.744,406.58,132.065,403.634,129.849,401.575z"/>
                                        <path style="fill:#222123;" d="M146.139,411.136c-2.926-0.909-5.82,0.042-6.416,2.058c-0.585,2.027,1.306,4.378,4.2,5.256
                                            c2.905,0.846,5.778-0.063,6.405-2.069C150.925,414.344,149.034,412.014,146.139,411.136z"/>
                                        <path style="fill:#222123;" d="M165.742,414.187c-3.062,0.052-5.465,1.776-5.465,3.908c0.031,2.079,2.508,3.793,5.569,3.72
                                            c3.041-0.031,5.507-1.787,5.433-3.897C171.28,415.828,168.782,414.124,165.742,414.187z"/>
                                        <path style="fill:#222123;" d="M190.777,414.605c-0.387-2.1-3.103-3.333-6.123-2.811c-2.978,0.543-5.13,2.664-4.754,4.775
                                            c0.376,2.038,3.124,3.312,6.102,2.769C189.022,418.774,191.133,416.664,190.777,414.605z"/></g><g></g><g></g><g></g><g> </g><g></g><g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g></g><g></g><g></g><g></g><g></g></svg>
                                    <span>Github </span>
              
                                  </button></li>


                                <li class="menu-item"><button class="menu-button">

                                   <svg></svg>
                                  <span>Show all bookmarks </span>
                                  <span>CTRL+SHIFT+O</span>
                                </button></li>


                                
                            
                            </ul>
                            
                        </li>
               
            </ul>
            <ul class="menu-list">
                
                <li class="menu-item context-buttons">
                    <span>Zoom</span>
                    <button class="settings-button">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </button>
                    
                    <button class="settings-button">
                        100%
                      </button>
                        <button class="settings-button">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </button>
                            <button class="settings-button">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                </button>
                                

            </li>
            </ul>

            <ul class="menu-list">
                
                <li class="menu-item context-buttons">
                    <span style="padding-right: 30px;">Edit</span>
                    <button class="settings-button">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="6" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle><line x1="20" y1="4" x2="8.12" y2="15.88"></line><line x1="14.47" y1="14.48" x2="20" y2="20"></line><line x1="8.12" y1="8.12" x2="12" y2="12"></line></svg>
                     </button>
                        <button class="settings-button">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                          </button>
                            <button class="settings-button">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg> </button>
                                

            </li>
            </ul>

            <ul class="menu-list">
                <li class="menu-item"><button class="menu-button">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
    
                  
                    <span>Save as... </span>
                    <span>CTRL+S </span>
                    </button></li>
                    <li class="menu-item"><button class="menu-button">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                
                        <span>Print... </span>
                        <span>CTRL+P </span>
                        </button></li>
            </ul>
            <ul class="menu-list">
                <li class="menu-item"><button class="menu-button">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                  
                    <span>Settings</span>
                    </button></li>
                    <li class="menu-item"><button class="menu-button">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                        <span>Help </span>
                        </button></li>
            </ul>

            <ul class="menu-list">
                
                    <li class="menu-item"><button class="menu-button menu-button--delete">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path><line x1="12" y1="2" x2="12" y2="12"></line></svg>
                         <span>Quit </span>
                        <span>CTRL+Q </span>
                        </button></li>
            </ul>

         
        </div>
    </div>
    






<!-- break  -->






<div style="padding-top: 350px;">
    <div class="menu settings">
        
        <ul class="menu-list">
            <li class="menu-item"><button disabled class="menu-button">
                <h3 class="is-green">Connection is secure</h3>
            </button>
                     
                        </li>
            <li class="menu-item"><button disabled class="menu-button">
        
                 <span class="left is-black" >Your information is private when it is being sent to this site <a href="https://support.google.com/chrome/answer/95617?visit_id=637326688386086318-1644081200&p=ui_security_indicator&rd=1">learn more</a></span>
                      
                     
                    </li>
                    </ul>

        <ul class="menu-list">
            <li class="menu-item"><button disabled class="menu-button">
                <svg class="fa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="180px" height="180px" viewBox="0 0 180 180" version="1.1">
                    <g id="tor-glyph" stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                        <path d="M90.1846205,163.631147 L90.1846205,152.721073 C124.743583,152.621278 152.726063,124.581416 152.726063,89.9975051 C152.726063,55.4160892 124.743583,27.3762266 90.1846205,27.2764318 L90.1846205,16.366358 C130.768698,16.4686478 163.633642,49.3909741 163.633642,89.9975051 C163.633642,130.606531 130.768698,163.531352 90.1846205,163.631147 Z M90.1846205,125.444642 C109.677053,125.342352 125.454621,109.517381 125.454621,89.9975051 C125.454621,70.4801242 109.677053,54.6551533 90.1846205,54.5528636 L90.1846205,43.6452847 C115.704663,43.7450796 136.364695,64.4550091 136.364695,89.9975051 C136.364695,115.542496 115.704663,136.252426 90.1846205,136.35222 L90.1846205,125.444642 Z M90.1846205,70.9167267 C100.640628,71.0165216 109.090758,79.5165493 109.090758,89.9975051 C109.090758,100.480956 100.640628,108.980984 90.1846205,109.080778 L90.1846205,70.9167267 Z M0,89.9975051 C0,139.705328 40.2921772,180 90,180 C139.705328,180 180,139.705328 180,89.9975051 C180,40.2921772 139.705328,0 90,0 C40.2921772,0 0,40.2921772 0,89.9975051 Z" id="tor-glyph" fill="currentColor"/>
                    </g>
                </svg>
                        <span>Tor Circuit  </span>
                      
                        </button></li>
            <li class="menu-item"><button class="menu-button tor">
                
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 459.785 459.785" style="enable-background:new 0 0 459.785 459.785;" xml:space="preserve">

                    <path stroke="null" id="svg_4" d="m342.71959,219.10636c-13.74601,-61.42576 -74.68532,-100.07858 -136.11108,-86.33006c-52.0202,11.63973 -89.02059,57.7849 -89.08327,111.08892c-1.33649,52.958 34.82389,99.52693 86.46295,111.35221l0,212.22566c-61.49848,13.42004 -100.47476,74.15122 -87.05472,135.6497c9.50084,43.54241 43.51232,77.55388 87.05472,87.05472l0,212.22566c-51.63906,11.82528 -87.79944,58.39421 -86.46295,111.35221c0.07272,62.94529 51.15762,113.91486 114.10292,113.84214c62.94529,-0.07272 113.91486,-51.15762 113.84214,-114.10292c-0.06018,-53.30654 -37.06307,-99.4492 -89.08076,-111.09143l0,-212.22566c51.87476,-11.74504 88.46643,-58.17105 87.77186,-111.35221c0.69457,-53.18367 -35.8971,-99.60717 -87.77186,-111.35221l0,-212.22566c61.42576,-13.74601 100.07858,-74.68532 86.33006,-136.11108zm-48.33922,894.61902c-0.71212,34.21458 -28.658,61.57871 -62.8826,61.57119c-34.00395,0 -61.57119,-27.56724 -61.57119,-61.57119c0,-34.00395 27.56724,-61.57119 61.57119,-61.57119c34.22461,-0.00752 62.17048,27.35662 62.8826,61.57119zm-1.27129,-434.96769c0.02257,34.00395 -27.52712,61.58874 -61.53107,61.61131c-0.02507,0 -0.05266,0 -0.07773,0c-33.49242,-0.71212 -60.26981,-28.07125 -60.26229,-61.57119c-0.00752,-33.49994 26.76987,-60.85907 60.26229,-61.57119c34.00395,-0.02257 61.58874,27.52462 61.6088,61.53107zm-61.61131,-373.32127c-33.49242,-0.71212 -60.2673,-28.07125 -60.25978,-61.57119c-0.00752,-33.49994 26.76987,-60.85907 60.26229,-61.57119c34.2221,-0.00752 62.16797,27.35662 62.8826,61.57119c-0.71463,34.21708 -28.66051,61.57871 -62.88511,61.57119z"/></svg>
                        This browser
                        </button></li>
            <li class="menu-item"><button class="menu-button tor">
    
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 459.785 459.785" style="enable-background:new 0 0 459.785 459.785;" xml:space="preserve">
                    <path stroke="null" id="svg_4" d="m342.71959,-230.89363c-13.74601,-61.42576 -74.68532,-100.07858 -136.11108,-86.33006c-52.0202,11.63973 -89.02059,57.7849 -89.08327,111.08892c-1.33649,52.958 34.82389,99.52693 86.46295,111.35221l0,212.22566c-61.49848,13.42004 -100.47476,74.15122 -87.05472,135.6497c9.50084,43.54241 43.51232,77.55388 87.05472,87.05472l0,212.22566c-51.63906,11.82528 -87.79944,58.39421 -86.46295,111.35221c0.07272,62.94529 51.15762,113.91486 114.10292,113.84214c62.94529,-0.07272 113.91486,-51.15762 113.84214,-114.10292c-0.06018,-53.30654 -37.06307,-99.4492 -89.08076,-111.09143l0,-212.22566c51.87476,-11.74504 88.46643,-58.17105 87.77186,-111.35221c0.69457,-53.18367 -35.8971,-99.60717 -87.77186,-111.35221l0,-212.22566c61.42576,-13.74601 100.07858,-74.68532 86.33006,-136.11108zm-48.33922,894.61902c-0.71212,34.21458 -28.658,61.57871 -62.8826,61.57119c-34.00395,0 -61.57119,-27.56724 -61.57119,-61.57119c0,-34.00395 27.56724,-61.57119 61.57119,-61.57119c34.22461,-0.00752 62.17048,27.35662 62.8826,61.57119zm-1.27129,-434.96769c0.02257,34.00395 -27.52712,61.58874 -61.53107,61.61131c-0.02507,0 -0.05266,0 -0.07773,0c-33.49242,-0.71212 -60.26981,-28.07125 -60.26229,-61.57119c-0.00752,-33.49994 26.76987,-60.85907 60.26229,-61.57119c34.00395,-0.02257 61.58874,27.52462 61.6088,61.53107zm-61.61131,-373.32127c-33.49242,-0.71212 -60.2673,-28.07125 -60.25978,-61.57119c-0.00752,-33.49994 26.76987,-60.85907 60.26229,-61.57119c34.2221,-0.00752 62.16797,27.35662 62.8826,61.57119c-0.71463,34.21708 -28.66051,61.57871 -62.88511,61.57119z"/></svg>
                        
                        France <span>(10.47.288.345)</span> <span class="is-purple">Guard</span>
                        </button></li>
            <li class="menu-item"><button class="menu-button tor">

                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 459.785 459.785" style="enable-background:new 0 0 459.785 459.785;" xml:space="preserve">
                    <path stroke="null" id="svg_4" d="m342.71959,-230.89363c-13.74601,-61.42576 -74.68532,-100.07858 -136.11108,-86.33006c-52.0202,11.63973 -89.02059,57.7849 -89.08327,111.08892c-1.33649,52.958 34.82389,99.52693 86.46295,111.35221l0,212.22566c-61.49848,13.42004 -100.47476,74.15122 -87.05472,135.6497c9.50084,43.54241 43.51232,77.55388 87.05472,87.05472l0,212.22566c-51.63906,11.82528 -87.79944,58.39421 -86.46295,111.35221c0.07272,62.94529 51.15762,113.91486 114.10292,113.84214c62.94529,-0.07272 113.91486,-51.15762 113.84214,-114.10292c-0.06018,-53.30654 -37.06307,-99.4492 -89.08076,-111.09143l0,-212.22566c51.87476,-11.74504 88.46643,-58.17105 87.77186,-111.35221c0.69457,-53.18367 -35.8971,-99.60717 -87.77186,-111.35221l0,-212.22566c61.42576,-13.74601 100.07858,-74.68532 86.33006,-136.11108zm-48.33922,894.61902c-0.71212,34.21458 -28.658,61.57871 -62.8826,61.57119c-34.00395,0 -61.57119,-27.56724 -61.57119,-61.57119c0,-34.00395 27.56724,-61.57119 61.57119,-61.57119c34.22461,-0.00752 62.17048,27.35662 62.8826,61.57119zm-1.27129,-434.96769c0.02257,34.00395 -27.52712,61.58874 -61.53107,61.61131c-0.02507,0 -0.05266,0 -0.07773,0c-33.49242,-0.71212 -60.26981,-28.07125 -60.26229,-61.57119c-0.00752,-33.49994 26.76987,-60.85907 60.26229,-61.57119c34.00395,-0.02257 61.58874,27.52462 61.6088,61.53107zm-61.61131,-373.32127c-33.49242,-0.71212 -60.2673,-28.07125 -60.25978,-61.57119c-0.00752,-33.49994 26.76987,-60.85907 60.26229,-61.57119c34.2221,-0.00752 62.16797,27.35662 62.8826,61.57119c-0.71463,34.21708 -28.66051,61.57871 -62.88511,61.57119z"/></svg>
                        
                        Germany <span>(146.0.40.146)</span> 
                        </button></li>
            <li class="menu-item"><button class="menu-button tor">

                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 459.785 459.785" style="enable-background:new 0 0 459.785 459.785;" xml:space="preserve">
                    <path stroke="null" id="svg_4" d="m342.71959,-230.89363c-13.74601,-61.42576 -74.68532,-100.07858 -136.11108,-86.33006c-52.0202,11.63973 -89.02059,57.7849 -89.08327,111.08892c-1.33649,52.958 34.82389,99.52693 86.46295,111.35221l0,212.22566c-61.49848,13.42004 -100.47476,74.15122 -87.05472,135.6497c9.50084,43.54241 43.51232,77.55388 87.05472,87.05472l0,212.22566c-51.63906,11.82528 -87.79944,58.39421 -86.46295,111.35221c0.07272,62.94529 51.15762,113.91486 114.10292,113.84214c62.94529,-0.07272 113.91486,-51.15762 113.84214,-114.10292c-0.06018,-53.30654 -37.06307,-99.4492 -89.08076,-111.09143l0,-212.22566c51.87476,-11.74504 88.46643,-58.17105 87.77186,-111.35221c0.69457,-53.18367 -35.8971,-99.60717 -87.77186,-111.35221l0,-212.22566c61.42576,-13.74601 100.07858,-74.68532 86.33006,-136.11108zm-48.33922,894.61902c-0.71212,34.21458 -28.658,61.57871 -62.8826,61.57119c-34.00395,0 -61.57119,-27.56724 -61.57119,-61.57119c0,-34.00395 27.56724,-61.57119 61.57119,-61.57119c34.22461,-0.00752 62.17048,27.35662 62.8826,61.57119zm-1.27129,-434.96769c0.02257,34.00395 -27.52712,61.58874 -61.53107,61.61131c-0.02507,0 -0.05266,0 -0.07773,0c-33.49242,-0.71212 -60.26981,-28.07125 -60.26229,-61.57119c-0.00752,-33.49994 26.76987,-60.85907 60.26229,-61.57119c34.00395,-0.02257 61.58874,27.52462 61.6088,61.53107zm-61.61131,-373.32127c-33.49242,-0.71212 -60.2673,-28.07125 -60.25978,-61.57119c-0.00752,-33.49994 26.76987,-60.85907 60.26229,-61.57119c34.2221,-0.00752 62.16797,27.35662 62.8826,61.57119c-0.71463,34.21708 -28.66051,61.57871 -62.88511,61.57119z"/></svg>
                        
                        Switzerland <span>(1426.10.42.100)</span>
                        </button></li>
            <li class="menu-item"><button class="menu-button tor">

                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 459.785 459.785" style="enable-background:new 0 0 459.785 459.785;" xml:space="preserve">

                    <path stroke="null" id="svg_4" d="m342.71959,-656.89363c-13.74601,-61.42576 -74.68532,-100.07858 -136.11108,-86.33006c-52.0202,11.63973 -89.02059,57.7849 -89.08327,111.08892c-1.33649,52.958 34.82389,99.52693 86.46295,111.35221l0,212.22566c-61.49848,13.42004 -100.47476,74.15122 -87.05472,135.6497c9.50084,43.54241 43.51232,77.55388 87.05472,87.05472l0,212.22566c-51.63906,11.82528 -87.79944,58.39421 -86.46295,111.35221c0.07272,62.94529 51.15762,113.91486 114.10292,113.84214c62.94529,-0.07272 113.91486,-51.15762 113.84214,-114.10292c-0.06018,-53.30654 -37.06307,-99.4492 -89.08076,-111.09143l0,-212.22566c51.87476,-11.74504 88.46643,-58.17105 87.77186,-111.35221c0.69457,-53.18367 -35.8971,-99.60717 -87.77186,-111.35221l0,-212.22566c61.42576,-13.74601 100.07858,-74.68532 86.33006,-136.11108zm-48.33922,894.61902c-0.71212,34.21458 -28.658,61.57871 -62.8826,61.57119c-34.00395,0 -61.57119,-27.56724 -61.57119,-61.57119c0,-34.00395 27.56724,-61.57119 61.57119,-61.57119c34.22461,-0.00752 62.17048,27.35662 62.8826,61.57119zm-1.27129,-434.96769c0.02257,34.00395 -27.52712,61.58874 -61.53107,61.61131c-0.02507,0 -0.05266,0 -0.07773,0c-33.49242,-0.71212 -60.26981,-28.07125 -60.26229,-61.57119c-0.00752,-33.49994 26.76987,-60.85907 60.26229,-61.57119c34.00395,-0.02257 61.58874,27.52462 61.6088,61.53107zm-61.61131,-373.32127c-33.49242,-0.71212 -60.2673,-28.07125 -60.25978,-61.57119c-0.00752,-33.49994 26.76987,-60.85907 60.26229,-61.57119c34.2221,-0.00752 62.16797,27.35662 62.8826,61.57119c-0.71463,34.21708 -28.66051,61.57871 -62.88511,61.57119z"/>
                </svg>
                        google.com
                        </button></li>

            <li class="menu-item"><button class="menu-button ">

                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>

                        <span>New Circuit for this site </span>
                        </button></li>
                </ul>
       

        <ul class="menu-list">
            <li class="menu-item"><button class="menu-button">
              <svg></svg>
                Certificate  <span class="second">(Valid) </span>
                        
                        </button></li>
    
           
            <li class="menu-item"><button  class="menu-button">
                <svg class="fa" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cookie-bite" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-cookie-bite fa-w-16 fa-3x"><path fill="currentColor" d="M510.52 255.82c-69.97-.85-126.47-57.69-126.47-127.86-70.17 0-127-56.49-127.86-126.45-27.26-4.14-55.13.3-79.72 12.82l-69.13 35.22a132.221 132.221 0 0 0-57.79 57.81l-35.1 68.88a132.645 132.645 0 0 0-12.82 80.95l12.08 76.27a132.521 132.521 0 0 0 37.16 72.96l54.77 54.76a132.036 132.036 0 0 0 72.71 37.06l76.71 12.15c27.51 4.36 55.7-.11 80.53-12.76l69.13-35.21a132.273 132.273 0 0 0 57.79-57.81l35.1-68.88c12.56-24.64 17.01-52.58 12.91-79.91zM176 368c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm32-160c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm160 128c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z" class=""></path></svg>
                             
             
                    <a class="no-link" href="#open-modal">   Cookies </a>
                 
                  
                  <span class="second">(37 in use) </span>
                       
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                        </button>
                        
                        
                    </li>


                    
                      <div id="open-modal" class="modal-window">
                       
                          
                         
                          <div class="menu settings">
                            <ul class="menu-list">
                                <h3>Cookies in use</h3>
                            <a href="#" title="Close" class="modal-close">Close</a>
                            <br>
                                <li class="menu-item context-buttons">
                                    <button class="settings-button">
                                      Allowed
                                    </button>
                                  
                                     
                                            <button class="settings-button">
                                              Blocked
                                                </button>
                                
                            </li>
                    
                            </ul>
                            <ul class="menu-list .is-dark-background">
                                <li class="menu-item"><button disabled class="menu-button">
                                   
                                  
                                    <span>Fill this with stuff when I know more about cookies </span>
                                  
                                    </button></li>
                                  
                                    
                            </ul>
                         
                            <ul class="menu-list">
                                <li class="menu-item context-buttons">
                                    <button class="settings-button">
                                      Block
                                    </button>
                                  
                                        <button class="settings-button">
                                            Remove
                                            </button>
                                            <button class="settings-button">
                                       
                                            </button>
                                            <button class="settings-button">
                                              Done
                                                </button>
                                
                            </li>
                    
                            </ul>
                        </div>
                        
                       
                      </div>
           
        </ul>
     

      

        

     
    </div>
</div>



<div style="padding-left: 350px;">
    <div class="menu settings">
        
        <ul class="menu-list">
            <li id="dark-mode" class="menu-item context-buttons">
                <button class="context-button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fa"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z" class=""></path></svg>
                </button>
             

        </li>


        <li id="dark-mode" class="menu-item ">
            <button  disabled class="menu-button">
                <span class="  center is-black">       Add accounts to share cookies and other data between tabs</span>
         
            </button>
         

    </li>
        </ul>
       

        <ul class="menu-list">

            <li class="menu-item"><button class="menu-button  menu-button--orange">
                <svg class="fa" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-user-secret fa-w-14 fa-3x"><path fill="currentColor" d="M383.9 308.3l23.9-62.6c4-10.5-3.7-21.7-15-21.7h-58.5c11-18.9 17.8-40.6 17.8-64v-.3c39.2-7.8 64-19.1 64-31.7 0-13.3-27.3-25.1-70.1-33-9.2-32.8-27-65.8-40.6-82.8-9.5-11.9-25.9-15.6-39.5-8.8l-27.6 13.8c-9 4.5-19.6 4.5-28.6 0L182.1 3.4c-13.6-6.8-30-3.1-39.5 8.8-13.5 17-31.4 50-40.6 82.8-42.7 7.9-70 19.7-70 33 0 12.6 24.8 23.9 64 31.7v.3c0 23.4 6.8 45.1 17.8 64H56.3c-11.5 0-19.2 11.7-14.7 22.3l25.8 60.2C27.3 329.8 0 372.7 0 422.4v44.8C0 491.9 20.1 512 44.8 512h358.4c24.7 0 44.8-20.1 44.8-44.8v-44.8c0-48.4-25.8-90.4-64.1-114.1zM176 480l-41.6-192 49.6 32 24 40-32 120zm96 0l-32-120 24-40 49.6-32L272 480zm41.7-298.5c-3.9 11.9-7 24.6-16.5 33.4-10.1 9.3-48 22.4-64-25-2.8-8.4-15.4-8.4-18.3 0-17 50.2-56 32.4-64 25-9.5-8.8-12.7-21.5-16.5-33.4-.8-2.5-6.3-5.7-6.3-5.8v-10.8c28.3 3.6 61 5.8 96 5.8s67.7-2.1 96-5.8v10.8c-.1.1-5.6 3.2-6.4 5.8z" class=""></path></svg>

                StephenPP <span class="second">(Logged in) </span>
                        
                        </button></li>

            <li class="menu-item"><button class="menu-button">
                <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="fa"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z" class=""></path></svg>

                 <span class="second">Guest </span>
                        
                        </button></li>
    
           
            <li class="menu-item"><button class="menu-button">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                Add  
                       
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                        </button>
                        
                        
                    </li>
           
        </ul>
     

      

        

     
    </div>
</div>

</body>
<script>
//     $(document).on("contextmenu", function(event) {
//   event.preventDefault();
//   $(".menu")
//     .show()
//     .css({
//       top: event.pageY,
//       left: event.pageX
//     });
// });
// $(document).click(function() {
//   if ($(".menu").is(":hover") == false) {
//     $(".menu").fadeOut("fast");
//   };
// });


lightMode = () => {
    
    document.documentElement.setAttribute('data-theme', 'light')
}

darkMode = () => {
    
    document.documentElement.setAttribute('data-theme', 'dark')
}

</script>

</html>