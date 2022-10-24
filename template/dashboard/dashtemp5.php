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
 html, body {
	 color: #99a0b0;
	 width: 100%;
	 height: 100%;
	 overflow: hidden;
	 background: #f5f5fa;
	 font-size: 16px;
	 line-height: 120%;
	 font-family: Open Sans, Helvetica, sans-serif;
}
 .dashboard {
	 display: grid;
	 width: 100%;
	 height: 100%;
	 grid-gap: 0;
	 grid-template-columns: 300px auto;
	 grid-template-rows: 80px auto;
	 grid-template-areas: &#39;
	menu search&#39;
	 &#39;
	menu content&#39;
	;
}
 .search-wrap {
	 grid-area: search;
	 background: #fff;
	 border-bottom: 1px solid #ede8f0;
	 display: flex;
	 align-items: center;
	 justify-content: space-between;
	 padding: 0 3em;
}
 .search-wrap .search {
	 height: 40px;
}
 .search-wrap .search label {
	 display: flex;
	 align-items: center;
	 height: 100%;
}
 .search-wrap .search label svg {
	 display: block;
}
 .search-wrap .search label svg path, .search-wrap .search label svg circle {
	 fill: #b6bbc6;
	 transition: fill .15s ease;
}
 .search-wrap .search label input {
	 display: block;
	 padding-left: 1em;
	 height: 100%;
	 margin: 0;
	 border: 0;
}
 .search-wrap .search label input:focus {
	 background: #f5f5fa;
}
 .search-wrap .search label:hover svg path, .search-wrap .search label:hover svg circle {
	 fill: #2b3a60;
}
 .search-wrap .user-actions button {
	 border: 0;
	 background: none;
	 width: 32px;
	 height: 32px;
	 margin: 0;
	 padding: 0;
	 margin-left: 0.5em;
}
 .search-wrap .user-actions button svg {
	 position: relative;
	 top: 2px;
}
 .search-wrap .user-actions button svg path, .search-wrap .user-actions button svg circle {
	 fill: #b6bbc6;
	 transition: fill .15s ease;
}
 .search-wrap .user-actions button:hover svg path, .search-wrap .user-actions button:hover svg circle {
	 fill: #2b3a60;
}
 .menu-wrap {
	 grid-area: menu;
	 padding-bottom: 3em;
	 overflow: auto;
	 background: #fff;
	 border-right: 1px solid #ede8f0;
}
 .menu-wrap .user {
	 height: 80px;
	 display: flex;
	 align-items: center;
	 justify-content: flex-start;
	 margin: 0;
	 padding: 0 3em;
}
 .menu-wrap .user .user-avatar {
	 width: 40px;
	 height: 40px;
	 border-radius: 50%;
	 overflow: hidden;
}
 .menu-wrap .user .user-avatar img {
	 display: block;
	 width: 100%;
	 height: 100%;
	 object-fit: cover;
}
 .menu-wrap .user figcaption {
	 margin: 0;
	 padding: 0 0 0 1em;
	 color: #1b253d;
	 font-weight: 700;
	 font-size: 0.875em;
	 line-height: 100%;
}
 .menu-wrap nav {
	 display: block;
	 padding: 0 3em;
}
 .menu-wrap nav section {
	 display: block;
	 padding: 3em 0 0;
}
 .menu-wrap nav h3 {
	 margin: 0;
	 font-size: .875em;
	 text-transform: uppercase;
	 color: #4b84fe;
	 font-weight: 600;
}
 .menu-wrap nav ul {
	 display: block;
	 padding: 0;
	 margin: 0;
}
 .menu-wrap nav li {
	 display: block;
	 padding: 0;
	 margin: 1em 0 0;
}
 .menu-wrap nav li a {
	 display: flex;
	 align-items: center;
	 justify-content: flex-start;
	 color: #99a0b0;
	 text-decoration: none;
	 font-weight: 600;
	 font-size: .875em;
	 transition: color .15s ease;
}
 .menu-wrap nav li a svg {
	 display: block;
	 margin-right: 1em;
}
 .menu-wrap nav li a svg path, .menu-wrap nav li a svg circle {
	 fill: #b6bbc6;
	 transition: fill .15s ease;
}
 .menu-wrap nav li a:hover {
	 color: #1b253d;
}
 .menu-wrap nav li a:hover svg path, .menu-wrap nav li a:hover svg circle {
	 fill: #2b3a60;
}
 .menu-wrap nav li a.active {
	 color: #4b84fe;
}
 .menu-wrap nav li a.active svg path, .menu-wrap nav li a.active svg circle {
	 fill: #4b84fe;
}
 .content-wrap {
	 grid-area: content;
	 padding: 3em;
	 overflow: auto;
}
 .content-wrap .content-head {
	 display: flex;
	 align-items: center;
	 justify-content: space-between;
}
 .content-wrap .content-head h1 {
	 font-size: 1.375em;
	 line-height: 100%;
	 color: #1b253d;
	 font-weight: 500;
	 margin: 0;
	 padding: 0;
}
 .content-wrap .content-head .action button {
	 border: 0;
	 background: #4b84fe;
	 color: #fff;
	 width: auto;
	 height: 3.5em;
	 padding: 0 2.25em;
	 border-radius: 3.5em;
	 font-size: 1em;
	 text-transform: uppercase;
	 font-weight: 600;
	 transition: background-color .15s ease;
}
 .content-wrap .content-head .action button:hover {
	 background-color: #1861fe;
}
 .content-wrap .content-head .action button:hover:active {
	 background-color: #0149e2;
	 transition: none;
}
 .content-wrap .info-boxes {
	 padding: 3em 0 2em;
	 display: grid;
	 grid-template-columns: repeat(auto-fill,minmax(280px,1fr));
	 grid-gap: 2em;
}
 .content-wrap .info-boxes .info-box {
	 background: #fff;
	 height: 160px;
	 display: flex;
	 align-items: center;
	 justify-content: flex-start;
	 padding: 0 3em;
	 border: 1px solid #ede8f0;
	 border-radius: 5px;
}
 .content-wrap .info-boxes .info-box .box-icon svg {
	 display: block;
	 width: 48px;
	 height: 48px;
}
 .content-wrap .info-boxes .info-box .box-icon svg path, .content-wrap .info-boxes .info-box .box-icon svg circle {
	 fill: #99a0b0;
}
 .content-wrap .info-boxes .info-box .box-content {
	 padding-left: 1.25em;
	 white-space: nowrap;
}
 .content-wrap .info-boxes .info-box .box-content .big {
	 display: block;
	 font-size: 2em;
	 line-height: 150%;
	 color: #1b253d;
}
 .content-wrap .info-boxes .info-box.active svg circle, .content-wrap .info-boxes .info-box.active svg path {
	 fill: #4b84fe;
}
 .content-wrap .person-boxes {
	 padding: 0;
	 display: grid;
	 grid-template-columns: repeat(auto-fill,minmax(280px,1fr));
	 grid-gap: 2em;
}
 .content-wrap .person-boxes .person-box {
	 background: #fff;
	 height: 320px;
	 text-align: center;
	 padding: 3em;
	 border: 1px solid #ede8f0;
	 border-radius: 5px;
}
 .content-wrap .person-boxes .person-box:nth-child(2n) .box-avatar .no-name {
	 background: #4b84fe;
}
 .content-wrap .person-boxes .person-box:nth-child(5n) .box-avatar .no-name {
	 background: #ffbb09;
}
 .content-wrap .person-boxes .person-box .box-avatar {
	 width: 100px;
	 height: 100px;
	 border-radius: 50%;
	 margin: 0px auto;
	 overflow: hidden;
}
 .content-wrap .person-boxes .person-box .box-avatar img {
	 display: block;
	 width: 100%;
	 height: 100%;
	 object-fit: cover;
}
 .content-wrap .person-boxes .person-box .box-avatar .no-name {
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 text-align: center;
	 color: #fff;
	 font-size: 1.5em;
	 font-weight: 600;
	 text-transform: uppercase;
	 width: 100%;
	 height: 100%;
	 background: #fa5b67;
}
 .content-wrap .person-boxes .person-box .box-bio {
	 white-space: no-wrap;
}
 .content-wrap .person-boxes .person-box .box-bio .bio-name {
	 margin: 2em 0 .75em;
	 color: #1b253d;
	 font-size: 1em;
	 font-weight: 700;
	 line-height: 100%;
}
 .content-wrap .person-boxes .person-box .box-bio .bio-position {
	 margin: 0;
	 font-size: .875em;
	 line-height: 100%;
}
 .content-wrap .person-boxes .person-box .box-actions {
	 margin-top: 1.25em;
	 padding-top: 1.25em;
	 width: 100%;
	 border-top: 1px solid #ede8f0;
	 display: flex;
	 align-items: center;
	 justify-content: space-between;
}
 .content-wrap .person-boxes .person-box .box-actions button {
	 border: 0;
	 background: none;
	 width: 32px;
	 height: 32px;
	 margin: 0;
	 padding: 0;
}
 .content-wrap .person-boxes .person-box .box-actions button svg {
	 position: relative;
	 top: 2px;
}
 .content-wrap .person-boxes .person-box .box-actions button svg path, .content-wrap .person-boxes .person-box .box-actions button svg circle {
	 fill: #b6bbc6;
	 transition: fill .15s ease;
}
 .content-wrap .person-boxes .person-box .box-actions button:hover svg path, .content-wrap .person-boxes .person-box .box-actions button:hover svg circle {
	 fill: #2b3a60;
}
 
    </style>
</head>
<body>
<div class="dashboard">
	<aside class="search-wrap">
		<div class="search">
			<label for="search">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"/></svg>
				<input type="text" id="search">
			</label>
		</div>
		
		<div class="user-actions">
			<button>
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13.094 2.085l-1.013-.082a1.082 1.082 0 0 0-.161 0l-1.063.087C6.948 2.652 4 6.053 4 10v3.838l-.948 2.846A1 1 0 0 0 4 18h4.5c0 1.93 1.57 3.5 3.5 3.5s3.5-1.57 3.5-3.5H20a1 1 0 0 0 .889-1.495L20 13.838V10c0-3.94-2.942-7.34-6.906-7.915zM12 19.5c-.841 0-1.5-.659-1.5-1.5h3c0 .841-.659 1.5-1.5 1.5zM5.388 16l.561-1.684A1.03 1.03 0 0 0 6 14v-4c0-2.959 2.211-5.509 5.08-5.923l.921-.074.868.068C15.794 4.497 18 7.046 18 10v4c0 .107.018.214.052.316l.56 1.684H5.388z"/></svg>
			</button>
			<button>
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 21c4.411 0 8-3.589 8-8 0-3.35-2.072-6.221-5-7.411v2.223A6 6 0 0 1 18 13c0 3.309-2.691 6-6 6s-6-2.691-6-6a5.999 5.999 0 0 1 3-5.188V5.589C6.072 6.779 4 9.65 4 13c0 4.411 3.589 8 8 8z"/><path d="M11 2h2v10h-2z"/></svg>
			</button>
		</div>
	</aside>
	
	<header class="menu-wrap">
		<figure class="user">
			<div class="user-avatar">
				<img src="https://images.unsplash.com/photo-1440589473619-3cde28941638?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=42ebdb92a644e864e032a2ebccaa25b6&auto=format&fit=crop&w=100&q=80" alt="Amanda King">
			</div>
			<figcaption>
				Amanda King
			</figcaption>
		</figure>
	
		<nav>
			<section class="dicover">
				<h3>Discover</h3>
				
				<ul>
					<li>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.855 14.365l-1.817 6.36a1.001 1.001 0 0 0 1.517 1.106L12 18.202l5.445 3.63a1 1 0 0 0 1.517-1.106l-1.817-6.36 4.48-3.584a1.001 1.001 0 0 0-.461-1.767l-5.497-.916-2.772-5.545c-.34-.678-1.449-.678-1.789 0L8.333 8.098l-5.497.916a1 1 0 0 0-.461 1.767l4.48 3.584zm2.309-4.379c.315-.053.587-.253.73-.539L12 5.236l2.105 4.211c.144.286.415.486.73.539l3.79.632-3.251 2.601a1.003 1.003 0 0 0-.337 1.056l1.253 4.385-3.736-2.491a1 1 0 0 0-1.109-.001l-3.736 2.491 1.253-4.385a1.002 1.002 0 0 0-.337-1.056l-3.251-2.601 3.79-.631z"/></svg>
							Featured
						</a>
					</li>
					
					<li>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.353 2.355-6.049-.002-8.416zm-1.412 7.002L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002 1.563 1.571 1.564 4.025.002 5.588z"/></svg>
							Most popular
						</a>
					</li>
					
					<li>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12.707 2.293A.996.996 0 0 0 12 2H3a1 1 0 0 0-1 1v9c0 .266.105.52.293.707l9 9a.997.997 0 0 0 1.414 0l9-9a.999.999 0 0 0 0-1.414l-9-9zM12 19.586l-8-8V4h7.586l8 8L12 19.586z"/><circle cx="7.507" cy="7.505" r="1.505"/></svg>
							Categories
						</a>
					</li>
					
					<li>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5.707 19.707L12 13.414l4.461 4.461L14.337 20H20v-5.663l-2.125 2.124L13.414 12l4.461-4.461L20 9.663V4h-5.663l2.124 2.125L12 10.586 5.707 4.293 4.293 5.707 10.586 12l-6.293 6.293z"/></svg>
							Shuffle
						</a>
					</li>
				</ul>
			</section>
		
			<section class="tools">
				<h3>Tools</h3>
				
				<ul>
					<li>
						<a href="#" class="active">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"/></svg>
							Search
						</a>
					</li>
					
					<li>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13 7L11 7 11 11 7 11 7 13 11 13 11 17 13 17 13 13 17 13 17 11 13 11z"/><path d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10c5.514,0,10-4.486,10-10S17.514,2,12,2z M12,20c-4.411,0-8-3.589-8-8 s3.589-8,8-8s8,3.589,8,8S16.411,20,12,20z"/></svg>
							Create portfolio
						</a>
					</li>
					
					<li>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 4H3a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm-1 14H4V9.227l7.335 6.521a1.003 1.003 0 0 0 1.33-.001L20 9.227V18zm0-11.448l-8 7.11-8-7.111V6h16v.552z"/></svg>
							Messages
						</a>
					</li>
				</ul>
			</section>
			
			<section class="dicover">
				<h3>Finance</h3>
				
				<ul>
					<li>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20,9l-4-4v3H9c-2.757,0-5,2.243-5,5s2.243,5,5,5h3v-2H9c-1.654,0-3-1.346-3-3s1.346-3,3-3h7v3L20,9z"/></svg>
							Buy
						</a>
					</li>
					
					<li>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15,8H8V5L4,9l4,4v-3h7c1.654,0,3,1.346,3,3s-1.346,3-3,3h-3v2h3c2.757,0,5-2.243,5-5S17.757,8,15,8z"/></svg>
							Sell
						</a>
					</li>
					
					<li>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21,3h-4V2h-2v1H9V2H7v1H3C2.447,3,2,3.447,2,4v17c0,0.553,0.447,1,1,1h18c0.553,0,1-0.447,1-1V4C22,3.447,21.553,3,21,3z M7,5v1h2V5h6v1h2V5h3v3H4V5H7z M4,20V10h16v10H4z"/><path d="M11,15.586l-1.793-1.793l-1.414,1.414l2.5,2.5C10.488,17.902,10.744,18,11,18s0.512-0.098,0.707-0.293l5-5l-1.414-1.414 L11,15.586z"/></svg>
							Invoice
						</a>
					</li>
					
					<li>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16 12h2v3h-2z"/><path d="M21 7h-1V4a1 1 0 0 0-1-1H5c-1.206 0-3 .799-3 3v11c0 2.201 1.794 3 3 3h16a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zM5 5h13v2H5.012C4.55 6.988 4 6.805 4 6s.55-.988 1-1zm15 13H5.012C4.55 17.988 4 17.805 4 17V8.833c.346.115.691.167 1 .167h15v9z"/></svg>
							Wallet
						</a>
					</li>
				</ul>
			</section>
		</nav>
	</header>
	
	<main class="content-wrap">
		<header class="content-head">
			<h1>Societe Generale</h1>
				
			<div class="action">
				<button>
					Save search
				</button>
			</div>
		</header>
		
		<div class="content">
			<section class="info-boxes">
				<div class="info-box">
					<div class="box-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 20V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1zm-2-1H5V5h14v14z"/><path d="M10.381 12.309l3.172 1.586a1 1 0 0 0 1.305-.38l3-5-1.715-1.029-2.523 4.206-3.172-1.586a1.002 1.002 0 0 0-1.305.38l-3 5 1.715 1.029 2.523-4.206z"/></svg>
					</div>
					
					<div class="box-content">
						<span class="big">44.51</span>
						Current price ($)
					</div>
				</div>
				
				<div class="info-box">
					<div class="box-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 10H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V11a1 1 0 0 0-1-1zm-1 10H5v-8h14v8zM5 6h14v2H5zM7 2h10v2H7z"/></svg>
					</div>
					
					<div class="box-content">
						<span class="big">132</span>
						Related articles
					</div>
				</div>
				
				<div class="info-box active">
					<div class="box-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3,21c0,0.553,0.448,1,1,1h16c0.553,0,1-0.447,1-1v-1c0-3.714-2.261-6.907-5.478-8.281C16.729,10.709,17.5,9.193,17.5,7.5 C17.5,4.468,15.032,2,12,2C8.967,2,6.5,4.468,6.5,7.5c0,1.693,0.771,3.209,1.978,4.219C5.261,13.093,3,16.287,3,20V21z M8.5,7.5 C8.5,5.57,10.07,4,12,4s3.5,1.57,3.5,3.5S13.93,11,12,11S8.5,9.43,8.5,7.5z M12,13c3.859,0,7,3.141,7,7H5C5,16.141,8.14,13,12,13z"/></svg>
					</div>
					
					<div class="box-content">
						<span class="big">18</span>
						Key executives
					</div>
				</div>
				
				<div class="info-box">
					<div class="box-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 3C6.486 3 2 6.364 2 10.5c0 2.742 1.982 5.354 5 6.678V21a.999.999 0 0 0 1.707.707l3.714-3.714C17.74 17.827 22 14.529 22 10.5 22 6.364 17.514 3 12 3zm0 13a.996.996 0 0 0-.707.293L9 18.586V16.5a1 1 0 0 0-.663-.941C5.743 14.629 4 12.596 4 10.5 4 7.468 7.589 5 12 5s8 2.468 8 5.5-3.589 5.5-8 5.5z"/></svg>
					</div>
					
					<div class="box-content">
						<span class="big">24</span>
						Conversations
					</div>
				</div>
			</section>
		
			<section class="person-boxes">
				<div class="person-box">
					<div class="box-avatar">
						<img src="https://images.unsplash.com/photo-1495791085242-4abf2dcc3be3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=30e718c0d1804c6365c73fc48419505d&auto=format&fit=crop&w=140&q=80" alt="Frederic Levy, Chief Executive Officer">
					</div>
					
					<div class="box-bio">
						<h2 class="bio-name">Frederic Levy</h2>
						<p class="bio-position">Chief Executive Officer</p>
					</div>
					
					<div class="box-actions">
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.855 14.365l-1.817 6.36a1.001 1.001 0 0 0 1.517 1.106L12 18.202l5.445 3.63a1 1 0 0 0 1.517-1.106l-1.817-6.36 4.48-3.584a1.001 1.001 0 0 0-.461-1.767l-5.497-.916-2.772-5.545c-.34-.678-1.449-.678-1.789 0L8.333 8.098l-5.497.916a1 1 0 0 0-.461 1.767l4.48 3.584zm2.309-4.379c.315-.053.587-.253.73-.539L12 5.236l2.105 4.211c.144.286.415.486.73.539l3.79.632-3.251 2.601a1.003 1.003 0 0 0-.337 1.056l1.253 4.385-3.736-2.491a1 1 0 0 0-1.109-.001l-3.736 2.491 1.253-4.385a1.002 1.002 0 0 0-.337-1.056l-3.251-2.601 3.79-.631z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M18 18H6V6h7V4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-8h-2v7z"/><path d="M17.465 5.121l-6.172 6.172 1.414 1.414 6.172-6.172 2.12 2.121L21 3h-5.657z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 3C6.486 3 2 6.364 2 10.5c0 2.742 1.982 5.354 5 6.678V21a.999.999 0 0 0 1.707.707l3.714-3.714C17.74 17.827 22 14.529 22 10.5 22 6.364 17.514 3 12 3zm0 13a.996.996 0 0 0-.707.293L9 18.586V16.5a1 1 0 0 0-.663-.941C5.743 14.629 4 12.596 4 10.5 4 7.468 7.589 5 12 5s8 2.468 8 5.5-3.589 5.5-8 5.5z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 8L17 8 17 11 14 11 14 13 17 13 17 16 19 16 19 13 22 13 22 11 19 11zM3 20h10c.553 0 1-.447 1-1v-.5c0-2.54-1.212-4.651-3.077-5.729C11.593 12.063 12 11.1 12 10c0-2.28-1.72-4-4-4s-4 1.72-4 4c0 1.1.407 2.063 1.077 2.771C3.212 13.849 2 15.96 2 18.5V19C2 19.553 2.448 20 3 20zM6 10c0-1.178.822-2 2-2s2 .822 2 2-.822 2-2 2S6 11.178 6 10zM8 14c2.43 0 3.788 1.938 3.977 4H4.023C4.212 15.938 5.57 14 8 14z"/></svg>
						</button>
					</div>
				</div>
				
				<div class="person-box">
					<div class="box-avatar">
						<img src="https://images.unsplash.com/photo-1495147334217-fcb3445babd5?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=35fc38ccdb26717006d7b48f79a2bb83&auto=format&fit=crop&w=140&q=80" alt="Robert Smaghi, Chairman">
					</div>
					
					<div class="box-bio">
						<h2 class="bio-name">Robert Smaghi</h2>
						<p class="bio-position">Chairman</p>
					</div>
					
					<div class="box-actions">
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.855 14.365l-1.817 6.36a1.001 1.001 0 0 0 1.517 1.106L12 18.202l5.445 3.63a1 1 0 0 0 1.517-1.106l-1.817-6.36 4.48-3.584a1.001 1.001 0 0 0-.461-1.767l-5.497-.916-2.772-5.545c-.34-.678-1.449-.678-1.789 0L8.333 8.098l-5.497.916a1 1 0 0 0-.461 1.767l4.48 3.584zm2.309-4.379c.315-.053.587-.253.73-.539L12 5.236l2.105 4.211c.144.286.415.486.73.539l3.79.632-3.251 2.601a1.003 1.003 0 0 0-.337 1.056l1.253 4.385-3.736-2.491a1 1 0 0 0-1.109-.001l-3.736 2.491 1.253-4.385a1.002 1.002 0 0 0-.337-1.056l-3.251-2.601 3.79-.631z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M18 18H6V6h7V4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-8h-2v7z"/><path d="M17.465 5.121l-6.172 6.172 1.414 1.414 6.172-6.172 2.12 2.121L21 3h-5.657z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 3C6.486 3 2 6.364 2 10.5c0 2.742 1.982 5.354 5 6.678V21a.999.999 0 0 0 1.707.707l3.714-3.714C17.74 17.827 22 14.529 22 10.5 22 6.364 17.514 3 12 3zm0 13a.996.996 0 0 0-.707.293L9 18.586V16.5a1 1 0 0 0-.663-.941C5.743 14.629 4 12.596 4 10.5 4 7.468 7.589 5 12 5s8 2.468 8 5.5-3.589 5.5-8 5.5z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 8L17 8 17 11 14 11 14 13 17 13 17 16 19 16 19 13 22 13 22 11 19 11zM3 20h10c.553 0 1-.447 1-1v-.5c0-2.54-1.212-4.651-3.077-5.729C11.593 12.063 12 11.1 12 10c0-2.28-1.72-4-4-4s-4 1.72-4 4c0 1.1.407 2.063 1.077 2.771C3.212 13.849 2 15.96 2 18.5V19C2 19.553 2.448 20 3 20zM6 10c0-1.178.822-2 2-2s2 .822 2 2-.822 2-2 2S6 11.178 6 10zM8 14c2.43 0 3.788 1.938 3.977 4H4.023C4.212 15.938 5.57 14 8 14z"/></svg>
						</button>
					</div>
				</div>
				
				<div class="person-box">
					<div class="box-avatar">
						<span class="no-name">VD</span>
					</div>
					
					<div class="box-bio">
						<h2 class="bio-name">Victoire Durand</h2>
						<p class="bio-position">Head of Private Banking</p>
					</div>
					
					<div class="box-actions">
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.855 14.365l-1.817 6.36a1.001 1.001 0 0 0 1.517 1.106L12 18.202l5.445 3.63a1 1 0 0 0 1.517-1.106l-1.817-6.36 4.48-3.584a1.001 1.001 0 0 0-.461-1.767l-5.497-.916-2.772-5.545c-.34-.678-1.449-.678-1.789 0L8.333 8.098l-5.497.916a1 1 0 0 0-.461 1.767l4.48 3.584zm2.309-4.379c.315-.053.587-.253.73-.539L12 5.236l2.105 4.211c.144.286.415.486.73.539l3.79.632-3.251 2.601a1.003 1.003 0 0 0-.337 1.056l1.253 4.385-3.736-2.491a1 1 0 0 0-1.109-.001l-3.736 2.491 1.253-4.385a1.002 1.002 0 0 0-.337-1.056l-3.251-2.601 3.79-.631z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M18 18H6V6h7V4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-8h-2v7z"/><path d="M17.465 5.121l-6.172 6.172 1.414 1.414 6.172-6.172 2.12 2.121L21 3h-5.657z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 3C6.486 3 2 6.364 2 10.5c0 2.742 1.982 5.354 5 6.678V21a.999.999 0 0 0 1.707.707l3.714-3.714C17.74 17.827 22 14.529 22 10.5 22 6.364 17.514 3 12 3zm0 13a.996.996 0 0 0-.707.293L9 18.586V16.5a1 1 0 0 0-.663-.941C5.743 14.629 4 12.596 4 10.5 4 7.468 7.589 5 12 5s8 2.468 8 5.5-3.589 5.5-8 5.5z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 8L17 8 17 11 14 11 14 13 17 13 17 16 19 16 19 13 22 13 22 11 19 11zM3 20h10c.553 0 1-.447 1-1v-.5c0-2.54-1.212-4.651-3.077-5.729C11.593 12.063 12 11.1 12 10c0-2.28-1.72-4-4-4s-4 1.72-4 4c0 1.1.407 2.063 1.077 2.771C3.212 13.849 2 15.96 2 18.5V19C2 19.553 2.448 20 3 20zM6 10c0-1.178.822-2 2-2s2 .822 2 2-.822 2-2 2S6 11.178 6 10zM8 14c2.43 0 3.788 1.938 3.977 4H4.023C4.212 15.938 5.57 14 8 14z"/></svg>
						</button>
					</div>
				</div>
				
				<div class="person-box">
					<div class="box-avatar">
						<img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=afb35d2683e102d67bcd70b87b100723&auto=format&fit=crop&w=140&q=80" alt="John Connely, Head of Digital">
					</div>
					
					<div class="box-bio">
						<h2 class="bio-name">John Connely</h2>
						<p class="bio-position">Head of Digital</p>
					</div>
					
					<div class="box-actions">
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.855 14.365l-1.817 6.36a1.001 1.001 0 0 0 1.517 1.106L12 18.202l5.445 3.63a1 1 0 0 0 1.517-1.106l-1.817-6.36 4.48-3.584a1.001 1.001 0 0 0-.461-1.767l-5.497-.916-2.772-5.545c-.34-.678-1.449-.678-1.789 0L8.333 8.098l-5.497.916a1 1 0 0 0-.461 1.767l4.48 3.584zm2.309-4.379c.315-.053.587-.253.73-.539L12 5.236l2.105 4.211c.144.286.415.486.73.539l3.79.632-3.251 2.601a1.003 1.003 0 0 0-.337 1.056l1.253 4.385-3.736-2.491a1 1 0 0 0-1.109-.001l-3.736 2.491 1.253-4.385a1.002 1.002 0 0 0-.337-1.056l-3.251-2.601 3.79-.631z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M18 18H6V6h7V4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-8h-2v7z"/><path d="M17.465 5.121l-6.172 6.172 1.414 1.414 6.172-6.172 2.12 2.121L21 3h-5.657z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 3C6.486 3 2 6.364 2 10.5c0 2.742 1.982 5.354 5 6.678V21a.999.999 0 0 0 1.707.707l3.714-3.714C17.74 17.827 22 14.529 22 10.5 22 6.364 17.514 3 12 3zm0 13a.996.996 0 0 0-.707.293L9 18.586V16.5a1 1 0 0 0-.663-.941C5.743 14.629 4 12.596 4 10.5 4 7.468 7.589 5 12 5s8 2.468 8 5.5-3.589 5.5-8 5.5z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 8L17 8 17 11 14 11 14 13 17 13 17 16 19 16 19 13 22 13 22 11 19 11zM3 20h10c.553 0 1-.447 1-1v-.5c0-2.54-1.212-4.651-3.077-5.729C11.593 12.063 12 11.1 12 10c0-2.28-1.72-4-4-4s-4 1.72-4 4c0 1.1.407 2.063 1.077 2.771C3.212 13.849 2 15.96 2 18.5V19C2 19.553 2.448 20 3 20zM6 10c0-1.178.822-2 2-2s2 .822 2 2-.822 2-2 2S6 11.178 6 10zM8 14c2.43 0 3.788 1.938 3.977 4H4.023C4.212 15.938 5.57 14 8 14z"/></svg>
						</button>
					</div>
				</div>
				
				<div class="person-box">
					<div class="box-avatar">
						<span class="no-name">GR</span>
					</div>
					
					<div class="box-bio">
						<h2 class="bio-name">Gerart Rotchet</h2>
						<p class="bio-position">Head of Marketing</p>
					</div>
					
					<div class="box-actions">
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.855 14.365l-1.817 6.36a1.001 1.001 0 0 0 1.517 1.106L12 18.202l5.445 3.63a1 1 0 0 0 1.517-1.106l-1.817-6.36 4.48-3.584a1.001 1.001 0 0 0-.461-1.767l-5.497-.916-2.772-5.545c-.34-.678-1.449-.678-1.789 0L8.333 8.098l-5.497.916a1 1 0 0 0-.461 1.767l4.48 3.584zm2.309-4.379c.315-.053.587-.253.73-.539L12 5.236l2.105 4.211c.144.286.415.486.73.539l3.79.632-3.251 2.601a1.003 1.003 0 0 0-.337 1.056l1.253 4.385-3.736-2.491a1 1 0 0 0-1.109-.001l-3.736 2.491 1.253-4.385a1.002 1.002 0 0 0-.337-1.056l-3.251-2.601 3.79-.631z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M18 18H6V6h7V4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-8h-2v7z"/><path d="M17.465 5.121l-6.172 6.172 1.414 1.414 6.172-6.172 2.12 2.121L21 3h-5.657z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 3C6.486 3 2 6.364 2 10.5c0 2.742 1.982 5.354 5 6.678V21a.999.999 0 0 0 1.707.707l3.714-3.714C17.74 17.827 22 14.529 22 10.5 22 6.364 17.514 3 12 3zm0 13a.996.996 0 0 0-.707.293L9 18.586V16.5a1 1 0 0 0-.663-.941C5.743 14.629 4 12.596 4 10.5 4 7.468 7.589 5 12 5s8 2.468 8 5.5-3.589 5.5-8 5.5z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 8L17 8 17 11 14 11 14 13 17 13 17 16 19 16 19 13 22 13 22 11 19 11zM3 20h10c.553 0 1-.447 1-1v-.5c0-2.54-1.212-4.651-3.077-5.729C11.593 12.063 12 11.1 12 10c0-2.28-1.72-4-4-4s-4 1.72-4 4c0 1.1.407 2.063 1.077 2.771C3.212 13.849 2 15.96 2 18.5V19C2 19.553 2.448 20 3 20zM6 10c0-1.178.822-2 2-2s2 .822 2 2-.822 2-2 2S6 11.178 6 10zM8 14c2.43 0 3.788 1.938 3.977 4H4.023C4.212 15.938 5.57 14 8 14z"/></svg>
						</button>
					</div>
				</div>
				
				<div class="person-box">
					<div class="box-avatar">
						<img src="https://images.unsplash.com/photo-1511019621063-1bd36feaece2?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e81c3e03912567cee323dc6993f88fe4&auto=format&fit=crop&w=140&q=80" alt="Nathalie Mestralet, Head of Trading">
					</div>
					
					<div class="box-bio">
						<h2 class="bio-name">Nathalie Mestralet</h2>
						<p class="bio-position">Head of Trading</p>
					</div>
					
					<div class="box-actions">
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.855 14.365l-1.817 6.36a1.001 1.001 0 0 0 1.517 1.106L12 18.202l5.445 3.63a1 1 0 0 0 1.517-1.106l-1.817-6.36 4.48-3.584a1.001 1.001 0 0 0-.461-1.767l-5.497-.916-2.772-5.545c-.34-.678-1.449-.678-1.789 0L8.333 8.098l-5.497.916a1 1 0 0 0-.461 1.767l4.48 3.584zm2.309-4.379c.315-.053.587-.253.73-.539L12 5.236l2.105 4.211c.144.286.415.486.73.539l3.79.632-3.251 2.601a1.003 1.003 0 0 0-.337 1.056l1.253 4.385-3.736-2.491a1 1 0 0 0-1.109-.001l-3.736 2.491 1.253-4.385a1.002 1.002 0 0 0-.337-1.056l-3.251-2.601 3.79-.631z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M18 18H6V6h7V4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-8h-2v7z"/><path d="M17.465 5.121l-6.172 6.172 1.414 1.414 6.172-6.172 2.12 2.121L21 3h-5.657z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 3C6.486 3 2 6.364 2 10.5c0 2.742 1.982 5.354 5 6.678V21a.999.999 0 0 0 1.707.707l3.714-3.714C17.74 17.827 22 14.529 22 10.5 22 6.364 17.514 3 12 3zm0 13a.996.996 0 0 0-.707.293L9 18.586V16.5a1 1 0 0 0-.663-.941C5.743 14.629 4 12.596 4 10.5 4 7.468 7.589 5 12 5s8 2.468 8 5.5-3.589 5.5-8 5.5z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 8L17 8 17 11 14 11 14 13 17 13 17 16 19 16 19 13 22 13 22 11 19 11zM3 20h10c.553 0 1-.447 1-1v-.5c0-2.54-1.212-4.651-3.077-5.729C11.593 12.063 12 11.1 12 10c0-2.28-1.72-4-4-4s-4 1.72-4 4c0 1.1.407 2.063 1.077 2.771C3.212 13.849 2 15.96 2 18.5V19C2 19.553 2.448 20 3 20zM6 10c0-1.178.822-2 2-2s2 .822 2 2-.822 2-2 2S6 11.178 6 10zM8 14c2.43 0 3.788 1.938 3.977 4H4.023C4.212 15.938 5.57 14 8 14z"/></svg>
						</button>
					</div>
				</div>
				
				<div class="person-box">
					<div class="box-avatar">
						<img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5d43ec18ec2cf6ff854513b9e8395c1e&auto=format&fit=crop&w=140&q=80" alt="Alexandra Johnson, Head of Human Resources">
					</div>
					
					<div class="box-bio">
						<h2 class="bio-name">Alexandra Johnson</h2>
						<p class="bio-position">Head of Human Resources</p>
					</div>
					
					<div class="box-actions">
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.855 14.365l-1.817 6.36a1.001 1.001 0 0 0 1.517 1.106L12 18.202l5.445 3.63a1 1 0 0 0 1.517-1.106l-1.817-6.36 4.48-3.584a1.001 1.001 0 0 0-.461-1.767l-5.497-.916-2.772-5.545c-.34-.678-1.449-.678-1.789 0L8.333 8.098l-5.497.916a1 1 0 0 0-.461 1.767l4.48 3.584zm2.309-4.379c.315-.053.587-.253.73-.539L12 5.236l2.105 4.211c.144.286.415.486.73.539l3.79.632-3.251 2.601a1.003 1.003 0 0 0-.337 1.056l1.253 4.385-3.736-2.491a1 1 0 0 0-1.109-.001l-3.736 2.491 1.253-4.385a1.002 1.002 0 0 0-.337-1.056l-3.251-2.601 3.79-.631z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M18 18H6V6h7V4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-8h-2v7z"/><path d="M17.465 5.121l-6.172 6.172 1.414 1.414 6.172-6.172 2.12 2.121L21 3h-5.657z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 3C6.486 3 2 6.364 2 10.5c0 2.742 1.982 5.354 5 6.678V21a.999.999 0 0 0 1.707.707l3.714-3.714C17.74 17.827 22 14.529 22 10.5 22 6.364 17.514 3 12 3zm0 13a.996.996 0 0 0-.707.293L9 18.586V16.5a1 1 0 0 0-.663-.941C5.743 14.629 4 12.596 4 10.5 4 7.468 7.589 5 12 5s8 2.468 8 5.5-3.589 5.5-8 5.5z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 8L17 8 17 11 14 11 14 13 17 13 17 16 19 16 19 13 22 13 22 11 19 11zM3 20h10c.553 0 1-.447 1-1v-.5c0-2.54-1.212-4.651-3.077-5.729C11.593 12.063 12 11.1 12 10c0-2.28-1.72-4-4-4s-4 1.72-4 4c0 1.1.407 2.063 1.077 2.771C3.212 13.849 2 15.96 2 18.5V19C2 19.553 2.448 20 3 20zM6 10c0-1.178.822-2 2-2s2 .822 2 2-.822 2-2 2S6 11.178 6 10zM8 14c2.43 0 3.788 1.938 3.977 4H4.023C4.212 15.938 5.57 14 8 14z"/></svg>
						</button>
					</div>
				</div>
				
				<div class="person-box">
					<div class="box-avatar">
						<img src="https://images.unsplash.com/photo-1506085452766-c330853bea50?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c90ef12b4dc22a4a4c277dd056dd0b7e&auto=format&fit=crop&w=140&q=80" alt="Herve De Rinel, Head of International">
					</div>
					
					<div class="box-bio">
						<h2 class="bio-name">Herve De Rinel</h2>
						<p class="bio-position">Head of International</p>
					</div>
					
					<div class="box-actions">
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.855 14.365l-1.817 6.36a1.001 1.001 0 0 0 1.517 1.106L12 18.202l5.445 3.63a1 1 0 0 0 1.517-1.106l-1.817-6.36 4.48-3.584a1.001 1.001 0 0 0-.461-1.767l-5.497-.916-2.772-5.545c-.34-.678-1.449-.678-1.789 0L8.333 8.098l-5.497.916a1 1 0 0 0-.461 1.767l4.48 3.584zm2.309-4.379c.315-.053.587-.253.73-.539L12 5.236l2.105 4.211c.144.286.415.486.73.539l3.79.632-3.251 2.601a1.003 1.003 0 0 0-.337 1.056l1.253 4.385-3.736-2.491a1 1 0 0 0-1.109-.001l-3.736 2.491 1.253-4.385a1.002 1.002 0 0 0-.337-1.056l-3.251-2.601 3.79-.631z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M18 18H6V6h7V4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-8h-2v7z"/><path d="M17.465 5.121l-6.172 6.172 1.414 1.414 6.172-6.172 2.12 2.121L21 3h-5.657z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 3C6.486 3 2 6.364 2 10.5c0 2.742 1.982 5.354 5 6.678V21a.999.999 0 0 0 1.707.707l3.714-3.714C17.74 17.827 22 14.529 22 10.5 22 6.364 17.514 3 12 3zm0 13a.996.996 0 0 0-.707.293L9 18.586V16.5a1 1 0 0 0-.663-.941C5.743 14.629 4 12.596 4 10.5 4 7.468 7.589 5 12 5s8 2.468 8 5.5-3.589 5.5-8 5.5z"/></svg>
						</button>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 8L17 8 17 11 14 11 14 13 17 13 17 16 19 16 19 13 22 13 22 11 19 11zM3 20h10c.553 0 1-.447 1-1v-.5c0-2.54-1.212-4.651-3.077-5.729C11.593 12.063 12 11.1 12 10c0-2.28-1.72-4-4-4s-4 1.72-4 4c0 1.1.407 2.063 1.077 2.771C3.212 13.849 2 15.96 2 18.5V19C2 19.553 2.448 20 3 20zM6 10c0-1.178.822-2 2-2s2 .822 2 2-.822 2-2 2S6 11.178 6 10zM8 14c2.43 0 3.788 1.938 3.977 4H4.023C4.212 15.938 5.57 14 8 14z"/></svg>
						</button>
					</div>
				</div>
			</section>
		</div>
	</main>
</div>
</body>
</html>