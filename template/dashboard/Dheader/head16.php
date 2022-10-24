<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #blurry-filter {
  width: 100%;
  height: 9rem;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Cfilter id='f'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='4' numOctaves='1'/%3E%3C/filter%3E%3Crect width='100' height='100' style='filter:url(%23f)' opacity='.2'/%3E%3C/svg%3E");
  mask: linear-gradient(black 7rem, transparent);
  -webkit-mask: linear-gradient(black 7rem, transparent);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  position: fixed;
  left: 0;
  top: 0;
  z-index: 1;
  pointer-events: none;
  touch-action: none;
}

body {
  margin: 0;
  padding: 0;
  background-color: #EEE;
  font-family: "Open Sans", sans-serif;
  box-sizing: border-box;
  cursor: default;
}

*, *:before, *:after {
  box-sizing: inherit;
}

header {
  width: 100%;
  height: 8rem;
  position: sticky;
  top: 0;
  z-index: 1;
}
header > div {
  width: calc(100% - 3rem);
  max-width: 800px;
  height: 100%;
  margin: 0 auto;
  display: flex;
  align-items: center;
}

#title {
  width: 100%;
}
#title .parent {
  line-height: 1em;
  color: #666;
}
#title .name {
  font-size: 2em;
  font-weight: bold;
  color: #333;
  mix-blend-mode: difference;
}

#reference {
  display: flex;
}
#reference > a {
  color: #444;
}
#reference > a + a {
  margin-left: 1rem;
}

main, #folders {
  width: calc(100% - 3rem);
  max-width: 800px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  grid-gap: 1.5rem;
}

main > article {
  width: 100%;
  height: 32px;
  padding: 1rem;
  background-color: #FFF;
}
main > figure {
  width: 100%;
  margin: 0;
  background-color: #FFF;
  background-size: cover;
  border-radius: 1rem;
  transition: all 100ms ease-out;
}
main > figure:hover {
  box-shadow: 0 16px 16px -4px rgba(0, 0, 0, 0.3);
  transform: scale(1.02);
}
main > figure:after {
  content: "";
  padding-bottom: 100%;
  display: block;
}
main > figure > figcaption {
  margin: 1rem;
  color: #FFF;
  font-size: 1.25em;
  position: absolute;
}

#folders {
  margin-top: 0.5rem;
  margin-bottom: 2rem;
}
#folders > article {
  width: 100%;
  height: 4rem;
  padding: 0 1.5rem;
  background-color: #FFF;
  border-radius: 1rem;
  line-height: 4rem;
  transition: all 100ms ease-out;
}
#folders > article:hover {
  box-shadow: 0 16px 16px -4px rgba(0, 0, 0, 0.1);
  transform: scale(1.02);
}

footer {
  width: 100%;
  height: 8rem;
}
    </style>
</head>
<body>
    
<div id="blurry-filter"></div>
<header>
  <div>
    <article id="title"><span class="parent">Unsplash</span><br/><span class="name">Pictures</span></article>
    <article id="reference"><a href="https://dribbble.com/shots/3956995-Apple-OS-MacOS-Finder-UI-motion" target="_blank" rel="noopener">
        <svg width="24" height="24" viewBox="0 0 32 32">
          <path fill="currentcolor" d="M16 0C7.16703 0 0 7.16703 0 16C0 24.833 7.16703 32 16 32C24.8156 32 32 24.833 32 16C32 7.16703 24.8156 0 16 0ZM26.5683 7.37527C28.4772 9.70065 29.6226 12.6681 29.6573 15.8785C29.2061 15.7918 24.6941 14.872 20.1475 15.4447C20.0434 15.2191 19.9566 14.9761 19.8525 14.7332C19.5748 14.0738 19.2625 13.397 18.9501 12.7549C23.9826 10.7072 26.2733 7.75705 26.5683 7.37527ZM16 2.36009C19.4707 2.36009 22.6464 3.66161 25.0586 5.7961C24.8156 6.14317 22.7505 8.90239 17.8915 10.7245C15.6529 6.61171 13.1714 3.24512 12.7896 2.72451C13.8134 2.48156 14.8894 2.36009 16 2.36009ZM10.1866 3.64425C10.551 4.13015 12.9805 7.5141 15.2538 11.5401C8.86768 13.2408 3.22777 13.2061 2.62039 13.2061C3.50542 8.9718 6.36876 5.44902 10.1866 3.64425ZM2.32538 16.0174C2.32538 15.8785 2.32538 15.7397 2.32538 15.6009C2.9154 15.6182 9.54447 15.705 16.3644 13.6573C16.7636 14.4208 17.128 15.2017 17.4751 15.9826C17.3015 16.0347 17.1106 16.0868 16.9371 16.1388C9.89154 18.4121 6.14317 24.6247 5.8308 25.1453C3.6616 22.7332 2.32538 19.5228 2.32538 16.0174ZM16 29.6746C12.8416 29.6746 9.92625 28.5987 7.61822 26.7939C7.86117 26.2907 10.6377 20.9458 18.3427 18.256C18.3774 18.2386 18.3948 18.2386 18.4295 18.2213C20.3557 23.2017 21.1367 27.3839 21.3449 28.5813C19.6963 29.2928 17.8915 29.6746 16 29.6746ZM23.6182 27.3319C23.4794 26.4989 22.7505 22.5076 20.9631 17.5965C25.2495 16.9197 28.9978 18.0304 29.4664 18.1866C28.8764 21.987 26.6898 25.2668 23.6182 27.3319Z"></path>
        </svg></a><a href="https://codepen.io/iamvdo/pen/xECmI" target="_blank" rel="noopener">
        <svg width="24" height="24" viewBox="0 0 24 24">
          <path fill="currentcolor" d="M15.09 12L12 14.08v.01L8.91 12 12 9.92 15.09 12M12 2a.93.93 0 00-.47.15L2.5 8.11c-.23.11-.41.32-.5.56v6.25c0 .41 0 .41.15.61l9.38 6.33c.14.1.31.14.47.14.16 0 .33-.05.47-.15l9.38-6.35c.15-.17.15-.17.15-.58V8.67a1.04 1.04 0 00-.5-.57l-9.03-5.95A.843.843 0 0012 2m4.58 11l3.01 2.04-6.76 4.56v-4.07L16.58 13m3.11-4.1L16.58 11l-3.75-2.53V4.38l6.86 4.52m.64 1.57v3.06L18.07 12l2.26-1.53M7.42 13l3.75 2.54v4.06l-6.76-4.56L7.42 13M4.31 8.9l6.86-4.51V8.5L7.42 11 4.31 8.9m-.64 1.6L5.93 12l-2.26 1.54V10.5z"></path>
        </svg></a></article>
  </div>
</header>
<section id="folders">
  <article>Travel</article>
  <article>Nature</article>
  <article>Wallpapers</article>
</section>
<main>
  <figure style="background-image: url(https://images.unsplash.com/photo-1593414220166-085caeae0382?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=751&amp;q=80)">
    <figcaption>City-01</figcaption>
  </figure>
  <figure style="background-image: url(https://images.unsplash.com/photo-1593532847202-e818146e134a?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80)">
    <figcaption>Painting-01</figcaption>
  </figure>
  <figure style="background-image: url(https://images.unsplash.com/photo-1593260654451-a214d27978fb?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=375&amp;q=80)">
    <figcaption>Train-01</figcaption>
  </figure>
  <figure style="background-image: url(https://images.unsplash.com/photo-1593515529105-cec0bd21e1f7?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80)">
    <figcaption>Sky-01</figcaption>
  </figure>
  <figure style="background-image: url(https://images.unsplash.com/photo-1593377872300-67454a2954e1?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=673&amp;q=80)">
    <figcaption>Citi-02</figcaption>
  </figure>
  <figure style="background-image: url(https://images.unsplash.com/photo-1592185285645-5b9d0b13743c?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80)">
    <figcaption>Painting-02</figcaption>
  </figure>
  <figure style="background-image: url(https://images.unsplash.com/photo-1593260654784-4aa47cd0c803?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=375&amp;q=80)">
    <figcaption>City-03</figcaption>
  </figure>
  <figure style="background-image: url(https://images.unsplash.com/photo-1593174942395-f7bc79522493?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=375&amp;q=80)">
    <figcaption>Nature-01</figcaption>
  </figure>
  <figure style="background-image: url(https://images.unsplash.com/photo-1593055132632-6aeec3f1dc00?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80)">
    <figcaption>Nature-02</figcaption>
  </figure>
  <figure style="background-image: url(https://images.unsplash.com/photo-1593201007276-bd95963531b2?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80)">
    <figcaption>Sky-02</figcaption>
  </figure>
  <figure style="background-image: url(https://images.unsplash.com/photo-1593157729036-ad7c7bb719c6?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=375&amp;q=80)">
    <figcaption>City-04</figcaption>
  </figure>
</main>
<footer></footer>
</body>
</html>