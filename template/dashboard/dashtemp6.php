<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  box-sizing: border-box;
}

:root {
  --accent: #5e72e4;
  --primary: #1b1b1d;
  --secondary: #27282B;
  --tertiary: #37383B;
  --quadinary: #303236;
  --gray-accent: #8A8F98;
}

body {
  font-family: system-ui;
  margin: 0;
  color: white;
  background: var(--primary);
  font-size: 1rem;
  line-height: 1.6;
}

h3 {
  margin-top: 0;
  margin-bottom: 8px;
}

.wrap {
  padding: 80px 3%;
}

.container {
  display: grid;
  grid-template-columns: minmax(280px, 0.4fr) 1fr;
  gap: 36px;
  align-items: start;
  justify-items: start;
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

.nav-col {
  display: flex;
  flex-direction: column;
  align-items: start;
  justify-content: start;
  background: var(--secondary);
  padding: 24px;
  border-radius: 10px;
  position: sticky;
  top: 80px;
}
.nav-col h3 {
  position: relative;
  margin-bottom: 8px;
  padding-right: 6px;
  display: flex;
  justify-content: start;
  align-items: center;
  gap: 4px;
  flex-wrap: wrap;
  font-size: 1.5rem;
  line-height: 1.1;
}
.nav-col h3 span {
  color: inherit;
}
.nav-col h3:after {
  content: "3 Unlinked";
  font-size: 0.9rem;
  font-weight: 500;
  line-height: 1;
  color: #f8963a;
  padding: 3px 6px;
  position: relative;
  border-radius: 0.2rem;
  background: rgba(248, 150, 58, 0.31);
  display: inline-block;
}

.projects {
  display: grid;
  grid-template-columns: 1fr;
  gap: 2px;
  overflow-y: auto;
  max-height: 260px;
  width: 100%;
  list-style: none;
  padding: 0 16px;
  direction: rtl;
  text-align: left;
  margin-top: 16px;
}
.projects a {
  display: block;
  padding: 4px 8px;
  color: #62666D;
  text-decoration: none;
  border-radius: 3px;
  transition-property: background, color;
  transition-duration: 0.1s;
  transition-timing-function: ease-out;
}
.projects a:hover {
  color: #D7D8DB !important;
  background: var(--quadinary);
}

.projects::-webkit-scrollbar {
  width: 4px;
}

.projects::-webkit-scrollbar-track {
  background: var(--primary);
  border-radius: 8px;
}

.projects::-webkit-scrollbar-thumb {
  background-color: var(--accent);
  border-radius: 8px;
}

.search {
  background: var(--quadinary);
  padding: 12px 12px;
  width: 100%;
  border-radius: 5px;
  margin-top: 12px;
  color: inherit;
  border: none;
  outline: none;
  -webkit-appearance: textfield;
}
.search:focus {
  border: none;
  outline: none;
}

/*** ----- CONTENT COLUMN ----- ***/
.cont-col {
  display: grid;
  grid-template-columns: 1fr;
  gap: 24px;
}

/*** ----- PROJECT CARDS ----- ***/
.project-card {
  background: var(--secondary);
  padding: 24px;
  border-radius: 10px;
  display: grid;
  grid-template-columns: 0.5fr 0.8fr;
  gap: 1rem;
  align-items: start;
}
.project-card img {
  width: 100%;
}

@media screen and (max-width: 1000px) {
  .project-card {
    grid-template-columns: 1fr;
  }
}
.top {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: start;
  gap: 16px;
  margin-bottom: 24px;
}
.top h3 {
  font-size: 1.5rem;
  line-height: 1.2;
}
.top img {
  aspect-ratio: 5/3;
  width: 100%;
  border-radius: 3px;
  object-fit: cover;
}

.p-link div {
  display: flex;
  flex-direction: column;
  gap: 8px;
  margin-top: 1rem;
}
.p-link div a {
  color: #6679e5;
  margin-top: 0;
  line-height: 1;
  text-decoration: none;
}
.p-link div a:hover {
  color: #92a0ed;
}
.p-link div span {
  font-size: 0.7rem;
  line-height: 1;
  text-transform: uppercase;
  margin-bottom: 0;
  opacity: 1;
  letter-spacing: 1px;
}

.p-link div:first-child {
  margin-bottom: 1.5rem;
}

.boost-wrap {
  display: grid;
  grid-template-columns: repeat(1, 1fr);
  gap: 16px;
}

@media screen and (max-width: 1140px) {
  .boost-wrap {
    display: grid;
    grid-template-columns: 1fr;
  }
}
.booster-card {
  padding: 16px;
  background: #37383B;
  border: 1px solid #3D3F45;
  border-radius: 3px;
  display: grid;
  grid-template-columns: 1fr;
  gap: 16px;
  position: relative;
}

.boost-name-wrap {
  display: flex;
  align-items: start;
  flex-direction: column;
  justify-content: start;
}

.boost-name {
  font-size: 1.2rem;
  font-weight: 500;
  line-height: 1;
}

.boost-badge {
  font-size: 0.7rem;
  font-weight: 600;
  text-transform: uppercase;
  background: rgba(94, 114, 228, 0.3);
  color: #92a0ed;
  padding: 3px 6px;
  border-radius: 3px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 6px;
  margin-top: 8px;
}
.boost-badge svg {
  width: 15px;
  height: auto;
}

.action-btn-group {
  display: flex;
  gap: 4px;
  position: absolute;
  right: 16px;
  bottom: 16px;
}
.action-btn-group a {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 5px;
  color: white;
  border-radius: 3px;
  background: #bc2f46;
}
.action-btn-group a:first-child {
  background: #2955ae;
}
.action-btn-group a svg {
  width: 20px;
  height: 20px;
}

.jb-class {
  display: flex;
  gap: 4px;
  position: absolute;
  right: 16px;
  top: 16px;
  line-height: 1;
  padding: 5px;
  border-radius: 3px;
  background: #6b6b6b;
}

.show-boost-btn {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 6px;
  text-decoration: none;
  padding: 8px;
  background: var(--tertiary);
  border-radius: 3px;
  color: inherit;
  transition-property: background;
  transition-duration: 0.3s;
  transition-timing-function: ease-out;
}
.show-boost-btn:hover {
  background: var(--quadinary);
}

.connect {
  padding: 16px;
  width: 100%;
  margin-top: 16px;
  background: var(--tertiary);
  border-radius: 5px;
}
.connect a {
  display: block;
  text-align: center;
  text-decoration: none;
  background: var(--accent);
  color: white;
  padding: 12px;
  width: 100%;
  border-radius: 3px;
  transition-property: background;
  transition-duration: 0.3s;
  transition-timing-function: ease-out;
  margin-top: 12px;
}
.connect a:hover {
  background: #455AD3 !important;
}

.connect-top {
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-size: 1.2rem;
}
.connect-top svg {
  witdth: 20px;
  height: 20px;
}
.connect-top a {
  margin-top: 12px;
}

.toggle-wrap {
  display: flex;
  align-items: start;
  justify-content: start;
  flex-direction: column;
  gap: 4px;
}

.toggle-item {
  display: flex;
  align-items: center;
  justify-content: center;
}

.toggle-label {
  color: rgba(57, 208, 90, 0.8);
  font-size: 0.7rem;
  font-weight: 600;
  text-transform: uppercase;
  background: rgba(57, 208, 90, 0.15);
  padding: 3px 6px;
  min-width: 64px;
  text-align: center;
  border-radius: 3px;
  margin-right: 6px;
}
.toggle-label.alt {
  background: rgba(58, 169, 248, 0.31);
  color: #3aa9f8;
}

.locked {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 50px;
  height: 24px;
  background: grey;
  border-radius: 20px;
}
.locked svg {
  width: auto;
  height: 16px;
}

/*** ----- UTILITIES ----- ***/
.active {
  color: #D7D8DB !important;
  background: var(--quadinary);
}

input[type=checkbox] {
  height: 0;
  width: 0;
  visibility: hidden;
  margin: 0;
}

label {
  cursor: pointer;
  text-indent: -9999px;
  width: 50px;
  height: 24px;
  background: grey;
  display: block;
  border-radius: 20px;
  position: relative;
}

label:after {
  content: "";
  position: absolute;
  top: 2px;
  left: 2px;
  width: 20px;
  height: 20px;
  background: #fff;
  border-radius: 90px;
  transition: 0.3s;
}

input:checked + label {
  background: #39d05a;
}

input:checked + label:after {
  left: calc(100% - 2px);
  transform: translateX(-100%);
}

label:active:after {
  width: 120px;
}

/*** ----- RESPONSIVE ----- ***/
@media screen and (max-width: 840px) {
  .container {
    display: grid;
    grid-template-columns: 1fr;
    gap: 48px;
  }

  .dash {
    padding: 4%;
  }

  .nav-col {
    position: relative;
    top: auto;
  }
}
    </style>
</head>
<body>
<div class="wrap">
  <div class="dash">
    <div class="container">
      <div class="nav-col">
        <h3><span>23 </span>Active Projects</h3>
        <input class="search" type="text" placeholder="Search projects..">
        <ul class="projects">
          <li><a class="active" href="">Jetboost</a></li>
          <li><a href="">PrivateAir FAQ</a></li>
          <li><a href="">Shuttercrate Template</a></li>
          <li><a href="">CodeCrumbs</a></li>
          <li><a href="">Test Nested Filters</a></li>
          <li><a href="">E-Commerce Favorites</a></li>
          <li><a href="">Project Vote System</a></li>
          <li><a href="">Sorting Booster Test</a></li>
          <li><a href="">CodeCrumbs Sorting</a></li>
          <li><a href="">Portfolio Grid Test</a></li>
          <li><a href="">Shuttercrate Clone Test</a></li>
          <li><a href="">Ruby Red</a></li>
          <li><a href="">Nike Skateboarding</a></li>
          <li><a href="">E-Com Cart System</a></li>
          <li><a href="">Jetboost Playground</a></li>
        </ul>
        <div class="connect">
          <div class="connect-top">
            Missing a site?
            <svg viewBox="0 0 24 24" fill="none" stroke="#5E72E4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
              <path d="M11.4693 6.69607L13.3255 4.83991C13.7085 4.45658 14.1632 4.15246 14.6638 3.94492C15.1643 3.73738 15.7008 3.6305 16.2427 3.63037C16.7846 3.63025 17.3211 3.73688 17.8218 3.94418C18.3224 4.15149 18.7773 4.4554 19.1605 4.83856C19.5436 5.22171 19.8475 5.6766 20.0548 6.17725C20.2621 6.67789 20.3688 7.21447 20.3687 7.75633C20.3685 8.29819 20.2616 8.83472 20.0541 9.33527C19.8466 9.83581 19.5424 10.2906 19.1591 10.6735L16.5075 13.3252C16.1244 13.7082 15.6697 14.0121 15.1692 14.2194C14.6687 14.4267 14.1323 14.5334 13.5906 14.5334C13.0489 14.5334 12.5125 14.4267 12.0121 14.2194C11.5116 14.0121 11.0569 13.7082 10.6738 13.3252"/>
              <path d="M12.5297 17.3031L10.6735 19.1593C10.2906 19.5426 9.83582 19.8467 9.33527 20.0543C8.83473 20.2618 8.2982 20.3687 7.75633 20.3688C7.21447 20.369 6.67789 20.2623 6.17725 20.055C5.6766 19.8477 5.22171 19.5438 4.83856 19.1606C4.4554 18.7775 4.15149 18.3226 3.94418 17.822C3.73688 17.3213 3.63025 16.7847 3.63037 16.2429C3.6305 15.701 3.73738 15.1645 3.94492 14.6639C4.15246 14.1634 4.45658 13.7086 4.83991 13.3257L7.49157 10.674C7.87461 10.291 8.32934 9.98712 8.82981 9.77982C9.33028 9.57252 9.86668 9.46582 10.4084 9.46582C10.9501 9.46582 11.4865 9.57252 11.987 9.77982C12.4874 9.98712 12.9422 10.291 13.3252 10.674" stroke="#5E72E4"/>
            </svg>
          </div>
          <p>Authorize which sites Jetboost has access to. Add or reconnect a projects to view them here 👉🏼</p>
          <a href="#">Connect Webflow</a>
        </div>
      </div>
      <div class="cont-col">
        <div class="project-card"> 
          <div class="top">
            <img src="https://screenshots.webflow.com/sites/61fd2c921c1f0751330b7b29/20220622081535_0ff99e4c1caa728910b7c835ec90b962.png" />
            <div class="top-name-wrap">
              <h3>Vergo Bank</h3>
              <div class="p-link">
                <div>
                  <span>Staging:</span>
                  <a href="">yoursite.webflow.io</a>
                </div>
                <div>
                  <span>Custom:</span>
                  <a href="">yoursite.com</a>
                  <a href="">yoursitetwo.com</a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="boost-wrap">
              
              <div class="booster-card">
                <div class="boost-name-wrap">
                  <div class="boost-name">
                    Desktop category Filters
                  </div>
                  <div class="boost-badge">
                    <svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.2605 6H26.7394C26.9331 6 27.1227 6.05627 27.285 6.16198C27.4474 6.26769 27.5755 6.41828 27.6539 6.59545C27.7323 6.77262 27.7575 6.96874 27.7265 7.15997C27.6955 7.35121 27.6097 7.52932 27.4793 7.67267L19.26 16.7139C19.0927 16.898 18.9999 17.1378 18.9999 17.3866V24.4648C18.9999 24.6294 18.9593 24.7915 18.8816 24.9367C18.8039 25.0818 18.6916 25.2055 18.5546 25.2969L14.5546 27.9635C14.404 28.0639 14.229 28.1216 14.0482 28.1303C13.8674 28.1391 13.6877 28.0986 13.5281 28.0132C13.3685 27.9278 13.2351 27.8006 13.1421 27.6454C13.0491 27.4901 12.9999 27.3125 12.9999 27.1315V17.3866C12.9999 17.1378 12.9072 16.898 12.7399 16.7139L4.52056 7.67267C4.39024 7.52932 4.30437 7.35121 4.27338 7.15997C4.24239 6.96874 4.26761 6.77262 4.34598 6.59545C4.42436 6.41828 4.55251 6.26769 4.71486 6.16198C4.87721 6.05627 5.06677 6 5.2605 6V6Z"/>
                    </svg>
                    Dynamic List Filters
                  </div>
                </div>
                <div class="toggle-wrap">
                  <div class="toggle-item">
                    <div class="toggle-label alt">Staging</div>
                    <input type="checkbox" id="switch" /><label for="switch">Toggle</label>
                  </div>
                  <div class="toggle-item">
                    <div class="toggle-label">Live</div>
                    <div class="locked">
                      <svg viewBox="0 0 33 33" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.1592 11.1648H6.15918C5.60689 11.1648 5.15918 11.6125 5.15918 12.1648V26.1648C5.15918 26.7171 5.60689 27.1648 6.15918 27.1648H26.1592C26.7115 27.1648 27.1592 26.7171 27.1592 26.1648V12.1648C27.1592 11.6125 26.7115 11.1648 26.1592 11.1648Z"/>
                        <path d="M11.6592 11.1648V6.66479C11.6592 5.47132 12.1333 4.32673 12.9772 3.48281C13.8211 2.6389 14.9657 2.16479 16.1592 2.16479C17.3527 2.16479 18.4972 2.6389 19.3412 3.48281C20.1851 4.32673 20.6592 5.47132 20.6592 6.66479V11.1648"/>
                        <path d="M16.1592 20.6648C16.9876 20.6648 17.6592 19.9932 17.6592 19.1648C17.6592 18.3364 16.9876 17.6648 16.1592 17.6648C15.3308 17.6648 14.6592 18.3364 14.6592 19.1648C14.6592 19.9932 15.3308 20.6648 16.1592 20.6648Z" fill="currentColor"/>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="action-btn-group">
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4524 2.89607L11.1742 6.17434L11.6161 8.38405L13.8258 8.82599L17.1041 5.54772L17.1044 5.54758C17.5102 6.50542 17.6072 7.56593 17.382 8.58151C17.1568 9.59708 16.6206 10.5172 15.848 11.2137C15.0754 11.9103 14.1049 12.3486 13.0715 12.4677C12.0381 12.5869 10.9933 12.3808 10.0824 11.8783L10.0825 11.8782L5.7008 16.951C5.3491 17.3023 4.8723 17.4996 4.3752 17.4994C3.8781 17.4993 3.40141 17.3017 3.04991 16.9502C2.69841 16.5987 2.50087 16.122 2.50073 15.6249C2.50059 15.1278 2.69785 14.651 3.04915 14.2993L8.12192 9.91767L8.12181 9.91772C7.61931 9.0069 7.41327 7.96207 7.53239 6.92868C7.65151 5.89528 8.08986 4.92473 8.78641 4.15213C9.48296 3.37952 10.4031 2.84331 11.4186 2.61812C12.4342 2.39293 13.4947 2.48998 14.4526 2.89575L14.4524 2.89607Z"/>
                    </svg>
                  </a>
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.8748 4.375L3.12476 4.375"/>
                      <path d="M8.125 8.125V13.125"/>
                      <path d="M11.875 8.125V13.125"/>
                      <path d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"/>
                      <path d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"/>
                    </svg>
                  </a>
                </div>
                <div class="jb-class">
                  xb3v
                </div>
              </div>
              
              <div class="booster-card">
                <div class="boost-name-wrap">
                  <div class="boost-name">
                    Desktop category Filters
                  </div>
                  <div class="boost-badge">
                    <svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.2605 6H26.7394C26.9331 6 27.1227 6.05627 27.285 6.16198C27.4474 6.26769 27.5755 6.41828 27.6539 6.59545C27.7323 6.77262 27.7575 6.96874 27.7265 7.15997C27.6955 7.35121 27.6097 7.52932 27.4793 7.67267L19.26 16.7139C19.0927 16.898 18.9999 17.1378 18.9999 17.3866V24.4648C18.9999 24.6294 18.9593 24.7915 18.8816 24.9367C18.8039 25.0818 18.6916 25.2055 18.5546 25.2969L14.5546 27.9635C14.404 28.0639 14.229 28.1216 14.0482 28.1303C13.8674 28.1391 13.6877 28.0986 13.5281 28.0132C13.3685 27.9278 13.2351 27.8006 13.1421 27.6454C13.0491 27.4901 12.9999 27.3125 12.9999 27.1315V17.3866C12.9999 17.1378 12.9072 16.898 12.7399 16.7139L4.52056 7.67267C4.39024 7.52932 4.30437 7.35121 4.27338 7.15997C4.24239 6.96874 4.26761 6.77262 4.34598 6.59545C4.42436 6.41828 4.55251 6.26769 4.71486 6.16198C4.87721 6.05627 5.06677 6 5.2605 6V6Z"/>
                    </svg>
                    Dynamic List Filters
                  </div>
                </div>
                <div class="toggle-wrap">
                  <div class="toggle-item">
                    <div class="toggle-label alt">Staging</div>
                    <input type="checkbox" id="switch-2" /><label for="switch-2">Toggle</label>
                  </div>
                  <div class="toggle-item">
                    <div class="toggle-label">Live</div>
                    <div class="locked">
                      <svg viewBox="0 0 33 33" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.1592 11.1648H6.15918C5.60689 11.1648 5.15918 11.6125 5.15918 12.1648V26.1648C5.15918 26.7171 5.60689 27.1648 6.15918 27.1648H26.1592C26.7115 27.1648 27.1592 26.7171 27.1592 26.1648V12.1648C27.1592 11.6125 26.7115 11.1648 26.1592 11.1648Z"/>
                        <path d="M11.6592 11.1648V6.66479C11.6592 5.47132 12.1333 4.32673 12.9772 3.48281C13.8211 2.6389 14.9657 2.16479 16.1592 2.16479C17.3527 2.16479 18.4972 2.6389 19.3412 3.48281C20.1851 4.32673 20.6592 5.47132 20.6592 6.66479V11.1648"/>
                        <path d="M16.1592 20.6648C16.9876 20.6648 17.6592 19.9932 17.6592 19.1648C17.6592 18.3364 16.9876 17.6648 16.1592 17.6648C15.3308 17.6648 14.6592 18.3364 14.6592 19.1648C14.6592 19.9932 15.3308 20.6648 16.1592 20.6648Z" fill="currentColor"/>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="action-btn-group">
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4524 2.89607L11.1742 6.17434L11.6161 8.38405L13.8258 8.82599L17.1041 5.54772L17.1044 5.54758C17.5102 6.50542 17.6072 7.56593 17.382 8.58151C17.1568 9.59708 16.6206 10.5172 15.848 11.2137C15.0754 11.9103 14.1049 12.3486 13.0715 12.4677C12.0381 12.5869 10.9933 12.3808 10.0824 11.8783L10.0825 11.8782L5.7008 16.951C5.3491 17.3023 4.8723 17.4996 4.3752 17.4994C3.8781 17.4993 3.40141 17.3017 3.04991 16.9502C2.69841 16.5987 2.50087 16.122 2.50073 15.6249C2.50059 15.1278 2.69785 14.651 3.04915 14.2993L8.12192 9.91767L8.12181 9.91772C7.61931 9.0069 7.41327 7.96207 7.53239 6.92868C7.65151 5.89528 8.08986 4.92473 8.78641 4.15213C9.48296 3.37952 10.4031 2.84331 11.4186 2.61812C12.4342 2.39293 13.4947 2.48998 14.4526 2.89575L14.4524 2.89607Z"/>
                    </svg>
                  </a>
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.8748 4.375L3.12476 4.375"/>
                      <path d="M8.125 8.125V13.125"/>
                      <path d="M11.875 8.125V13.125"/>
                      <path d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"/>
                      <path d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"/>
                    </svg>
                  </a>
                </div>
                <div class="jb-class">
                  xb3v
                </div>
              </div>
              
              <div class="booster-card">
                <div class="boost-name-wrap">
                  <div class="boost-name">
                    Desktop category Filters
                  </div>
                  <div class="boost-badge">
                    <svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.2605 6H26.7394C26.9331 6 27.1227 6.05627 27.285 6.16198C27.4474 6.26769 27.5755 6.41828 27.6539 6.59545C27.7323 6.77262 27.7575 6.96874 27.7265 7.15997C27.6955 7.35121 27.6097 7.52932 27.4793 7.67267L19.26 16.7139C19.0927 16.898 18.9999 17.1378 18.9999 17.3866V24.4648C18.9999 24.6294 18.9593 24.7915 18.8816 24.9367C18.8039 25.0818 18.6916 25.2055 18.5546 25.2969L14.5546 27.9635C14.404 28.0639 14.229 28.1216 14.0482 28.1303C13.8674 28.1391 13.6877 28.0986 13.5281 28.0132C13.3685 27.9278 13.2351 27.8006 13.1421 27.6454C13.0491 27.4901 12.9999 27.3125 12.9999 27.1315V17.3866C12.9999 17.1378 12.9072 16.898 12.7399 16.7139L4.52056 7.67267C4.39024 7.52932 4.30437 7.35121 4.27338 7.15997C4.24239 6.96874 4.26761 6.77262 4.34598 6.59545C4.42436 6.41828 4.55251 6.26769 4.71486 6.16198C4.87721 6.05627 5.06677 6 5.2605 6V6Z"/>
                    </svg>
                    Dynamic List Filters
                  </div>
                </div>
                <div class="toggle-wrap">
                  <div class="toggle-item">
                    <div class="toggle-label alt">Staging</div>
                    <input type="checkbox" id="switch-3" /><label for="switch-3">Toggle</label>
                  </div>
                  <div class="toggle-item">
                    <div class="toggle-label">Live</div>
                    <div class="locked">
                      <svg viewBox="0 0 33 33" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.1592 11.1648H6.15918C5.60689 11.1648 5.15918 11.6125 5.15918 12.1648V26.1648C5.15918 26.7171 5.60689 27.1648 6.15918 27.1648H26.1592C26.7115 27.1648 27.1592 26.7171 27.1592 26.1648V12.1648C27.1592 11.6125 26.7115 11.1648 26.1592 11.1648Z"/>
                        <path d="M11.6592 11.1648V6.66479C11.6592 5.47132 12.1333 4.32673 12.9772 3.48281C13.8211 2.6389 14.9657 2.16479 16.1592 2.16479C17.3527 2.16479 18.4972 2.6389 19.3412 3.48281C20.1851 4.32673 20.6592 5.47132 20.6592 6.66479V11.1648"/>
                        <path d="M16.1592 20.6648C16.9876 20.6648 17.6592 19.9932 17.6592 19.1648C17.6592 18.3364 16.9876 17.6648 16.1592 17.6648C15.3308 17.6648 14.6592 18.3364 14.6592 19.1648C14.6592 19.9932 15.3308 20.6648 16.1592 20.6648Z" fill="currentColor"/>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="action-btn-group">
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4524 2.89607L11.1742 6.17434L11.6161 8.38405L13.8258 8.82599L17.1041 5.54772L17.1044 5.54758C17.5102 6.50542 17.6072 7.56593 17.382 8.58151C17.1568 9.59708 16.6206 10.5172 15.848 11.2137C15.0754 11.9103 14.1049 12.3486 13.0715 12.4677C12.0381 12.5869 10.9933 12.3808 10.0824 11.8783L10.0825 11.8782L5.7008 16.951C5.3491 17.3023 4.8723 17.4996 4.3752 17.4994C3.8781 17.4993 3.40141 17.3017 3.04991 16.9502C2.69841 16.5987 2.50087 16.122 2.50073 15.6249C2.50059 15.1278 2.69785 14.651 3.04915 14.2993L8.12192 9.91767L8.12181 9.91772C7.61931 9.0069 7.41327 7.96207 7.53239 6.92868C7.65151 5.89528 8.08986 4.92473 8.78641 4.15213C9.48296 3.37952 10.4031 2.84331 11.4186 2.61812C12.4342 2.39293 13.4947 2.48998 14.4526 2.89575L14.4524 2.89607Z"/>
                    </svg>
                  </a>
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.8748 4.375L3.12476 4.375"/>
                      <path d="M8.125 8.125V13.125"/>
                      <path d="M11.875 8.125V13.125"/>
                      <path d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"/>
                      <path d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"/>
                    </svg>
                  </a>
                </div>
                <div class="jb-class">
                  xb3v
                </div>
              </div>
              
            </div>
          </div>
        </div>
        
        <div class="project-card"> 
          <div class="top">
            <img src="https://uploads-ssl.webflow.com/62c1b4c285cee8734621791e/62cda3616fb4cbcaf27417a3_B.png" />
            <div class="top-name-wrap">
              <h3>Hudson Fusion</h3>
              <div class="p-link">
                <div>
                  <span>Staging:</span>
                  <a href="">yoursite.webflow.io</a>
                </div>
                <div>
                  <span>Custom:</span>
                  <a href="">yoursite.com</a>
                  <a href="">yoursitetwo.com</a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="boost-wrap">
              
              <div class="booster-card">
                <div class="boost-name-wrap">
                  <div class="boost-name">
                    Desktop category Filters
                  </div>
                  <div class="boost-badge">
                    <svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.2605 6H26.7394C26.9331 6 27.1227 6.05627 27.285 6.16198C27.4474 6.26769 27.5755 6.41828 27.6539 6.59545C27.7323 6.77262 27.7575 6.96874 27.7265 7.15997C27.6955 7.35121 27.6097 7.52932 27.4793 7.67267L19.26 16.7139C19.0927 16.898 18.9999 17.1378 18.9999 17.3866V24.4648C18.9999 24.6294 18.9593 24.7915 18.8816 24.9367C18.8039 25.0818 18.6916 25.2055 18.5546 25.2969L14.5546 27.9635C14.404 28.0639 14.229 28.1216 14.0482 28.1303C13.8674 28.1391 13.6877 28.0986 13.5281 28.0132C13.3685 27.9278 13.2351 27.8006 13.1421 27.6454C13.0491 27.4901 12.9999 27.3125 12.9999 27.1315V17.3866C12.9999 17.1378 12.9072 16.898 12.7399 16.7139L4.52056 7.67267C4.39024 7.52932 4.30437 7.35121 4.27338 7.15997C4.24239 6.96874 4.26761 6.77262 4.34598 6.59545C4.42436 6.41828 4.55251 6.26769 4.71486 6.16198C4.87721 6.05627 5.06677 6 5.2605 6V6Z"/>
                    </svg>
                    Dynamic List Filters
                  </div>
                </div>
                <div class="toggle-wrap">
                  <div class="toggle-item">
                    <div class="toggle-label alt">Staging</div>
                    <input type="checkbox" id="switch" /><label for="switch">Toggle</label>
                  </div>
                  <div class="toggle-item">
                    <div class="toggle-label">Live</div>
                    <div class="locked">
                      <svg viewBox="0 0 33 33" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.1592 11.1648H6.15918C5.60689 11.1648 5.15918 11.6125 5.15918 12.1648V26.1648C5.15918 26.7171 5.60689 27.1648 6.15918 27.1648H26.1592C26.7115 27.1648 27.1592 26.7171 27.1592 26.1648V12.1648C27.1592 11.6125 26.7115 11.1648 26.1592 11.1648Z"/>
                        <path d="M11.6592 11.1648V6.66479C11.6592 5.47132 12.1333 4.32673 12.9772 3.48281C13.8211 2.6389 14.9657 2.16479 16.1592 2.16479C17.3527 2.16479 18.4972 2.6389 19.3412 3.48281C20.1851 4.32673 20.6592 5.47132 20.6592 6.66479V11.1648"/>
                        <path d="M16.1592 20.6648C16.9876 20.6648 17.6592 19.9932 17.6592 19.1648C17.6592 18.3364 16.9876 17.6648 16.1592 17.6648C15.3308 17.6648 14.6592 18.3364 14.6592 19.1648C14.6592 19.9932 15.3308 20.6648 16.1592 20.6648Z" fill="currentColor"/>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="action-btn-group">
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4524 2.89607L11.1742 6.17434L11.6161 8.38405L13.8258 8.82599L17.1041 5.54772L17.1044 5.54758C17.5102 6.50542 17.6072 7.56593 17.382 8.58151C17.1568 9.59708 16.6206 10.5172 15.848 11.2137C15.0754 11.9103 14.1049 12.3486 13.0715 12.4677C12.0381 12.5869 10.9933 12.3808 10.0824 11.8783L10.0825 11.8782L5.7008 16.951C5.3491 17.3023 4.8723 17.4996 4.3752 17.4994C3.8781 17.4993 3.40141 17.3017 3.04991 16.9502C2.69841 16.5987 2.50087 16.122 2.50073 15.6249C2.50059 15.1278 2.69785 14.651 3.04915 14.2993L8.12192 9.91767L8.12181 9.91772C7.61931 9.0069 7.41327 7.96207 7.53239 6.92868C7.65151 5.89528 8.08986 4.92473 8.78641 4.15213C9.48296 3.37952 10.4031 2.84331 11.4186 2.61812C12.4342 2.39293 13.4947 2.48998 14.4526 2.89575L14.4524 2.89607Z"/>
                    </svg>
                  </a>
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.8748 4.375L3.12476 4.375"/>
                      <path d="M8.125 8.125V13.125"/>
                      <path d="M11.875 8.125V13.125"/>
                      <path d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"/>
                      <path d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"/>
                    </svg>
                  </a>
                </div>
                <div class="jb-class">
                  xb3v
                </div>
              </div>
              
              <div class="booster-card">
                <div class="boost-name-wrap">
                  <div class="boost-name">
                    Desktop category Filters
                  </div>
                  <div class="boost-badge">
                    <svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.2605 6H26.7394C26.9331 6 27.1227 6.05627 27.285 6.16198C27.4474 6.26769 27.5755 6.41828 27.6539 6.59545C27.7323 6.77262 27.7575 6.96874 27.7265 7.15997C27.6955 7.35121 27.6097 7.52932 27.4793 7.67267L19.26 16.7139C19.0927 16.898 18.9999 17.1378 18.9999 17.3866V24.4648C18.9999 24.6294 18.9593 24.7915 18.8816 24.9367C18.8039 25.0818 18.6916 25.2055 18.5546 25.2969L14.5546 27.9635C14.404 28.0639 14.229 28.1216 14.0482 28.1303C13.8674 28.1391 13.6877 28.0986 13.5281 28.0132C13.3685 27.9278 13.2351 27.8006 13.1421 27.6454C13.0491 27.4901 12.9999 27.3125 12.9999 27.1315V17.3866C12.9999 17.1378 12.9072 16.898 12.7399 16.7139L4.52056 7.67267C4.39024 7.52932 4.30437 7.35121 4.27338 7.15997C4.24239 6.96874 4.26761 6.77262 4.34598 6.59545C4.42436 6.41828 4.55251 6.26769 4.71486 6.16198C4.87721 6.05627 5.06677 6 5.2605 6V6Z"/>
                    </svg>
                    Dynamic List Filters
                  </div>
                </div>
                <div class="toggle-wrap">
                  <div class="toggle-item">
                    <div class="toggle-label alt">Staging</div>
                    <input type="checkbox" id="switch-2" /><label for="switch-2">Toggle</label>
                  </div>
                  <div class="toggle-item">
                    <div class="toggle-label">Live</div>
                    <div class="locked">
                      <svg viewBox="0 0 33 33" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.1592 11.1648H6.15918C5.60689 11.1648 5.15918 11.6125 5.15918 12.1648V26.1648C5.15918 26.7171 5.60689 27.1648 6.15918 27.1648H26.1592C26.7115 27.1648 27.1592 26.7171 27.1592 26.1648V12.1648C27.1592 11.6125 26.7115 11.1648 26.1592 11.1648Z"/>
                        <path d="M11.6592 11.1648V6.66479C11.6592 5.47132 12.1333 4.32673 12.9772 3.48281C13.8211 2.6389 14.9657 2.16479 16.1592 2.16479C17.3527 2.16479 18.4972 2.6389 19.3412 3.48281C20.1851 4.32673 20.6592 5.47132 20.6592 6.66479V11.1648"/>
                        <path d="M16.1592 20.6648C16.9876 20.6648 17.6592 19.9932 17.6592 19.1648C17.6592 18.3364 16.9876 17.6648 16.1592 17.6648C15.3308 17.6648 14.6592 18.3364 14.6592 19.1648C14.6592 19.9932 15.3308 20.6648 16.1592 20.6648Z" fill="currentColor"/>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="action-btn-group">
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4524 2.89607L11.1742 6.17434L11.6161 8.38405L13.8258 8.82599L17.1041 5.54772L17.1044 5.54758C17.5102 6.50542 17.6072 7.56593 17.382 8.58151C17.1568 9.59708 16.6206 10.5172 15.848 11.2137C15.0754 11.9103 14.1049 12.3486 13.0715 12.4677C12.0381 12.5869 10.9933 12.3808 10.0824 11.8783L10.0825 11.8782L5.7008 16.951C5.3491 17.3023 4.8723 17.4996 4.3752 17.4994C3.8781 17.4993 3.40141 17.3017 3.04991 16.9502C2.69841 16.5987 2.50087 16.122 2.50073 15.6249C2.50059 15.1278 2.69785 14.651 3.04915 14.2993L8.12192 9.91767L8.12181 9.91772C7.61931 9.0069 7.41327 7.96207 7.53239 6.92868C7.65151 5.89528 8.08986 4.92473 8.78641 4.15213C9.48296 3.37952 10.4031 2.84331 11.4186 2.61812C12.4342 2.39293 13.4947 2.48998 14.4526 2.89575L14.4524 2.89607Z"/>
                    </svg>
                  </a>
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.8748 4.375L3.12476 4.375"/>
                      <path d="M8.125 8.125V13.125"/>
                      <path d="M11.875 8.125V13.125"/>
                      <path d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"/>
                      <path d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"/>
                    </svg>
                  </a>
                </div>
                <div class="jb-class">
                  xb3v
                </div>
              </div>
              
              <div class="booster-card">
                <div class="boost-name-wrap">
                  <div class="boost-name">
                    Desktop category Filters
                  </div>
                  <div class="boost-badge">
                    <svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.2605 6H26.7394C26.9331 6 27.1227 6.05627 27.285 6.16198C27.4474 6.26769 27.5755 6.41828 27.6539 6.59545C27.7323 6.77262 27.7575 6.96874 27.7265 7.15997C27.6955 7.35121 27.6097 7.52932 27.4793 7.67267L19.26 16.7139C19.0927 16.898 18.9999 17.1378 18.9999 17.3866V24.4648C18.9999 24.6294 18.9593 24.7915 18.8816 24.9367C18.8039 25.0818 18.6916 25.2055 18.5546 25.2969L14.5546 27.9635C14.404 28.0639 14.229 28.1216 14.0482 28.1303C13.8674 28.1391 13.6877 28.0986 13.5281 28.0132C13.3685 27.9278 13.2351 27.8006 13.1421 27.6454C13.0491 27.4901 12.9999 27.3125 12.9999 27.1315V17.3866C12.9999 17.1378 12.9072 16.898 12.7399 16.7139L4.52056 7.67267C4.39024 7.52932 4.30437 7.35121 4.27338 7.15997C4.24239 6.96874 4.26761 6.77262 4.34598 6.59545C4.42436 6.41828 4.55251 6.26769 4.71486 6.16198C4.87721 6.05627 5.06677 6 5.2605 6V6Z"/>
                    </svg>
                    Dynamic List Filters
                  </div>
                </div>
                <div class="toggle-wrap">
                  <div class="toggle-item">
                    <div class="toggle-label alt">Staging</div>
                    <input type="checkbox" id="switch-3" /><label for="switch-3">Toggle</label>
                  </div>
                  <div class="toggle-item">
                    <div class="toggle-label">Live</div>
                    <div class="locked">
                      <svg viewBox="0 0 33 33" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.1592 11.1648H6.15918C5.60689 11.1648 5.15918 11.6125 5.15918 12.1648V26.1648C5.15918 26.7171 5.60689 27.1648 6.15918 27.1648H26.1592C26.7115 27.1648 27.1592 26.7171 27.1592 26.1648V12.1648C27.1592 11.6125 26.7115 11.1648 26.1592 11.1648Z"/>
                        <path d="M11.6592 11.1648V6.66479C11.6592 5.47132 12.1333 4.32673 12.9772 3.48281C13.8211 2.6389 14.9657 2.16479 16.1592 2.16479C17.3527 2.16479 18.4972 2.6389 19.3412 3.48281C20.1851 4.32673 20.6592 5.47132 20.6592 6.66479V11.1648"/>
                        <path d="M16.1592 20.6648C16.9876 20.6648 17.6592 19.9932 17.6592 19.1648C17.6592 18.3364 16.9876 17.6648 16.1592 17.6648C15.3308 17.6648 14.6592 18.3364 14.6592 19.1648C14.6592 19.9932 15.3308 20.6648 16.1592 20.6648Z" fill="currentColor"/>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="action-btn-group">
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4524 2.89607L11.1742 6.17434L11.6161 8.38405L13.8258 8.82599L17.1041 5.54772L17.1044 5.54758C17.5102 6.50542 17.6072 7.56593 17.382 8.58151C17.1568 9.59708 16.6206 10.5172 15.848 11.2137C15.0754 11.9103 14.1049 12.3486 13.0715 12.4677C12.0381 12.5869 10.9933 12.3808 10.0824 11.8783L10.0825 11.8782L5.7008 16.951C5.3491 17.3023 4.8723 17.4996 4.3752 17.4994C3.8781 17.4993 3.40141 17.3017 3.04991 16.9502C2.69841 16.5987 2.50087 16.122 2.50073 15.6249C2.50059 15.1278 2.69785 14.651 3.04915 14.2993L8.12192 9.91767L8.12181 9.91772C7.61931 9.0069 7.41327 7.96207 7.53239 6.92868C7.65151 5.89528 8.08986 4.92473 8.78641 4.15213C9.48296 3.37952 10.4031 2.84331 11.4186 2.61812C12.4342 2.39293 13.4947 2.48998 14.4526 2.89575L14.4524 2.89607Z"/>
                    </svg>
                  </a>
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.8748 4.375L3.12476 4.375"/>
                      <path d="M8.125 8.125V13.125"/>
                      <path d="M11.875 8.125V13.125"/>
                      <path d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"/>
                      <path d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"/>
                    </svg>
                  </a>
                </div>
                <div class="jb-class">
                  xb3v
                </div>
              </div>
              
            </div>
          </div>
        </div>
        
        <div class="project-card"> 
          <div class="top">
            <img src="https://uploads-ssl.webflow.com/625d54a299d5a7663b3ba57b/62c02c53233ae9497027d3ad_Webflow_Thumbnail.png" />
            <div class="top-name-wrap">
              <h3>True Altitude</h3>
              <div class="p-link">
                <div>
                  <span>Staging:</span>
                  <a href="">yoursite.webflow.io</a>
                </div>
                <div>
                  <span>Custom:</span>
                  <a href="">yoursite.com</a>
                  <a href="">yoursitetwo.com</a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="boost-wrap">
              
              <div class="booster-card">
                <div class="boost-name-wrap">
                  <div class="boost-name">
                    Desktop category Filters
                  </div>
                  <div class="boost-badge">
                    <svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.2605 6H26.7394C26.9331 6 27.1227 6.05627 27.285 6.16198C27.4474 6.26769 27.5755 6.41828 27.6539 6.59545C27.7323 6.77262 27.7575 6.96874 27.7265 7.15997C27.6955 7.35121 27.6097 7.52932 27.4793 7.67267L19.26 16.7139C19.0927 16.898 18.9999 17.1378 18.9999 17.3866V24.4648C18.9999 24.6294 18.9593 24.7915 18.8816 24.9367C18.8039 25.0818 18.6916 25.2055 18.5546 25.2969L14.5546 27.9635C14.404 28.0639 14.229 28.1216 14.0482 28.1303C13.8674 28.1391 13.6877 28.0986 13.5281 28.0132C13.3685 27.9278 13.2351 27.8006 13.1421 27.6454C13.0491 27.4901 12.9999 27.3125 12.9999 27.1315V17.3866C12.9999 17.1378 12.9072 16.898 12.7399 16.7139L4.52056 7.67267C4.39024 7.52932 4.30437 7.35121 4.27338 7.15997C4.24239 6.96874 4.26761 6.77262 4.34598 6.59545C4.42436 6.41828 4.55251 6.26769 4.71486 6.16198C4.87721 6.05627 5.06677 6 5.2605 6V6Z"/>
                    </svg>
                    Dynamic List Filters
                  </div>
                </div>
                <div class="toggle-wrap">
                  <div class="toggle-item">
                    <div class="toggle-label alt">Staging</div>
                    <input type="checkbox" id="switch" /><label for="switch">Toggle</label>
                  </div>
                  <div class="toggle-item">
                    <div class="toggle-label">Live</div>
                    <div class="locked">
                      <svg viewBox="0 0 33 33" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.1592 11.1648H6.15918C5.60689 11.1648 5.15918 11.6125 5.15918 12.1648V26.1648C5.15918 26.7171 5.60689 27.1648 6.15918 27.1648H26.1592C26.7115 27.1648 27.1592 26.7171 27.1592 26.1648V12.1648C27.1592 11.6125 26.7115 11.1648 26.1592 11.1648Z"/>
                        <path d="M11.6592 11.1648V6.66479C11.6592 5.47132 12.1333 4.32673 12.9772 3.48281C13.8211 2.6389 14.9657 2.16479 16.1592 2.16479C17.3527 2.16479 18.4972 2.6389 19.3412 3.48281C20.1851 4.32673 20.6592 5.47132 20.6592 6.66479V11.1648"/>
                        <path d="M16.1592 20.6648C16.9876 20.6648 17.6592 19.9932 17.6592 19.1648C17.6592 18.3364 16.9876 17.6648 16.1592 17.6648C15.3308 17.6648 14.6592 18.3364 14.6592 19.1648C14.6592 19.9932 15.3308 20.6648 16.1592 20.6648Z" fill="currentColor"/>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="action-btn-group">
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4524 2.89607L11.1742 6.17434L11.6161 8.38405L13.8258 8.82599L17.1041 5.54772L17.1044 5.54758C17.5102 6.50542 17.6072 7.56593 17.382 8.58151C17.1568 9.59708 16.6206 10.5172 15.848 11.2137C15.0754 11.9103 14.1049 12.3486 13.0715 12.4677C12.0381 12.5869 10.9933 12.3808 10.0824 11.8783L10.0825 11.8782L5.7008 16.951C5.3491 17.3023 4.8723 17.4996 4.3752 17.4994C3.8781 17.4993 3.40141 17.3017 3.04991 16.9502C2.69841 16.5987 2.50087 16.122 2.50073 15.6249C2.50059 15.1278 2.69785 14.651 3.04915 14.2993L8.12192 9.91767L8.12181 9.91772C7.61931 9.0069 7.41327 7.96207 7.53239 6.92868C7.65151 5.89528 8.08986 4.92473 8.78641 4.15213C9.48296 3.37952 10.4031 2.84331 11.4186 2.61812C12.4342 2.39293 13.4947 2.48998 14.4526 2.89575L14.4524 2.89607Z"/>
                    </svg>
                  </a>
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.8748 4.375L3.12476 4.375"/>
                      <path d="M8.125 8.125V13.125"/>
                      <path d="M11.875 8.125V13.125"/>
                      <path d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"/>
                      <path d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"/>
                    </svg>
                  </a>
                </div>
                <div class="jb-class">
                  xb3v
                </div>
              </div>
              
              <div class="booster-card">
                <div class="boost-name-wrap">
                  <div class="boost-name">
                    Desktop category Filters
                  </div>
                  <div class="boost-badge">
                    <svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.2605 6H26.7394C26.9331 6 27.1227 6.05627 27.285 6.16198C27.4474 6.26769 27.5755 6.41828 27.6539 6.59545C27.7323 6.77262 27.7575 6.96874 27.7265 7.15997C27.6955 7.35121 27.6097 7.52932 27.4793 7.67267L19.26 16.7139C19.0927 16.898 18.9999 17.1378 18.9999 17.3866V24.4648C18.9999 24.6294 18.9593 24.7915 18.8816 24.9367C18.8039 25.0818 18.6916 25.2055 18.5546 25.2969L14.5546 27.9635C14.404 28.0639 14.229 28.1216 14.0482 28.1303C13.8674 28.1391 13.6877 28.0986 13.5281 28.0132C13.3685 27.9278 13.2351 27.8006 13.1421 27.6454C13.0491 27.4901 12.9999 27.3125 12.9999 27.1315V17.3866C12.9999 17.1378 12.9072 16.898 12.7399 16.7139L4.52056 7.67267C4.39024 7.52932 4.30437 7.35121 4.27338 7.15997C4.24239 6.96874 4.26761 6.77262 4.34598 6.59545C4.42436 6.41828 4.55251 6.26769 4.71486 6.16198C4.87721 6.05627 5.06677 6 5.2605 6V6Z"/>
                    </svg>
                    Dynamic List Filters
                  </div>
                </div>
                <div class="toggle-wrap">
                  <div class="toggle-item">
                    <div class="toggle-label alt">Staging</div>
                    <input type="checkbox" id="switch-2" /><label for="switch-2">Toggle</label>
                  </div>
                  <div class="toggle-item">
                    <div class="toggle-label">Live</div>
                    <div class="locked">
                      <svg viewBox="0 0 33 33" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.1592 11.1648H6.15918C5.60689 11.1648 5.15918 11.6125 5.15918 12.1648V26.1648C5.15918 26.7171 5.60689 27.1648 6.15918 27.1648H26.1592C26.7115 27.1648 27.1592 26.7171 27.1592 26.1648V12.1648C27.1592 11.6125 26.7115 11.1648 26.1592 11.1648Z"/>
                        <path d="M11.6592 11.1648V6.66479C11.6592 5.47132 12.1333 4.32673 12.9772 3.48281C13.8211 2.6389 14.9657 2.16479 16.1592 2.16479C17.3527 2.16479 18.4972 2.6389 19.3412 3.48281C20.1851 4.32673 20.6592 5.47132 20.6592 6.66479V11.1648"/>
                        <path d="M16.1592 20.6648C16.9876 20.6648 17.6592 19.9932 17.6592 19.1648C17.6592 18.3364 16.9876 17.6648 16.1592 17.6648C15.3308 17.6648 14.6592 18.3364 14.6592 19.1648C14.6592 19.9932 15.3308 20.6648 16.1592 20.6648Z" fill="currentColor"/>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="action-btn-group">
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4524 2.89607L11.1742 6.17434L11.6161 8.38405L13.8258 8.82599L17.1041 5.54772L17.1044 5.54758C17.5102 6.50542 17.6072 7.56593 17.382 8.58151C17.1568 9.59708 16.6206 10.5172 15.848 11.2137C15.0754 11.9103 14.1049 12.3486 13.0715 12.4677C12.0381 12.5869 10.9933 12.3808 10.0824 11.8783L10.0825 11.8782L5.7008 16.951C5.3491 17.3023 4.8723 17.4996 4.3752 17.4994C3.8781 17.4993 3.40141 17.3017 3.04991 16.9502C2.69841 16.5987 2.50087 16.122 2.50073 15.6249C2.50059 15.1278 2.69785 14.651 3.04915 14.2993L8.12192 9.91767L8.12181 9.91772C7.61931 9.0069 7.41327 7.96207 7.53239 6.92868C7.65151 5.89528 8.08986 4.92473 8.78641 4.15213C9.48296 3.37952 10.4031 2.84331 11.4186 2.61812C12.4342 2.39293 13.4947 2.48998 14.4526 2.89575L14.4524 2.89607Z"/>
                    </svg>
                  </a>
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.8748 4.375L3.12476 4.375"/>
                      <path d="M8.125 8.125V13.125"/>
                      <path d="M11.875 8.125V13.125"/>
                      <path d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"/>
                      <path d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"/>
                    </svg>
                  </a>
                </div>
                <div class="jb-class">
                  xb3v
                </div>
              </div>
              
              <div class="booster-card">
                <div class="boost-name-wrap">
                  <div class="boost-name">
                    Desktop category Filters
                  </div>
                  <div class="boost-badge">
                    <svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.2605 6H26.7394C26.9331 6 27.1227 6.05627 27.285 6.16198C27.4474 6.26769 27.5755 6.41828 27.6539 6.59545C27.7323 6.77262 27.7575 6.96874 27.7265 7.15997C27.6955 7.35121 27.6097 7.52932 27.4793 7.67267L19.26 16.7139C19.0927 16.898 18.9999 17.1378 18.9999 17.3866V24.4648C18.9999 24.6294 18.9593 24.7915 18.8816 24.9367C18.8039 25.0818 18.6916 25.2055 18.5546 25.2969L14.5546 27.9635C14.404 28.0639 14.229 28.1216 14.0482 28.1303C13.8674 28.1391 13.6877 28.0986 13.5281 28.0132C13.3685 27.9278 13.2351 27.8006 13.1421 27.6454C13.0491 27.4901 12.9999 27.3125 12.9999 27.1315V17.3866C12.9999 17.1378 12.9072 16.898 12.7399 16.7139L4.52056 7.67267C4.39024 7.52932 4.30437 7.35121 4.27338 7.15997C4.24239 6.96874 4.26761 6.77262 4.34598 6.59545C4.42436 6.41828 4.55251 6.26769 4.71486 6.16198C4.87721 6.05627 5.06677 6 5.2605 6V6Z"/>
                    </svg>
                    Dynamic List Filters
                  </div>
                </div>
                <div class="toggle-wrap">
                  <div class="toggle-item">
                    <div class="toggle-label alt">Staging</div>
                    <input type="checkbox" id="switch-3" /><label for="switch-3">Toggle</label>
                  </div>
                  <div class="toggle-item">
                    <div class="toggle-label">Live</div>
                    <div class="locked">
                      <svg viewBox="0 0 33 33" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.1592 11.1648H6.15918C5.60689 11.1648 5.15918 11.6125 5.15918 12.1648V26.1648C5.15918 26.7171 5.60689 27.1648 6.15918 27.1648H26.1592C26.7115 27.1648 27.1592 26.7171 27.1592 26.1648V12.1648C27.1592 11.6125 26.7115 11.1648 26.1592 11.1648Z"/>
                        <path d="M11.6592 11.1648V6.66479C11.6592 5.47132 12.1333 4.32673 12.9772 3.48281C13.8211 2.6389 14.9657 2.16479 16.1592 2.16479C17.3527 2.16479 18.4972 2.6389 19.3412 3.48281C20.1851 4.32673 20.6592 5.47132 20.6592 6.66479V11.1648"/>
                        <path d="M16.1592 20.6648C16.9876 20.6648 17.6592 19.9932 17.6592 19.1648C17.6592 18.3364 16.9876 17.6648 16.1592 17.6648C15.3308 17.6648 14.6592 18.3364 14.6592 19.1648C14.6592 19.9932 15.3308 20.6648 16.1592 20.6648Z" fill="currentColor"/>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="action-btn-group">
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4524 2.89607L11.1742 6.17434L11.6161 8.38405L13.8258 8.82599L17.1041 5.54772L17.1044 5.54758C17.5102 6.50542 17.6072 7.56593 17.382 8.58151C17.1568 9.59708 16.6206 10.5172 15.848 11.2137C15.0754 11.9103 14.1049 12.3486 13.0715 12.4677C12.0381 12.5869 10.9933 12.3808 10.0824 11.8783L10.0825 11.8782L5.7008 16.951C5.3491 17.3023 4.8723 17.4996 4.3752 17.4994C3.8781 17.4993 3.40141 17.3017 3.04991 16.9502C2.69841 16.5987 2.50087 16.122 2.50073 15.6249C2.50059 15.1278 2.69785 14.651 3.04915 14.2993L8.12192 9.91767L8.12181 9.91772C7.61931 9.0069 7.41327 7.96207 7.53239 6.92868C7.65151 5.89528 8.08986 4.92473 8.78641 4.15213C9.48296 3.37952 10.4031 2.84331 11.4186 2.61812C12.4342 2.39293 13.4947 2.48998 14.4526 2.89575L14.4524 2.89607Z"/>
                    </svg>
                  </a>
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.8748 4.375L3.12476 4.375"/>
                      <path d="M8.125 8.125V13.125"/>
                      <path d="M11.875 8.125V13.125"/>
                      <path d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"/>
                      <path d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"/>
                    </svg>
                  </a>
                </div>
                <div class="jb-class">
                  xb3v
                </div>
              </div>
              
            </div>
          </div>
        </div>
        
        <div class="project-card"> 
          <div class="top">
            <img src="https://screenshots.webflow.com/sites/6281caf6259cf87855230e88/20220703033820_05c2b6777728fec8a608844b9e2abedf.png" />
            <div class="top-name-wrap">
              <h3>TriviaWhizz</h3>
              <div class="p-link">
                <div>
                  <span>Staging:</span>
                  <a href="">yoursite.webflow.io</a>
                </div>
                <div>
                  <span>Custom:</span>
                  <a href="">yoursite.com</a>
                  <a href="">yoursitetwo.com</a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="boost-wrap">
              
              <div class="booster-card">
                <div class="boost-name-wrap">
                  <div class="boost-name">
                    Desktop category Filters
                  </div>
                  <div class="boost-badge">
                    <svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.2605 6H26.7394C26.9331 6 27.1227 6.05627 27.285 6.16198C27.4474 6.26769 27.5755 6.41828 27.6539 6.59545C27.7323 6.77262 27.7575 6.96874 27.7265 7.15997C27.6955 7.35121 27.6097 7.52932 27.4793 7.67267L19.26 16.7139C19.0927 16.898 18.9999 17.1378 18.9999 17.3866V24.4648C18.9999 24.6294 18.9593 24.7915 18.8816 24.9367C18.8039 25.0818 18.6916 25.2055 18.5546 25.2969L14.5546 27.9635C14.404 28.0639 14.229 28.1216 14.0482 28.1303C13.8674 28.1391 13.6877 28.0986 13.5281 28.0132C13.3685 27.9278 13.2351 27.8006 13.1421 27.6454C13.0491 27.4901 12.9999 27.3125 12.9999 27.1315V17.3866C12.9999 17.1378 12.9072 16.898 12.7399 16.7139L4.52056 7.67267C4.39024 7.52932 4.30437 7.35121 4.27338 7.15997C4.24239 6.96874 4.26761 6.77262 4.34598 6.59545C4.42436 6.41828 4.55251 6.26769 4.71486 6.16198C4.87721 6.05627 5.06677 6 5.2605 6V6Z"/>
                    </svg>
                    Dynamic List Filters
                  </div>
                </div>
                <div class="toggle-wrap">
                  <div class="toggle-item">
                    <div class="toggle-label alt">Staging</div>
                    <input type="checkbox" id="switch" /><label for="switch">Toggle</label>
                  </div>
                  <div class="toggle-item">
                    <div class="toggle-label">Live</div>
                    <div class="locked">
                      <svg viewBox="0 0 33 33" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.1592 11.1648H6.15918C5.60689 11.1648 5.15918 11.6125 5.15918 12.1648V26.1648C5.15918 26.7171 5.60689 27.1648 6.15918 27.1648H26.1592C26.7115 27.1648 27.1592 26.7171 27.1592 26.1648V12.1648C27.1592 11.6125 26.7115 11.1648 26.1592 11.1648Z"/>
                        <path d="M11.6592 11.1648V6.66479C11.6592 5.47132 12.1333 4.32673 12.9772 3.48281C13.8211 2.6389 14.9657 2.16479 16.1592 2.16479C17.3527 2.16479 18.4972 2.6389 19.3412 3.48281C20.1851 4.32673 20.6592 5.47132 20.6592 6.66479V11.1648"/>
                        <path d="M16.1592 20.6648C16.9876 20.6648 17.6592 19.9932 17.6592 19.1648C17.6592 18.3364 16.9876 17.6648 16.1592 17.6648C15.3308 17.6648 14.6592 18.3364 14.6592 19.1648C14.6592 19.9932 15.3308 20.6648 16.1592 20.6648Z" fill="currentColor"/>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="action-btn-group">
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4524 2.89607L11.1742 6.17434L11.6161 8.38405L13.8258 8.82599L17.1041 5.54772L17.1044 5.54758C17.5102 6.50542 17.6072 7.56593 17.382 8.58151C17.1568 9.59708 16.6206 10.5172 15.848 11.2137C15.0754 11.9103 14.1049 12.3486 13.0715 12.4677C12.0381 12.5869 10.9933 12.3808 10.0824 11.8783L10.0825 11.8782L5.7008 16.951C5.3491 17.3023 4.8723 17.4996 4.3752 17.4994C3.8781 17.4993 3.40141 17.3017 3.04991 16.9502C2.69841 16.5987 2.50087 16.122 2.50073 15.6249C2.50059 15.1278 2.69785 14.651 3.04915 14.2993L8.12192 9.91767L8.12181 9.91772C7.61931 9.0069 7.41327 7.96207 7.53239 6.92868C7.65151 5.89528 8.08986 4.92473 8.78641 4.15213C9.48296 3.37952 10.4031 2.84331 11.4186 2.61812C12.4342 2.39293 13.4947 2.48998 14.4526 2.89575L14.4524 2.89607Z"/>
                    </svg>
                  </a>
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.8748 4.375L3.12476 4.375"/>
                      <path d="M8.125 8.125V13.125"/>
                      <path d="M11.875 8.125V13.125"/>
                      <path d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"/>
                      <path d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"/>
                    </svg>
                  </a>
                </div>
                <div class="jb-class">
                  xb3v
                </div>
              </div>
              
              <div class="booster-card">
                <div class="boost-name-wrap">
                  <div class="boost-name">
                    Desktop category Filters
                  </div>
                  <div class="boost-badge">
                    <svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.2605 6H26.7394C26.9331 6 27.1227 6.05627 27.285 6.16198C27.4474 6.26769 27.5755 6.41828 27.6539 6.59545C27.7323 6.77262 27.7575 6.96874 27.7265 7.15997C27.6955 7.35121 27.6097 7.52932 27.4793 7.67267L19.26 16.7139C19.0927 16.898 18.9999 17.1378 18.9999 17.3866V24.4648C18.9999 24.6294 18.9593 24.7915 18.8816 24.9367C18.8039 25.0818 18.6916 25.2055 18.5546 25.2969L14.5546 27.9635C14.404 28.0639 14.229 28.1216 14.0482 28.1303C13.8674 28.1391 13.6877 28.0986 13.5281 28.0132C13.3685 27.9278 13.2351 27.8006 13.1421 27.6454C13.0491 27.4901 12.9999 27.3125 12.9999 27.1315V17.3866C12.9999 17.1378 12.9072 16.898 12.7399 16.7139L4.52056 7.67267C4.39024 7.52932 4.30437 7.35121 4.27338 7.15997C4.24239 6.96874 4.26761 6.77262 4.34598 6.59545C4.42436 6.41828 4.55251 6.26769 4.71486 6.16198C4.87721 6.05627 5.06677 6 5.2605 6V6Z"/>
                    </svg>
                    Dynamic List Filters
                  </div>
                </div>
                <div class="toggle-wrap">
                  <div class="toggle-item">
                    <div class="toggle-label alt">Staging</div>
                    <input type="checkbox" id="switch-2" /><label for="switch-2">Toggle</label>
                  </div>
                  <div class="toggle-item">
                    <div class="toggle-label">Live</div>
                    <div class="locked">
                      <svg viewBox="0 0 33 33" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.1592 11.1648H6.15918C5.60689 11.1648 5.15918 11.6125 5.15918 12.1648V26.1648C5.15918 26.7171 5.60689 27.1648 6.15918 27.1648H26.1592C26.7115 27.1648 27.1592 26.7171 27.1592 26.1648V12.1648C27.1592 11.6125 26.7115 11.1648 26.1592 11.1648Z"/>
                        <path d="M11.6592 11.1648V6.66479C11.6592 5.47132 12.1333 4.32673 12.9772 3.48281C13.8211 2.6389 14.9657 2.16479 16.1592 2.16479C17.3527 2.16479 18.4972 2.6389 19.3412 3.48281C20.1851 4.32673 20.6592 5.47132 20.6592 6.66479V11.1648"/>
                        <path d="M16.1592 20.6648C16.9876 20.6648 17.6592 19.9932 17.6592 19.1648C17.6592 18.3364 16.9876 17.6648 16.1592 17.6648C15.3308 17.6648 14.6592 18.3364 14.6592 19.1648C14.6592 19.9932 15.3308 20.6648 16.1592 20.6648Z" fill="currentColor"/>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="action-btn-group">
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4524 2.89607L11.1742 6.17434L11.6161 8.38405L13.8258 8.82599L17.1041 5.54772L17.1044 5.54758C17.5102 6.50542 17.6072 7.56593 17.382 8.58151C17.1568 9.59708 16.6206 10.5172 15.848 11.2137C15.0754 11.9103 14.1049 12.3486 13.0715 12.4677C12.0381 12.5869 10.9933 12.3808 10.0824 11.8783L10.0825 11.8782L5.7008 16.951C5.3491 17.3023 4.8723 17.4996 4.3752 17.4994C3.8781 17.4993 3.40141 17.3017 3.04991 16.9502C2.69841 16.5987 2.50087 16.122 2.50073 15.6249C2.50059 15.1278 2.69785 14.651 3.04915 14.2993L8.12192 9.91767L8.12181 9.91772C7.61931 9.0069 7.41327 7.96207 7.53239 6.92868C7.65151 5.89528 8.08986 4.92473 8.78641 4.15213C9.48296 3.37952 10.4031 2.84331 11.4186 2.61812C12.4342 2.39293 13.4947 2.48998 14.4526 2.89575L14.4524 2.89607Z"/>
                    </svg>
                  </a>
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.8748 4.375L3.12476 4.375"/>
                      <path d="M8.125 8.125V13.125"/>
                      <path d="M11.875 8.125V13.125"/>
                      <path d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"/>
                      <path d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"/>
                    </svg>
                  </a>
                </div>
                <div class="jb-class">
                  xb3v
                </div>
              </div>
              
              <div class="booster-card">
                <div class="boost-name-wrap">
                  <div class="boost-name">
                    Desktop category Filters
                  </div>
                  <div class="boost-badge">
                    <svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.2605 6H26.7394C26.9331 6 27.1227 6.05627 27.285 6.16198C27.4474 6.26769 27.5755 6.41828 27.6539 6.59545C27.7323 6.77262 27.7575 6.96874 27.7265 7.15997C27.6955 7.35121 27.6097 7.52932 27.4793 7.67267L19.26 16.7139C19.0927 16.898 18.9999 17.1378 18.9999 17.3866V24.4648C18.9999 24.6294 18.9593 24.7915 18.8816 24.9367C18.8039 25.0818 18.6916 25.2055 18.5546 25.2969L14.5546 27.9635C14.404 28.0639 14.229 28.1216 14.0482 28.1303C13.8674 28.1391 13.6877 28.0986 13.5281 28.0132C13.3685 27.9278 13.2351 27.8006 13.1421 27.6454C13.0491 27.4901 12.9999 27.3125 12.9999 27.1315V17.3866C12.9999 17.1378 12.9072 16.898 12.7399 16.7139L4.52056 7.67267C4.39024 7.52932 4.30437 7.35121 4.27338 7.15997C4.24239 6.96874 4.26761 6.77262 4.34598 6.59545C4.42436 6.41828 4.55251 6.26769 4.71486 6.16198C4.87721 6.05627 5.06677 6 5.2605 6V6Z"/>
                    </svg>
                    Dynamic List Filters
                  </div>
                </div>
                <div class="toggle-wrap">
                  <div class="toggle-item">
                    <div class="toggle-label alt">Staging</div>
                    <input type="checkbox" id="switch-3" /><label for="switch-3">Toggle</label>
                  </div>
                  <div class="toggle-item">
                    <div class="toggle-label">Live</div>
                    <div class="locked">
                      <svg viewBox="0 0 33 33" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.1592 11.1648H6.15918C5.60689 11.1648 5.15918 11.6125 5.15918 12.1648V26.1648C5.15918 26.7171 5.60689 27.1648 6.15918 27.1648H26.1592C26.7115 27.1648 27.1592 26.7171 27.1592 26.1648V12.1648C27.1592 11.6125 26.7115 11.1648 26.1592 11.1648Z"/>
                        <path d="M11.6592 11.1648V6.66479C11.6592 5.47132 12.1333 4.32673 12.9772 3.48281C13.8211 2.6389 14.9657 2.16479 16.1592 2.16479C17.3527 2.16479 18.4972 2.6389 19.3412 3.48281C20.1851 4.32673 20.6592 5.47132 20.6592 6.66479V11.1648"/>
                        <path d="M16.1592 20.6648C16.9876 20.6648 17.6592 19.9932 17.6592 19.1648C17.6592 18.3364 16.9876 17.6648 16.1592 17.6648C15.3308 17.6648 14.6592 18.3364 14.6592 19.1648C14.6592 19.9932 15.3308 20.6648 16.1592 20.6648Z" fill="currentColor"/>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="action-btn-group">
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4524 2.89607L11.1742 6.17434L11.6161 8.38405L13.8258 8.82599L17.1041 5.54772L17.1044 5.54758C17.5102 6.50542 17.6072 7.56593 17.382 8.58151C17.1568 9.59708 16.6206 10.5172 15.848 11.2137C15.0754 11.9103 14.1049 12.3486 13.0715 12.4677C12.0381 12.5869 10.9933 12.3808 10.0824 11.8783L10.0825 11.8782L5.7008 16.951C5.3491 17.3023 4.8723 17.4996 4.3752 17.4994C3.8781 17.4993 3.40141 17.3017 3.04991 16.9502C2.69841 16.5987 2.50087 16.122 2.50073 15.6249C2.50059 15.1278 2.69785 14.651 3.04915 14.2993L8.12192 9.91767L8.12181 9.91772C7.61931 9.0069 7.41327 7.96207 7.53239 6.92868C7.65151 5.89528 8.08986 4.92473 8.78641 4.15213C9.48296 3.37952 10.4031 2.84331 11.4186 2.61812C12.4342 2.39293 13.4947 2.48998 14.4526 2.89575L14.4524 2.89607Z"/>
                    </svg>
                  </a>
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.8748 4.375L3.12476 4.375"/>
                      <path d="M8.125 8.125V13.125"/>
                      <path d="M11.875 8.125V13.125"/>
                      <path d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"/>
                      <path d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"/>
                    </svg>
                  </a>
                </div>
                <div class="jb-class">
                  xb3v
                </div>
              </div>
              
            </div>
          </div>
        </div>
        
        <div class="project-card"> 
          <div class="top">
            <img src="https://uploads-ssl.webflow.com/62873547f90f5736df29dc4b/62be6b36e1bec5ba685dc7b9_pws.png" />
            <div class="top-name-wrap">
              <h3>power Shift</h3>
              <div class="p-link">
                <div>
                  <span>Staging:</span>
                  <a href="">yoursite.webflow.io</a>
                </div>
                <div>
                  <span>Custom:</span>
                  <a href="">yoursite.com</a>
                  <a href="">yoursitetwo.com</a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="boost-wrap">
              
              <div class="booster-card">
                <div class="boost-name-wrap">
                  <div class="boost-name">
                    Desktop category Filters
                  </div>
                  <div class="boost-badge">
                    <svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.2605 6H26.7394C26.9331 6 27.1227 6.05627 27.285 6.16198C27.4474 6.26769 27.5755 6.41828 27.6539 6.59545C27.7323 6.77262 27.7575 6.96874 27.7265 7.15997C27.6955 7.35121 27.6097 7.52932 27.4793 7.67267L19.26 16.7139C19.0927 16.898 18.9999 17.1378 18.9999 17.3866V24.4648C18.9999 24.6294 18.9593 24.7915 18.8816 24.9367C18.8039 25.0818 18.6916 25.2055 18.5546 25.2969L14.5546 27.9635C14.404 28.0639 14.229 28.1216 14.0482 28.1303C13.8674 28.1391 13.6877 28.0986 13.5281 28.0132C13.3685 27.9278 13.2351 27.8006 13.1421 27.6454C13.0491 27.4901 12.9999 27.3125 12.9999 27.1315V17.3866C12.9999 17.1378 12.9072 16.898 12.7399 16.7139L4.52056 7.67267C4.39024 7.52932 4.30437 7.35121 4.27338 7.15997C4.24239 6.96874 4.26761 6.77262 4.34598 6.59545C4.42436 6.41828 4.55251 6.26769 4.71486 6.16198C4.87721 6.05627 5.06677 6 5.2605 6V6Z"/>
                    </svg>
                    Dynamic List Filters
                  </div>
                </div>
                <div class="toggle-wrap">
                  <div class="toggle-item">
                    <div class="toggle-label alt">Staging</div>
                    <input type="checkbox" id="switch" /><label for="switch">Toggle</label>
                  </div>
                  <div class="toggle-item">
                    <div class="toggle-label">Live</div>
                    <div class="locked">
                      <svg viewBox="0 0 33 33" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.1592 11.1648H6.15918C5.60689 11.1648 5.15918 11.6125 5.15918 12.1648V26.1648C5.15918 26.7171 5.60689 27.1648 6.15918 27.1648H26.1592C26.7115 27.1648 27.1592 26.7171 27.1592 26.1648V12.1648C27.1592 11.6125 26.7115 11.1648 26.1592 11.1648Z"/>
                        <path d="M11.6592 11.1648V6.66479C11.6592 5.47132 12.1333 4.32673 12.9772 3.48281C13.8211 2.6389 14.9657 2.16479 16.1592 2.16479C17.3527 2.16479 18.4972 2.6389 19.3412 3.48281C20.1851 4.32673 20.6592 5.47132 20.6592 6.66479V11.1648"/>
                        <path d="M16.1592 20.6648C16.9876 20.6648 17.6592 19.9932 17.6592 19.1648C17.6592 18.3364 16.9876 17.6648 16.1592 17.6648C15.3308 17.6648 14.6592 18.3364 14.6592 19.1648C14.6592 19.9932 15.3308 20.6648 16.1592 20.6648Z" fill="currentColor"/>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="action-btn-group">
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4524 2.89607L11.1742 6.17434L11.6161 8.38405L13.8258 8.82599L17.1041 5.54772L17.1044 5.54758C17.5102 6.50542 17.6072 7.56593 17.382 8.58151C17.1568 9.59708 16.6206 10.5172 15.848 11.2137C15.0754 11.9103 14.1049 12.3486 13.0715 12.4677C12.0381 12.5869 10.9933 12.3808 10.0824 11.8783L10.0825 11.8782L5.7008 16.951C5.3491 17.3023 4.8723 17.4996 4.3752 17.4994C3.8781 17.4993 3.40141 17.3017 3.04991 16.9502C2.69841 16.5987 2.50087 16.122 2.50073 15.6249C2.50059 15.1278 2.69785 14.651 3.04915 14.2993L8.12192 9.91767L8.12181 9.91772C7.61931 9.0069 7.41327 7.96207 7.53239 6.92868C7.65151 5.89528 8.08986 4.92473 8.78641 4.15213C9.48296 3.37952 10.4031 2.84331 11.4186 2.61812C12.4342 2.39293 13.4947 2.48998 14.4526 2.89575L14.4524 2.89607Z"/>
                    </svg>
                  </a>
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.8748 4.375L3.12476 4.375"/>
                      <path d="M8.125 8.125V13.125"/>
                      <path d="M11.875 8.125V13.125"/>
                      <path d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"/>
                      <path d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"/>
                    </svg>
                  </a>
                </div>
                <div class="jb-class">
                  xb3v
                </div>
              </div>
              
              <div class="booster-card">
                <div class="boost-name-wrap">
                  <div class="boost-name">
                    Desktop category Filters
                  </div>
                  <div class="boost-badge">
                    <svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.2605 6H26.7394C26.9331 6 27.1227 6.05627 27.285 6.16198C27.4474 6.26769 27.5755 6.41828 27.6539 6.59545C27.7323 6.77262 27.7575 6.96874 27.7265 7.15997C27.6955 7.35121 27.6097 7.52932 27.4793 7.67267L19.26 16.7139C19.0927 16.898 18.9999 17.1378 18.9999 17.3866V24.4648C18.9999 24.6294 18.9593 24.7915 18.8816 24.9367C18.8039 25.0818 18.6916 25.2055 18.5546 25.2969L14.5546 27.9635C14.404 28.0639 14.229 28.1216 14.0482 28.1303C13.8674 28.1391 13.6877 28.0986 13.5281 28.0132C13.3685 27.9278 13.2351 27.8006 13.1421 27.6454C13.0491 27.4901 12.9999 27.3125 12.9999 27.1315V17.3866C12.9999 17.1378 12.9072 16.898 12.7399 16.7139L4.52056 7.67267C4.39024 7.52932 4.30437 7.35121 4.27338 7.15997C4.24239 6.96874 4.26761 6.77262 4.34598 6.59545C4.42436 6.41828 4.55251 6.26769 4.71486 6.16198C4.87721 6.05627 5.06677 6 5.2605 6V6Z"/>
                    </svg>
                    Dynamic List Filters
                  </div>
                </div>
                <div class="toggle-wrap">
                  <div class="toggle-item">
                    <div class="toggle-label alt">Staging</div>
                    <input type="checkbox" id="switch-2" /><label for="switch-2">Toggle</label>
                  </div>
                  <div class="toggle-item">
                    <div class="toggle-label">Live</div>
                    <div class="locked">
                      <svg viewBox="0 0 33 33" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.1592 11.1648H6.15918C5.60689 11.1648 5.15918 11.6125 5.15918 12.1648V26.1648C5.15918 26.7171 5.60689 27.1648 6.15918 27.1648H26.1592C26.7115 27.1648 27.1592 26.7171 27.1592 26.1648V12.1648C27.1592 11.6125 26.7115 11.1648 26.1592 11.1648Z"/>
                        <path d="M11.6592 11.1648V6.66479C11.6592 5.47132 12.1333 4.32673 12.9772 3.48281C13.8211 2.6389 14.9657 2.16479 16.1592 2.16479C17.3527 2.16479 18.4972 2.6389 19.3412 3.48281C20.1851 4.32673 20.6592 5.47132 20.6592 6.66479V11.1648"/>
                        <path d="M16.1592 20.6648C16.9876 20.6648 17.6592 19.9932 17.6592 19.1648C17.6592 18.3364 16.9876 17.6648 16.1592 17.6648C15.3308 17.6648 14.6592 18.3364 14.6592 19.1648C14.6592 19.9932 15.3308 20.6648 16.1592 20.6648Z" fill="currentColor"/>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="action-btn-group">
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4524 2.89607L11.1742 6.17434L11.6161 8.38405L13.8258 8.82599L17.1041 5.54772L17.1044 5.54758C17.5102 6.50542 17.6072 7.56593 17.382 8.58151C17.1568 9.59708 16.6206 10.5172 15.848 11.2137C15.0754 11.9103 14.1049 12.3486 13.0715 12.4677C12.0381 12.5869 10.9933 12.3808 10.0824 11.8783L10.0825 11.8782L5.7008 16.951C5.3491 17.3023 4.8723 17.4996 4.3752 17.4994C3.8781 17.4993 3.40141 17.3017 3.04991 16.9502C2.69841 16.5987 2.50087 16.122 2.50073 15.6249C2.50059 15.1278 2.69785 14.651 3.04915 14.2993L8.12192 9.91767L8.12181 9.91772C7.61931 9.0069 7.41327 7.96207 7.53239 6.92868C7.65151 5.89528 8.08986 4.92473 8.78641 4.15213C9.48296 3.37952 10.4031 2.84331 11.4186 2.61812C12.4342 2.39293 13.4947 2.48998 14.4526 2.89575L14.4524 2.89607Z"/>
                    </svg>
                  </a>
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.8748 4.375L3.12476 4.375"/>
                      <path d="M8.125 8.125V13.125"/>
                      <path d="M11.875 8.125V13.125"/>
                      <path d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"/>
                      <path d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"/>
                    </svg>
                  </a>
                </div>
                <div class="jb-class">
                  xb3v
                </div>
              </div>
              
              <div class="booster-card">
                <div class="boost-name-wrap">
                  <div class="boost-name">
                    Desktop category Filters
                  </div>
                  <div class="boost-badge">
                    <svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.2605 6H26.7394C26.9331 6 27.1227 6.05627 27.285 6.16198C27.4474 6.26769 27.5755 6.41828 27.6539 6.59545C27.7323 6.77262 27.7575 6.96874 27.7265 7.15997C27.6955 7.35121 27.6097 7.52932 27.4793 7.67267L19.26 16.7139C19.0927 16.898 18.9999 17.1378 18.9999 17.3866V24.4648C18.9999 24.6294 18.9593 24.7915 18.8816 24.9367C18.8039 25.0818 18.6916 25.2055 18.5546 25.2969L14.5546 27.9635C14.404 28.0639 14.229 28.1216 14.0482 28.1303C13.8674 28.1391 13.6877 28.0986 13.5281 28.0132C13.3685 27.9278 13.2351 27.8006 13.1421 27.6454C13.0491 27.4901 12.9999 27.3125 12.9999 27.1315V17.3866C12.9999 17.1378 12.9072 16.898 12.7399 16.7139L4.52056 7.67267C4.39024 7.52932 4.30437 7.35121 4.27338 7.15997C4.24239 6.96874 4.26761 6.77262 4.34598 6.59545C4.42436 6.41828 4.55251 6.26769 4.71486 6.16198C4.87721 6.05627 5.06677 6 5.2605 6V6Z"/>
                    </svg>
                    Dynamic List Filters
                  </div>
                </div>
                <div class="toggle-wrap">
                  <div class="toggle-item">
                    <div class="toggle-label alt">Staging</div>
                    <input type="checkbox" id="switch-3" /><label for="switch-3">Toggle</label>
                  </div>
                  <div class="toggle-item">
                    <div class="toggle-label">Live</div>
                    <div class="locked">
                      <svg viewBox="0 0 33 33" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.1592 11.1648H6.15918C5.60689 11.1648 5.15918 11.6125 5.15918 12.1648V26.1648C5.15918 26.7171 5.60689 27.1648 6.15918 27.1648H26.1592C26.7115 27.1648 27.1592 26.7171 27.1592 26.1648V12.1648C27.1592 11.6125 26.7115 11.1648 26.1592 11.1648Z"/>
                        <path d="M11.6592 11.1648V6.66479C11.6592 5.47132 12.1333 4.32673 12.9772 3.48281C13.8211 2.6389 14.9657 2.16479 16.1592 2.16479C17.3527 2.16479 18.4972 2.6389 19.3412 3.48281C20.1851 4.32673 20.6592 5.47132 20.6592 6.66479V11.1648"/>
                        <path d="M16.1592 20.6648C16.9876 20.6648 17.6592 19.9932 17.6592 19.1648C17.6592 18.3364 16.9876 17.6648 16.1592 17.6648C15.3308 17.6648 14.6592 18.3364 14.6592 19.1648C14.6592 19.9932 15.3308 20.6648 16.1592 20.6648Z" fill="currentColor"/>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="action-btn-group">
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4524 2.89607L11.1742 6.17434L11.6161 8.38405L13.8258 8.82599L17.1041 5.54772L17.1044 5.54758C17.5102 6.50542 17.6072 7.56593 17.382 8.58151C17.1568 9.59708 16.6206 10.5172 15.848 11.2137C15.0754 11.9103 14.1049 12.3486 13.0715 12.4677C12.0381 12.5869 10.9933 12.3808 10.0824 11.8783L10.0825 11.8782L5.7008 16.951C5.3491 17.3023 4.8723 17.4996 4.3752 17.4994C3.8781 17.4993 3.40141 17.3017 3.04991 16.9502C2.69841 16.5987 2.50087 16.122 2.50073 15.6249C2.50059 15.1278 2.69785 14.651 3.04915 14.2993L8.12192 9.91767L8.12181 9.91772C7.61931 9.0069 7.41327 7.96207 7.53239 6.92868C7.65151 5.89528 8.08986 4.92473 8.78641 4.15213C9.48296 3.37952 10.4031 2.84331 11.4186 2.61812C12.4342 2.39293 13.4947 2.48998 14.4526 2.89575L14.4524 2.89607Z"/>
                    </svg>
                  </a>
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.8748 4.375L3.12476 4.375"/>
                      <path d="M8.125 8.125V13.125"/>
                      <path d="M11.875 8.125V13.125"/>
                      <path d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"/>
                      <path d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"/>
                    </svg>
                  </a>
                </div>
                <div class="jb-class">
                  xb3v
                </div>
              </div>
              
            </div>
          </div>
        </div>
        
        <div class="project-card"> 
          <div class="top">
            <img src="https://screenshots.webflow.com/sites/62067bff9543ef5c2a4f8d72/20220613181306_548aa3cf61482c72045a5a997418008f.png" />
            <div class="top-name-wrap">
              <h3>Teller</h3>
              <div class="p-link">
                <div>
                  <span>Staging:</span>
                  <a href="">yoursite.webflow.io</a>
                </div>
                <div>
                  <span>Custom:</span>
                  <a href="">yoursite.com</a>
                  <a href="">yoursitetwo.com</a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="boost-wrap">
              
              <div class="booster-card">
                <div class="boost-name-wrap">
                  <div class="boost-name">
                    Desktop category Filters
                  </div>
                  <div class="boost-badge">
                    <svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.2605 6H26.7394C26.9331 6 27.1227 6.05627 27.285 6.16198C27.4474 6.26769 27.5755 6.41828 27.6539 6.59545C27.7323 6.77262 27.7575 6.96874 27.7265 7.15997C27.6955 7.35121 27.6097 7.52932 27.4793 7.67267L19.26 16.7139C19.0927 16.898 18.9999 17.1378 18.9999 17.3866V24.4648C18.9999 24.6294 18.9593 24.7915 18.8816 24.9367C18.8039 25.0818 18.6916 25.2055 18.5546 25.2969L14.5546 27.9635C14.404 28.0639 14.229 28.1216 14.0482 28.1303C13.8674 28.1391 13.6877 28.0986 13.5281 28.0132C13.3685 27.9278 13.2351 27.8006 13.1421 27.6454C13.0491 27.4901 12.9999 27.3125 12.9999 27.1315V17.3866C12.9999 17.1378 12.9072 16.898 12.7399 16.7139L4.52056 7.67267C4.39024 7.52932 4.30437 7.35121 4.27338 7.15997C4.24239 6.96874 4.26761 6.77262 4.34598 6.59545C4.42436 6.41828 4.55251 6.26769 4.71486 6.16198C4.87721 6.05627 5.06677 6 5.2605 6V6Z"/>
                    </svg>
                    Dynamic List Filters
                  </div>
                </div>
                <div class="toggle-wrap">
                  <div class="toggle-item">
                    <div class="toggle-label alt">Staging</div>
                    <input type="checkbox" id="switch" /><label for="switch">Toggle</label>
                  </div>
                  <div class="toggle-item">
                    <div class="toggle-label">Live</div>
                    <div class="locked">
                      <svg viewBox="0 0 33 33" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.1592 11.1648H6.15918C5.60689 11.1648 5.15918 11.6125 5.15918 12.1648V26.1648C5.15918 26.7171 5.60689 27.1648 6.15918 27.1648H26.1592C26.7115 27.1648 27.1592 26.7171 27.1592 26.1648V12.1648C27.1592 11.6125 26.7115 11.1648 26.1592 11.1648Z"/>
                        <path d="M11.6592 11.1648V6.66479C11.6592 5.47132 12.1333 4.32673 12.9772 3.48281C13.8211 2.6389 14.9657 2.16479 16.1592 2.16479C17.3527 2.16479 18.4972 2.6389 19.3412 3.48281C20.1851 4.32673 20.6592 5.47132 20.6592 6.66479V11.1648"/>
                        <path d="M16.1592 20.6648C16.9876 20.6648 17.6592 19.9932 17.6592 19.1648C17.6592 18.3364 16.9876 17.6648 16.1592 17.6648C15.3308 17.6648 14.6592 18.3364 14.6592 19.1648C14.6592 19.9932 15.3308 20.6648 16.1592 20.6648Z" fill="currentColor"/>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="action-btn-group">
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4524 2.89607L11.1742 6.17434L11.6161 8.38405L13.8258 8.82599L17.1041 5.54772L17.1044 5.54758C17.5102 6.50542 17.6072 7.56593 17.382 8.58151C17.1568 9.59708 16.6206 10.5172 15.848 11.2137C15.0754 11.9103 14.1049 12.3486 13.0715 12.4677C12.0381 12.5869 10.9933 12.3808 10.0824 11.8783L10.0825 11.8782L5.7008 16.951C5.3491 17.3023 4.8723 17.4996 4.3752 17.4994C3.8781 17.4993 3.40141 17.3017 3.04991 16.9502C2.69841 16.5987 2.50087 16.122 2.50073 15.6249C2.50059 15.1278 2.69785 14.651 3.04915 14.2993L8.12192 9.91767L8.12181 9.91772C7.61931 9.0069 7.41327 7.96207 7.53239 6.92868C7.65151 5.89528 8.08986 4.92473 8.78641 4.15213C9.48296 3.37952 10.4031 2.84331 11.4186 2.61812C12.4342 2.39293 13.4947 2.48998 14.4526 2.89575L14.4524 2.89607Z"/>
                    </svg>
                  </a>
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.8748 4.375L3.12476 4.375"/>
                      <path d="M8.125 8.125V13.125"/>
                      <path d="M11.875 8.125V13.125"/>
                      <path d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"/>
                      <path d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"/>
                    </svg>
                  </a>
                </div>
                <div class="jb-class">
                  xb3v
                </div>
              </div>
              
              <div class="booster-card">
                <div class="boost-name-wrap">
                  <div class="boost-name">
                    Desktop category Filters
                  </div>
                  <div class="boost-badge">
                    <svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.2605 6H26.7394C26.9331 6 27.1227 6.05627 27.285 6.16198C27.4474 6.26769 27.5755 6.41828 27.6539 6.59545C27.7323 6.77262 27.7575 6.96874 27.7265 7.15997C27.6955 7.35121 27.6097 7.52932 27.4793 7.67267L19.26 16.7139C19.0927 16.898 18.9999 17.1378 18.9999 17.3866V24.4648C18.9999 24.6294 18.9593 24.7915 18.8816 24.9367C18.8039 25.0818 18.6916 25.2055 18.5546 25.2969L14.5546 27.9635C14.404 28.0639 14.229 28.1216 14.0482 28.1303C13.8674 28.1391 13.6877 28.0986 13.5281 28.0132C13.3685 27.9278 13.2351 27.8006 13.1421 27.6454C13.0491 27.4901 12.9999 27.3125 12.9999 27.1315V17.3866C12.9999 17.1378 12.9072 16.898 12.7399 16.7139L4.52056 7.67267C4.39024 7.52932 4.30437 7.35121 4.27338 7.15997C4.24239 6.96874 4.26761 6.77262 4.34598 6.59545C4.42436 6.41828 4.55251 6.26769 4.71486 6.16198C4.87721 6.05627 5.06677 6 5.2605 6V6Z"/>
                    </svg>
                    Dynamic List Filters
                  </div>
                </div>
                <div class="toggle-wrap">
                  <div class="toggle-item">
                    <div class="toggle-label alt">Staging</div>
                    <input type="checkbox" id="switch-2" /><label for="switch-2">Toggle</label>
                  </div>
                  <div class="toggle-item">
                    <div class="toggle-label">Live</div>
                    <div class="locked">
                      <svg viewBox="0 0 33 33" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.1592 11.1648H6.15918C5.60689 11.1648 5.15918 11.6125 5.15918 12.1648V26.1648C5.15918 26.7171 5.60689 27.1648 6.15918 27.1648H26.1592C26.7115 27.1648 27.1592 26.7171 27.1592 26.1648V12.1648C27.1592 11.6125 26.7115 11.1648 26.1592 11.1648Z"/>
                        <path d="M11.6592 11.1648V6.66479C11.6592 5.47132 12.1333 4.32673 12.9772 3.48281C13.8211 2.6389 14.9657 2.16479 16.1592 2.16479C17.3527 2.16479 18.4972 2.6389 19.3412 3.48281C20.1851 4.32673 20.6592 5.47132 20.6592 6.66479V11.1648"/>
                        <path d="M16.1592 20.6648C16.9876 20.6648 17.6592 19.9932 17.6592 19.1648C17.6592 18.3364 16.9876 17.6648 16.1592 17.6648C15.3308 17.6648 14.6592 18.3364 14.6592 19.1648C14.6592 19.9932 15.3308 20.6648 16.1592 20.6648Z" fill="currentColor"/>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="action-btn-group">
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4524 2.89607L11.1742 6.17434L11.6161 8.38405L13.8258 8.82599L17.1041 5.54772L17.1044 5.54758C17.5102 6.50542 17.6072 7.56593 17.382 8.58151C17.1568 9.59708 16.6206 10.5172 15.848 11.2137C15.0754 11.9103 14.1049 12.3486 13.0715 12.4677C12.0381 12.5869 10.9933 12.3808 10.0824 11.8783L10.0825 11.8782L5.7008 16.951C5.3491 17.3023 4.8723 17.4996 4.3752 17.4994C3.8781 17.4993 3.40141 17.3017 3.04991 16.9502C2.69841 16.5987 2.50087 16.122 2.50073 15.6249C2.50059 15.1278 2.69785 14.651 3.04915 14.2993L8.12192 9.91767L8.12181 9.91772C7.61931 9.0069 7.41327 7.96207 7.53239 6.92868C7.65151 5.89528 8.08986 4.92473 8.78641 4.15213C9.48296 3.37952 10.4031 2.84331 11.4186 2.61812C12.4342 2.39293 13.4947 2.48998 14.4526 2.89575L14.4524 2.89607Z"/>
                    </svg>
                  </a>
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.8748 4.375L3.12476 4.375"/>
                      <path d="M8.125 8.125V13.125"/>
                      <path d="M11.875 8.125V13.125"/>
                      <path d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"/>
                      <path d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"/>
                    </svg>
                  </a>
                </div>
                <div class="jb-class">
                  xb3v
                </div>
              </div>
              
              <div class="booster-card">
                <div class="boost-name-wrap">
                  <div class="boost-name">
                    Desktop category Filters
                  </div>
                  <div class="boost-badge">
                    <svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.2605 6H26.7394C26.9331 6 27.1227 6.05627 27.285 6.16198C27.4474 6.26769 27.5755 6.41828 27.6539 6.59545C27.7323 6.77262 27.7575 6.96874 27.7265 7.15997C27.6955 7.35121 27.6097 7.52932 27.4793 7.67267L19.26 16.7139C19.0927 16.898 18.9999 17.1378 18.9999 17.3866V24.4648C18.9999 24.6294 18.9593 24.7915 18.8816 24.9367C18.8039 25.0818 18.6916 25.2055 18.5546 25.2969L14.5546 27.9635C14.404 28.0639 14.229 28.1216 14.0482 28.1303C13.8674 28.1391 13.6877 28.0986 13.5281 28.0132C13.3685 27.9278 13.2351 27.8006 13.1421 27.6454C13.0491 27.4901 12.9999 27.3125 12.9999 27.1315V17.3866C12.9999 17.1378 12.9072 16.898 12.7399 16.7139L4.52056 7.67267C4.39024 7.52932 4.30437 7.35121 4.27338 7.15997C4.24239 6.96874 4.26761 6.77262 4.34598 6.59545C4.42436 6.41828 4.55251 6.26769 4.71486 6.16198C4.87721 6.05627 5.06677 6 5.2605 6V6Z"/>
                    </svg>
                    Dynamic List Filters
                  </div>
                </div>
                <div class="toggle-wrap">
                  <div class="toggle-item">
                    <div class="toggle-label alt">Staging</div>
                    <input type="checkbox" id="switch-3" /><label for="switch-3">Toggle</label>
                  </div>
                  <div class="toggle-item">
                    <div class="toggle-label">Live</div>
                    <div class="locked">
                      <svg viewBox="0 0 33 33" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.1592 11.1648H6.15918C5.60689 11.1648 5.15918 11.6125 5.15918 12.1648V26.1648C5.15918 26.7171 5.60689 27.1648 6.15918 27.1648H26.1592C26.7115 27.1648 27.1592 26.7171 27.1592 26.1648V12.1648C27.1592 11.6125 26.7115 11.1648 26.1592 11.1648Z"/>
                        <path d="M11.6592 11.1648V6.66479C11.6592 5.47132 12.1333 4.32673 12.9772 3.48281C13.8211 2.6389 14.9657 2.16479 16.1592 2.16479C17.3527 2.16479 18.4972 2.6389 19.3412 3.48281C20.1851 4.32673 20.6592 5.47132 20.6592 6.66479V11.1648"/>
                        <path d="M16.1592 20.6648C16.9876 20.6648 17.6592 19.9932 17.6592 19.1648C17.6592 18.3364 16.9876 17.6648 16.1592 17.6648C15.3308 17.6648 14.6592 18.3364 14.6592 19.1648C14.6592 19.9932 15.3308 20.6648 16.1592 20.6648Z" fill="currentColor"/>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="action-btn-group">
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4524 2.89607L11.1742 6.17434L11.6161 8.38405L13.8258 8.82599L17.1041 5.54772L17.1044 5.54758C17.5102 6.50542 17.6072 7.56593 17.382 8.58151C17.1568 9.59708 16.6206 10.5172 15.848 11.2137C15.0754 11.9103 14.1049 12.3486 13.0715 12.4677C12.0381 12.5869 10.9933 12.3808 10.0824 11.8783L10.0825 11.8782L5.7008 16.951C5.3491 17.3023 4.8723 17.4996 4.3752 17.4994C3.8781 17.4993 3.40141 17.3017 3.04991 16.9502C2.69841 16.5987 2.50087 16.122 2.50073 15.6249C2.50059 15.1278 2.69785 14.651 3.04915 14.2993L8.12192 9.91767L8.12181 9.91772C7.61931 9.0069 7.41327 7.96207 7.53239 6.92868C7.65151 5.89528 8.08986 4.92473 8.78641 4.15213C9.48296 3.37952 10.4031 2.84331 11.4186 2.61812C12.4342 2.39293 13.4947 2.48998 14.4526 2.89575L14.4524 2.89607Z"/>
                    </svg>
                  </a>
                  <a href="#">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.8748 4.375L3.12476 4.375"/>
                      <path d="M8.125 8.125V13.125"/>
                      <path d="M11.875 8.125V13.125"/>
                      <path d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"/>
                      <path d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"/>
                    </svg>
                  </a>
                </div>
                <div class="jb-class">
                  xb3v
                </div>
              </div>
              
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
</body>
</html>