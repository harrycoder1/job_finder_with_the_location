<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        :root {
  --section-divider-height: 60;
  --section-divider-width: 1920;
  --section-divider-ratio: calc(100% * var(--section-divider-height) / var(--section-divider-width));
}

.has-section-divider {
  position: relative;
  padding-bottom: var(--section-divider-ratio);
}

.section-divider {
  display: block;
  position: absolute;
  left: 0;
  bottom: -1px;
  width: 100%;
  height: auto;
}

[data-theme=dark] {
  --color-primary-darker: hsl(201, 65%, 42%);
  --color-primary-darker-h: 201;
  --color-primary-darker-s: 65%;
  --color-primary-darker-l: 42%;
  --color-primary-dark: hsl(201, 65%, 52%);
  --color-primary-dark-h: 201;
  --color-primary-dark-s: 65%;
  --color-primary-dark-l: 52%;
  --color-primary: hsl(201, 65%, 62%);
  --color-primary-h: 201;
  --color-primary-s: 65%;
  --color-primary-l: 62%;
  --color-primary-light: hsl(201, 65%, 72%);
  --color-primary-light-h: 201;
  --color-primary-light-s: 65%;
  --color-primary-light-l: 72%;
  --color-primary-lighter: hsl(201, 65%, 82%);
  --color-primary-lighter-h: 201;
  --color-primary-lighter-s: 65%;
  --color-primary-lighter-l: 82%;
  --color-accent-darker: hsl(358, 97%, 43%);
  --color-accent-darker-h: 358;
  --color-accent-darker-s: 97%;
  --color-accent-darker-l: 43%;
  --color-accent-dark: hsl(358, 97%, 53%);
  --color-accent-dark-h: 358;
  --color-accent-dark-s: 97%;
  --color-accent-dark-l: 53%;
  --color-accent: hsl(358, 97%, 63%);
  --color-accent-h: 358;
  --color-accent-s: 97%;
  --color-accent-l: 63%;
  --color-accent-light: hsl(358, 97%, 73%);
  --color-accent-light-h: 358;
  --color-accent-light-s: 97%;
  --color-accent-light-l: 73%;
  --color-accent-lighter: hsl(358, 97%, 83%);
  --color-accent-lighter-h: 358;
  --color-accent-lighter-s: 97%;
  --color-accent-lighter-l: 83%;
  --color-secondary-darker: hsl(165, 2%, 24%);
  --color-secondary-darker-h: 165;
  --color-secondary-darker-s: 2%;
  --color-secondary-darker-l: 24%;
  --color-secondary-dark: hsl(165, 2%, 34%);
  --color-secondary-dark-h: 165;
  --color-secondary-dark-s: 2%;
  --color-secondary-dark-l: 34%;
  --color-secondary: hsl(165, 2%, 44%);
  --color-secondary-h: 165;
  --color-secondary-s: 2%;
  --color-secondary-l: 44%;
  --color-secondary-light: hsl(165, 2%, 54%);
  --color-secondary-light-h: 165;
  --color-secondary-light-s: 2%;
  --color-secondary-light-l: 54%;
  --color-secondary-lighter: hsl(165, 2%, 64%);
  --color-secondary-lighter-h: 165;
  --color-secondary-lighter-s: 2%;
  --color-secondary-lighter-l: 64%;
  --color-black: hsl(240, 8%, 12%);
  --color-black-h: 240;
  --color-black-s: 8%;
  --color-black-l: 12%;
  --color-white: hsl(0, 0%, 100%);
  --color-white-h: 0;
  --color-white-s: 0%;
  --color-white-l: 100%;
  --color-warning-darker: hsl(46, 100%, 41%);
  --color-warning-darker-h: 46;
  --color-warning-darker-s: 100%;
  --color-warning-darker-l: 41%;
  --color-warning-dark: hsl(46, 100%, 51%);
  --color-warning-dark-h: 46;
  --color-warning-dark-s: 100%;
  --color-warning-dark-l: 51%;
  --color-warning: hsl(46, 100%, 61%);
  --color-warning-h: 46;
  --color-warning-s: 100%;
  --color-warning-l: 61%;
  --color-warning-light: hsl(46, 100%, 71%);
  --color-warning-light-h: 46;
  --color-warning-light-s: 100%;
  --color-warning-light-l: 71%;
  --color-warning-lighter: hsl(46, 100%, 81%);
  --color-warning-lighter-h: 46;
  --color-warning-lighter-s: 100%;
  --color-warning-lighter-l: 81%;
  --color-success-darker: hsl(94, 48%, 36%);
  --color-success-darker-h: 94;
  --color-success-darker-s: 48%;
  --color-success-darker-l: 36%;
  --color-success-dark: hsl(94, 48%, 46%);
  --color-success-dark-h: 94;
  --color-success-dark-s: 48%;
  --color-success-dark-l: 46%;
  --color-success: hsl(94, 48%, 56%);
  --color-success-h: 94;
  --color-success-s: 48%;
  --color-success-l: 56%;
  --color-success-light: hsl(94, 48%, 66%);
  --color-success-light-h: 94;
  --color-success-light-s: 48%;
  --color-success-light-l: 66%;
  --color-success-lighter: hsl(94, 48%, 76%);
  --color-success-lighter-h: 94;
  --color-success-lighter-s: 48%;
  --color-success-lighter-l: 76%;
  --color-error-darker: hsl(358, 97%, 43%);
  --color-error-darker-h: 358;
  --color-error-darker-s: 97%;
  --color-error-darker-l: 43%;
  --color-error-dark: hsl(358, 97%, 53%);
  --color-error-dark-h: 358;
  --color-error-dark-s: 97%;
  --color-error-dark-l: 53%;
  --color-error: hsl(358, 97%, 63%);
  --color-error-h: 358;
  --color-error-s: 97%;
  --color-error-l: 63%;
  --color-error-light: hsl(358, 97%, 73%);
  --color-error-light-h: 358;
  --color-error-light-s: 97%;
  --color-error-light-l: 73%;
  --color-error-lighter: hsl(358, 97%, 83%);
  --color-error-lighter-h: 358;
  --color-error-lighter-s: 97%;
  --color-error-lighter-l: 83%;
  --color-bg: hsl(240, 8%, 12%);
  --color-bg-h: 240;
  --color-bg-s: 8%;
  --color-bg-l: 12%;
  --color-contrast-lower: hsl(240, 6%, 15%);
  --color-contrast-lower-h: 240;
  --color-contrast-lower-s: 6%;
  --color-contrast-lower-l: 15%;
  --color-contrast-low: hsl(252, 4%, 25%);
  --color-contrast-low-h: 252;
  --color-contrast-low-s: 4%;
  --color-contrast-low-l: 25%;
  --color-contrast-medium: hsl(240, 1%, 52%);
  --color-contrast-medium-h: 240;
  --color-contrast-medium-s: 1%;
  --color-contrast-medium-l: 52%;
  --color-contrast-high: hsl(0, 0%, 89%);
  --color-contrast-high-h: 0;
  --color-contrast-high-s: 0%;
  --color-contrast-high-l: 89%;
  --color-contrast-higher: hsl(0, 0%, 100%);
  --color-contrast-higher-h: 0;
  --color-contrast-higher-s: 0%;
  --color-contrast-higher-l: 100%;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

[data-theme=softSecondary] {
  --color-primary-darker: hsl(220, 89%, 36%);
  --color-primary-darker-h: 220;
  --color-primary-darker-s: 89%;
  --color-primary-darker-l: 36%;
  --color-primary-dark: hsl(220, 89%, 46%);
  --color-primary-dark-h: 220;
  --color-primary-dark-s: 89%;
  --color-primary-dark-l: 46%;
  --color-primary: hsl(220, 89%, 56%);
  --color-primary-h: 220;
  --color-primary-s: 89%;
  --color-primary-l: 56%;
  --color-primary-light: hsl(220, 89%, 66%);
  --color-primary-light-h: 220;
  --color-primary-light-s: 89%;
  --color-primary-light-l: 66%;
  --color-primary-lighter: hsl(220, 89%, 76%);
  --color-primary-lighter-h: 220;
  --color-primary-lighter-s: 89%;
  --color-primary-lighter-l: 76%;
  --color-accent-darker: hsl(358, 97%, 43%);
  --color-accent-darker-h: 358;
  --color-accent-darker-s: 97%;
  --color-accent-darker-l: 43%;
  --color-accent-dark: hsl(358, 97%, 53%);
  --color-accent-dark-h: 358;
  --color-accent-dark-s: 97%;
  --color-accent-dark-l: 53%;
  --color-accent: hsl(358, 97%, 63%);
  --color-accent-h: 358;
  --color-accent-s: 97%;
  --color-accent-l: 63%;
  --color-accent-light: hsl(358, 97%, 73%);
  --color-accent-light-h: 358;
  --color-accent-light-s: 97%;
  --color-accent-light-l: 73%;
  --color-accent-lighter: hsl(358, 97%, 83%);
  --color-accent-lighter-h: 358;
  --color-accent-lighter-s: 97%;
  --color-accent-lighter-l: 83%;
  --color-secondary-darker: hsl(197, 73%, 37%);
  --color-secondary-darker-h: 197;
  --color-secondary-darker-s: 73%;
  --color-secondary-darker-l: 37%;
  --color-secondary-dark: hsl(197, 73%, 47%);
  --color-secondary-dark-h: 197;
  --color-secondary-dark-s: 73%;
  --color-secondary-dark-l: 47%;
  --color-secondary: hsl(197, 73%, 57%);
  --color-secondary-h: 197;
  --color-secondary-s: 73%;
  --color-secondary-l: 57%;
  --color-secondary-light: hsl(197, 73%, 67%);
  --color-secondary-light-h: 197;
  --color-secondary-light-s: 73%;
  --color-secondary-light-l: 67%;
  --color-secondary-lighter: hsl(197, 73%, 77%);
  --color-secondary-lighter-h: 197;
  --color-secondary-lighter-s: 73%;
  --color-secondary-lighter-l: 77%;
  --color-black: hsl(240, 8%, 12%);
  --color-black-h: 240;
  --color-black-s: 8%;
  --color-black-l: 12%;
  --color-white: hsl(0, 0%, 100%);
  --color-white-h: 0;
  --color-white-s: 0%;
  --color-white-l: 100%;
  --color-warning-darker: hsl(46, 100%, 41%);
  --color-warning-darker-h: 46;
  --color-warning-darker-s: 100%;
  --color-warning-darker-l: 41%;
  --color-warning-dark: hsl(46, 100%, 51%);
  --color-warning-dark-h: 46;
  --color-warning-dark-s: 100%;
  --color-warning-dark-l: 51%;
  --color-warning: hsl(46, 100%, 61%);
  --color-warning-h: 46;
  --color-warning-s: 100%;
  --color-warning-l: 61%;
  --color-warning-light: hsl(46, 100%, 71%);
  --color-warning-light-h: 46;
  --color-warning-light-s: 100%;
  --color-warning-light-l: 71%;
  --color-warning-lighter: hsl(46, 100%, 81%);
  --color-warning-lighter-h: 46;
  --color-warning-lighter-s: 100%;
  --color-warning-lighter-l: 81%;
  --color-success-darker: hsl(94, 48%, 36%);
  --color-success-darker-h: 94;
  --color-success-darker-s: 48%;
  --color-success-darker-l: 36%;
  --color-success-dark: hsl(94, 48%, 46%);
  --color-success-dark-h: 94;
  --color-success-dark-s: 48%;
  --color-success-dark-l: 46%;
  --color-success: hsl(94, 48%, 56%);
  --color-success-h: 94;
  --color-success-s: 48%;
  --color-success-l: 56%;
  --color-success-light: hsl(94, 48%, 66%);
  --color-success-light-h: 94;
  --color-success-light-s: 48%;
  --color-success-light-l: 66%;
  --color-success-lighter: hsl(94, 48%, 76%);
  --color-success-lighter-h: 94;
  --color-success-lighter-s: 48%;
  --color-success-lighter-l: 76%;
  --color-error-darker: hsl(358, 97%, 43%);
  --color-error-darker-h: 358;
  --color-error-darker-s: 97%;
  --color-error-darker-l: 43%;
  --color-error-dark: hsl(358, 97%, 53%);
  --color-error-dark-h: 358;
  --color-error-dark-s: 97%;
  --color-error-dark-l: 53%;
  --color-error: hsl(358, 97%, 63%);
  --color-error-h: 358;
  --color-error-s: 97%;
  --color-error-l: 63%;
  --color-error-light: hsl(358, 97%, 73%);
  --color-error-light-h: 358;
  --color-error-light-s: 97%;
  --color-error-light-l: 73%;
  --color-error-lighter: hsl(358, 97%, 83%);
  --color-error-lighter-h: 358;
  --color-error-lighter-s: 97%;
  --color-error-lighter-l: 83%;
  --color-bg: hsl(199, 76%, 95%);
  --color-bg-h: 199;
  --color-bg-s: 76%;
  --color-bg-l: 95%;
  --color-contrast-lower: hsl(199, 39%, 90%);
  --color-contrast-lower-h: 199;
  --color-contrast-lower-s: 39%;
  --color-contrast-lower-l: 90%;
  --color-contrast-low: hsl(202, 15%, 79%);
  --color-contrast-low-h: 202;
  --color-contrast-low-s: 15%;
  --color-contrast-low-l: 79%;
  --color-contrast-medium: hsl(210, 5%, 50%);
  --color-contrast-medium-h: 210;
  --color-contrast-medium-s: 5%;
  --color-contrast-medium-l: 50%;
  --color-contrast-high: hsl(230, 6%, 20%);
  --color-contrast-high-h: 230;
  --color-contrast-high-s: 6%;
  --color-contrast-high-l: 20%;
  --color-contrast-higher: hsl(240, 8%, 12%);
  --color-contrast-higher-h: 240;
  --color-contrast-higher-s: 8%;
  --color-contrast-higher-l: 12%;
}
    </style>
</head>
<body>
<section class="has-section-divider" data-theme="dark">
  <div class="padding-y-xxl">
    <div class="container max-width-adaptive-sm">
      <div class="text-component">
        <h1>Cool SVG Divider 👇</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quia dolorem dicta dolor nisi illum libero neque fuga veritatis deleniti!</p>
      </div>
    </div>
  </div>
  
  <svg class="section-divider" viewBox="0 0 1920 60" aria-hidden="true"><path data-theme="softSecondary" fill="var(--color-bg)" d="M0,80.75H1920V45.833H1742.083a80.491,80.491,0,0,1,12.863-1.55c5.2-.26,17.24-.3,24.153-.24,26.69.222,54.377,1.094,79.341.96,19.287-.1,37.1-.372,53.573-.788L1920,44V34.078l-6.614.216-9.221.256c-6.252.147-12.7.249-19.265.32-13.132.14-26.739.15-40.206.125-26.935-.052-53.313-.247-74.22.168-14.367-1.4-32.582-.756-48.293-1.92-10.145.509-20.876.936-24.149,2.4-16.09-.266-37.611,2.532-50.019.479V34.684c-10.959-2.291-33.371-1.869-48.292-3.84-15.861-.512-26.214,1.347-39.671,1.92-7.032.178-5.941-.773-13.8-.481-40.751-.071-41.131,5.477-62.087,8.16-4.569-5.691-47.085-5.126-77.622-5.04-2.333-4.154-22.643-5.808-50.015-6.479-4.677-2.069-17.763-2.969-22.423-5.04-4.7-.175-3.474.477-6.9.479-11.485-2.964-40.092-2.449-63.813-3.36-23.312.6-29.4,3.589-55.195,3.841-8.3-3.783-56.5-4.561-84.513-3.361-.316-1.857-5.682-3.862-20.7-4.8-2.193-.137-6.78.122-10.352,0-16.331-.564-22.974-3.145-39.671-1.441-22.812-1.938-73.831-3.919-98.311-.719-4.315-2.2-15.369-3.462-20.7-5.521-23.122-.714-41.26-2.815-65.54-2.64-13.5,1-29.918,1.6-39.671,3.12.27,1.317-1.305,2.38-6.9,2.88-35.562-1.333-83.117-2.545-93.139,2.88-14.338-.314-8.341,2.2-22.423,1.92-5.17-.16-2.615-1.4-6.9-1.68-36.327-1.894-80.653-1.762-100.041,2.161-12.433-1.631-21.648-3.708-36.221-5.04-13.359.1-36.33-.325-48.293-1.2-32.483.6-42.463,4.331-53.471,7.92-25.227-.147-43.752,2.274-58.641,4.321-11.966-1.189-27.56-.426-39.67-1.441-19.514,1.284-40.772,2.328-53.468,4.561C301.584,31.04,294,33.888,283.7,37.8c-15.047-.774-19.865-3.5-36.221-4.321-10.453-.522-37.12-1.01-48.3-.959-10.184.046-17.188,1.062-27.595.719-18.244,2.022-31.516,4.736-46.57,7.2-3.726,2.091-9.8,3.854-17.5,5.39H4.061c-.734-1.281-1.512-2.592-2.344-3.949-.546-.09-1.13-.175-1.717-.26Z"/></svg>
</section>

<section data-theme="softSecondary">
  <div class="padding-y-xxl">
    <div class="container max-width-adaptive-sm">
      <div class="text-component">
        <h1>Section Two</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quia dolorem dicta dolor nisi illum libero neque fuga veritatis deleniti!</p>
      </div>
    </div>
  </div>
</section>
</body>
</html>