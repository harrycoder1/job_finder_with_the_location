<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap");
*, *:after, *:before {
  box-sizing: border-box;
}
body {
  font-family: "Inter", sans-serif;
  line-height: 1.5;
  overflow-y: hidden;
}
input, button, select, textarea {
  font: inherit;
}
img {
  display: block;
  max-width: 100%;
}
.window {
  display: grid;
  grid-template-columns: auto auto auto;
  grid-template-rows: 100vh;
}
.window-header {
  background-color: #05043e;
}
.navigation {
  padding: 0.75rem;
  display: flex;
  flex-direction: column;
  height: 100%;
  justify-content: space-between;
}
.navigation-top, .navigation-bottom {
  display: flex;
  flex-direction: column;
}
.navigation-item {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 3rem;
  height: 3rem;
  border-radius: 6px;
  color: #fff;
  transition: 0.15s ease;
  position: relative;
}
.navigation-item + * {
  margin-top: 0.5rem;
}
.navigation-item:hover, .navigation-item.active {
  background-color: #2b2a5b;
}
.navigation-item .avatar {
  max-width: 1.75rem;
  max-height: 1.75rem;
}
.navigation-item:hover .navigation-item-title {
  transform: scale(1);
  opacity: 1;
}
.navigation-item--notification::after {
  position: absolute;
  content: "";
  display: block;
  width: 8px;
  height: 8px;
  background-color: #3f5efb;
  border-radius: 50%;
  top: 8px;
  right: 8px;
}
.navigation-item-title {
  justify-self: flex-end;
  position: absolute;
  transform: scale(0);
  transform-origin: 0% 50%;
  left: calc(100% + .75rem);
  opacity: 0;
  transition: 0.15s ease;
  width: auto;
  z-index: 300;
  background-color: #2b2a5b;
  display: block;
  white-space: nowrap;
  padding: 0.5em 1em;
  border-radius: 6px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
.navigation-item-title:before {
  position: absolute;
  content: "";
  display: block;
  width: 10px;
  height: 10px;
  background-color: #2b2a5b;
  transform: translateY(-50%) rotate(45deg);
  left: -5px;
  top: 50%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
.window-main-header {
  border-bottom: 1px solid #ddd;
  background-color: #fff;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  align-items: center;
  padding: 0.75rem 0.75rem 0.75rem 2rem;
}
.window-main-body {
  display: grid;
  grid-template-columns: 4fr 1fr;
  grid-template-rows: calc(100vh - 62px);
}
.breadcrumbs {
  display: flex;
  flex-wrap: wrap;
}
.breadcrumbs-item {
  margin-right: 0.375rem;
  display: inline-flex;
  align-items: center;
}
.breadcrumbs-item:not(:last-child):after {
  margin-left: 0.375rem;
  content: "";
  display: inline-flex;
  background-image: url("data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M9 6L15 12L9 18' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E%0A");
  background-size: 1rem;
  background-repeat: no-repeat;
  background-position: 50% 50%;
  width: 1.5rem;
  height: 1em;
}
.breadcrumbs-item a {
  color: #454545;
  display: inline-flex;
  align-items: center;
  text-decoration: none;
}
.breadcrumbs-item a svg {
  width: 1rem;
  margin-right: 0.375rem;
  color: #8015cb;
}
.editor {
  padding-top: 3rem;
  padding-bottom: 5rem;
  padding-left: 5vw;
  padding-right: 5vw;
  height: 100%;
  overflow-y: auto;
  background-color: #efefef;
}
.editor::-webkit-scrollbar {
  width: 15px;
  background-color: #efefef;
}
.editor::-webkit-scrollbar-thumb {
  width: 5px;
  border-radius: 99em;
  background-color: #cdcdcd;
  border: 5px solid #efefef;
}
.editor-input-group {
  display: flex;
  flex-direction: column;
}
.editor-input-group + * {
  margin-top: 1.5rem;
}
.editor-input-label {
  font-weight: 600;
}
.editor-textarea {
  margin-top: -1px;
  border: 1px solid #ddd;
  padding: 0.75em;
}
.editor-toolbar {
  background-color: #fff;
  border: 1px solid #ddd;
  padding: 0.5rem;
  display: flex;
  flex-wrap: wrap;
  top: calc(-3rem - 1px);
  position: sticky;
  z-index: 200;
  align-items: center;
}
.editor-toolbar-item {
  background-color: transparent;
  border: 0;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  border-radius: 6px;
  transition: 0.15s ease;
}
.editor-toolbar-item.icon {
  width: 2rem;
  height: 2rem;
}
.editor-toolbar-item.dropdown {
  min-width: 150px;
  justify-content: space-between;
  height: 2rem;
}
.editor-toolbar-item svg {
  width: 1.25rem;
  height: 1.25rem;
}
.editor-toolbar-item:hover {
  background-color: #ededed;
}
.separator {
  height: 1rem;
  width: 2px;
  background-color: #DDD;
  display: block;
  margin-left: 0.625rem;
  margin-right: 0.625rem;
}
.editor-textarea {
  background-color: #fff;
  min-height: 50vh;
  max-width: 100%;
  padding: 0;
  overflow: hidden;
}
.editor-textarea-editable {
  padding: 3em 0;
  padding-left: 5vw;
  padding-right: 5vw;
  line-height: 1.65;
}
.editor-textarea-editable > * + * {
  margin-top: 1em;
}
.editor-textarea-editable h1 {
  font-size: 2rem;
  font-weight: 500;
  line-height: 1.25;
}
.editor-textarea-editable h2 {
  font-weight: 500;
  line-height: 1.375;
  font-size: 1.5rem;
}
.editor-textarea-editable ul {
  list-style: square;
  margin-left: 40px;
}
.editor-textarea-editable ul li + li {
  margin-top: 0.5em;
}
.editor-textarea-editable em {
  font-style: italic;
}
.editor-textarea-editable strong {
  font-weight: 600;
}
.editor-textarea-editable img {
  max-width: 50%;
  float: left;
  margin-right: 1em;
  margin-top: 1em;
  margin-bottom: 1em;
  transition: 0.15s ease;
  cursor: pointer;
}
.editor-textarea-editable img:hover {
  box-shadow: 0 0 0 4px #3f5efb;
}
.editor-textarea-editable a {
  color: #3f5efb;
  text-decoration: none;
  box-shadow: 0 2px 0 0 currentcolor;
  font-weight: 600;
}
.editor-textarea-editable .leading {
  font-size: 1.25rem;
  font-weight: 500;
  color: #565656;
}
.window-panel {
  background-color: #19194a;
  padding: 2rem;
  position: relative;
  overflow-y: auto;
}
.window-panel::-webkit-scrollbar {
  width: 15px;
  background-color: #19194a;
}
.window-panel::-webkit-scrollbar-thumb {
  width: 5px;
  border-radius: 99em;
  background-color: #535377;
  border: 5px solid #19194a;
}
.window-panel:after {
  content: "";
  width: calc(100% + 4rem);
  height: 50px;
  margin-left: -2rem;
  bottom: -2rem;
  background-image: linear-gradient(to top, #19194a 0%, transparent 100%);
  display: block;
  position: sticky;
  z-index: 100;
}
.window-main-body-right {
  background-color: #fff;
  border-left: 1px solid #ddd;
  overflow-y: auto;
  padding-bottom: 3rem;
}
.window-main-body-right::-webkit-scrollbar {
  width: 15px;
  background-color: #fff;
}
.window-main-body-right::-webkit-scrollbar-thumb {
  width: 5px;
  border-radius: 99em;
  background-color: #cdcdcd;
  border: 5px solid #fff;
}
.settings-section {
  padding: 1.5rem;
}
.settings-section + * {
  border-top: 1px solid #ddd;
}
.section-title {
  font-weight: 600;
  letter-spacing: 0.05em;
  color: #565656;
  text-transform: uppercase;
  font-size: 0.75rem;
  margin-bottom: 1rem;
}
.window-panel .section-title {
  color: #8c8ca5;
}
.search {
  margin-bottom: 1.5rem;
}
.search-input {
  border: 0;
  background-color: transparent;
  color: #fff;
  border-bottom: 1px solid #535377;
  padding: 0.5em 0;
  padding-left: 1.75rem;
  font-size: 0.875rem;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='%23fff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' display='block' id='Search'%3E%3Cpath d='M21 21l-4.486-4.494M19 10.5a8.5 8.5 0 1 1-17 0 8.5 8.5 0 0 1 17 0z'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: 0 50%;
}
.search-input::placeholder {
  color: #8c8ca5;
}
.search-input:focus {
  border-color: #fff;
}
.tree {
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  padding-left: 1rem;
  position: relative;
}
.tree:before {
  display: block;
  content: "";
  position: absolute;
  width: 2px;
  height: calc(100% - 2em);
  background-color: #535377;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
}
.tree--sub:after {
  position: absolute;
  content: "";
  display: block;
  height: 2px;
  width: 1rem;
  background-color: #535377;
  top: 1.25em;
  left: -1rem;
}
.tree-branch-action {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
}
.tree-branch-action button {
  opacity: 0;
  transition: 0.15s ease;
  background-color: #535377;
  color: #fff;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  font-size: 0.75em;
  width: 1rem;
  height: 1rem;
  border: 0;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 0.5rem;
}
.tree-branch-action button:hover {
  background-color: #c6c6d2;
  color: #19194a;
}
.tree-branch-action:hover button {
  opacity: 1;
}
.tree-branch-link {
  color: inherit;
  color: #c6c6d2;
  text-decoration: none;
  position: relative;
  display: block;
  padding-top: 0.5em;
  padding-bottom: 0.5em;
  transition: 0.15s ease;
}
.tree-branch-link:before {
  position: absolute;
  content: "";
  display: block;
  height: 10px;
  width: 10px;
  border-radius: 50%;
  background-color: #19194a;
  border: 2px solid #535377;
  top: 1em;
  left: calc(-1rem - 4px);
  z-index: 1;
  transition: 0.15s ease;
  transform-origin: 50% 50%;
}
.tree-branch-link.active, .tree-branch-link:hover {
  color: #fff;
}
.tree-branch-link.active:before, .tree-branch-link:hover:before {
  border-color: #fff;
  transform: scale(1.25);
}
.tree-branch-link--404:before {
  border-radius: 0;
  transform: rotate(45deg);
}
.tree-branch-link--404:hover:before {
  transform: scale(1.25) rotate(45deg);
}
.tree-branch-link.active {
  font-weight: 500;
}
.tree-branch-link.active:before {
  background-color: #fff;
}
.publish-actions {
  display: flex;
  align-items: center;
}
.publish-info {
  font-size: 0.75rem;
  color: #666;
  line-height: 1.25;
  margin-right: 1.25rem;
  text-align: center;
}
.button {
  display: inline-flex;
  align-items: center;
  border: 0;
  padding: 0.375em 0.75em;
  border-radius: 4px;
  background-color: transparent;
  cursor: pointer;
  border-bottom: 1px solid;
  margin-right: 0.5rem;
  transition: 0.25s ease;
  font-weight: 500;
}
.button svg {
  margin-right: 0.375em;
  width: 1.25em;
  height: 1.25em;
}
.button--save {
  background-color: #e0e4fa;
  color: #2f47be;
}
.button--save:hover {
  color: #e0e4fa;
  background-color: #2f47be;
}
.button--schedule {
  background-color: #ece0fa;
  color: #722fbe;
}
.button--schedule:hover {
  color: #ece0fa;
  background-color: #722fbe;
}
.button--publish {
  background-color: #8ae2b6;
  color: #22744b;
}
.button--publish:hover {
  color: #8ae2b6;
  background-color: #22744b;
}
.button--delete {
  background-color: #fdc8bf;
  color: #bd1717;
}
.button--delete:hover {
  color: #fdc8bf;
  background-color: #bd1717;
}
.input-group {
  display: flex;
  flex-direction: column;
}
.input-group + * {
  margin-top: 1.5rem;
}
.input-label {
  font-size: 0.875rem;
  font-weight: 500;
  margin-bottom: 0.25rem;
}
.input-field {
  padding: 0.375em 0.5em;
  border: 1px solid #ccc;
  font-size: 0.875rem;
  transition: 0.15s ease;
}
.input-field:hover {
  border-color: #3f5efb;
}
.input-field--textarea {
  min-height: calc(6em * 1.5);
  max-width: 100%;
  min-width: 100%;
  resize: none;
}
.input-field--textarea::-webkit-scrollbar {
  width: 15px;
  background-color: #fff;
}
.input-field--textarea::-webkit-scrollbar-thumb {
  width: 5px;
  border-radius: 99em;
  background-color: #cdcdcd;
  border: 5px solid #fff;
}
.input-url {
  color: #3f5efb;
  font-size: 0.875rem;
}
.input-image {
  padding: 0;
  border: 1px solid #ddd;
  background-color: #fff;
  border-radius: 0 0 4px 4px;
  border-bottom-width: 2px;
  cursor: pointer;
  transition: 0.15s ease;
}
.input-image:hover {
  border-color: #3f5efb;
}
.input-image-wrapper {
  width: calc(100% + 2px);
  margin-top: -1px;
  margin-left: -1px;
  overflow: hidden;
  display: block;
}
.input-image-meta {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0.5em;
}
.input-image-meta-title {
  font-weight: 500;
  font-size: 0.875rem;
}
.input-image-meta-action {
  color: #3f5efb;
  font-weight: 700;
  letter-spacing: 0.05em;
  font-size: 0.75rem;
  text-transform: uppercase;
}
.input-checkbox {
  display: flex;
  align-items: center;
  cursor: pointer;
}
.input-checkbox + * {
  margin-top: 0.75rem;
}
.input-checkbox-box {
  clip: rect(0 0 0 0);
  clip-path: inset(100%);
  height: 1px;
  overflow: hidden;
  position: absolute;
  white-space: nowrap;
  width: 1px;
}
.input-checkbox-box:checked + .input-checkbox-toggle {
  background-color: #3f5efb;
  border-color: #3f5efb;
}
.input-checkbox-box:checked + .input-checkbox-toggle:after {
  background-color: #fff;
  transform: translateX(100%);
}
.input-checkbox-toggle {
  position: relative;
  display: inline-block;
  width: 32px;
  height: 20px;
  border-radius: 99em;
  border: 1px solid #999;
  margin-right: 0.375rem;
}
.input-checkbox-toggle:after {
  content: "";
  position: absolute;
  top: 3px;
  left: 3px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #999;
}
:focus {
  outline: 0;
}

    </style>
</head>
<body>
<div class="window">
	<header class="window-header">
		<nav class="navigation">
			<div class="navigation-top">
				<a href="#" class="navigation-item">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M3 9.5L12 4L21 9.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M19 13V19.4C19 19.7314 18.7314 20 18.4 20H5.6C5.26863 20 5 19.7314 5 19.4V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span class="navigation-item-title">Dashboard</span>
				</a>
				<a href="#" class="navigation-item active">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M3.6 3H20.4C20.7314 3 21 3.26863 21 3.6V20.4C21 20.7314 20.7314 21 20.4 21H3.6C3.26863 21 3 20.7314 3 20.4V3.6C3 3.26863 3.26863 3 3.6 3Z" stroke="currentColor" stroke-width="1.5" />
						<path d="M9.75 9.75V21" stroke="currentColor" stroke-width="1.5" />
						<path d="M3 9.75H21" stroke="currentColor" stroke-width="1.5" />
					</svg>
					<span class="navigation-item-title">Pages</span>
				</a>
				<a href="#" class="navigation-item">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M2.6954 7.18536L11.6954 11.1854L12.3046 9.81464L3.3046 5.81464L2.6954 7.18536ZM12.75 21.5V10.5H11.25V21.5H12.75ZM12.3046 11.1854L21.3046 7.18536L20.6954 5.81464L11.6954 9.81464L12.3046 11.1854Z" fill="currentColor" />
						<path d="M3 17.1101V6.88992C3 6.65281 3.13964 6.43794 3.35632 6.34164L11.7563 2.6083C11.9115 2.53935 12.0885 2.53935 12.2437 2.6083L20.6437 6.34164C20.8604 6.43794 21 6.65281 21 6.88992V17.1101C21 17.3472 20.8604 17.5621 20.6437 17.6584L12.2437 21.3917C12.0885 21.4606 11.9115 21.4606 11.7563 21.3917L3.35632 17.6584C3.13964 17.5621 3 17.3472 3 17.1101Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M7.5 4.5L16.1437 8.34164C16.3604 8.43794 16.5 8.65281 16.5 8.88992V12.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span class="navigation-item-title">Media & Files</span>

				</a>
				<a href="#" class="navigation-item">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M8 21.1679V14L12 7L16 14V21.1679" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M8 14C8 14 9.12676 15 10 15C10.8732 15 12 14 12 14C12 14 13.1268 15 14 15C14.8732 15 16 14 16 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span class="navigation-item-title">Theme Settings</span>

				</a>
				<a href="#" class="navigation-item navigation-item--notification">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M18 8.4C18 6.70261 17.3679 5.07475 16.2426 3.87452C15.1174 2.67428 13.5913 2 12 2C10.4087 2 8.88258 2.67428 7.75736 3.87452C6.63214 5.07475 6 6.70261 6 8.4C6 15.8667 3 18 3 18H21C21 18 18 15.8667 18 8.4Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M13.73 21C13.5542 21.3031 13.3019 21.5547 12.9982 21.7295C12.6946 21.9044 12.3504 21.9965 12 21.9965C11.6496 21.9965 11.3054 21.9044 11.0018 21.7295C10.6982 21.5547 10.4458 21.3031 10.27 21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span class="navigation-item-title">Notifications</span>

				</a>
			</div>
			<div class="navigation-bottom">
				<a href="#" class="navigation-item">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M19.6224 10.3954L18.5247 7.7448L20 6L18 4L16.2647 5.48295L13.5578 4.36974L12.9353 2H10.981L10.3491 4.40113L7.70441 5.51596L6 4L4 6L5.45337 7.78885L4.3725 10.4463L2 11V13L4.40111 13.6555L5.51575 16.2997L4 18L6 20L7.79116 18.5403L10.397 19.6123L11 22H13L13.6045 19.6132L16.2551 18.5155C16.6969 18.8313 18 20 18 20L20 18L18.5159 16.2494L19.6139 13.598L21.9999 12.9772L22 11L19.6224 10.3954Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
					</svg>

					<span class="navigation-item-title">Settings</span>
				</a>
				<a href="#" class="navigation-item">
					<svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" width="80" height="80" colors="#b2cba3,#e0df9f,#e7a83e,#9a736e,#ea525f" name="Babe Didrikson" size="80" class="avatar">
						<mask id="mask__beam" maskUnits="userSpaceOnUse" x="0" y="0" width="36" height="36">
							<rect width="36" height="36" rx="20" fill="white"></rect>
						</mask>
						<g mask="url(#mask__beam)" fill="transparent">
							<rect width="36" height="36" rx="20" fill="#e7a83e"></rect>
							<rect x="0" y="0" width="36" height="36" transform="translate(-5 9) rotate(249 18 18) scale(1)" fill="#ea525f" rx="36">
							</rect>
							<g transform="translate(-1 4.5) rotate(9 18 18)">
								<path d="M13,19 a1,0.75 0 0,0 10,0" fill="black"></path>
								<rect x="10" y="14" width="1.5" height="2" rx="1" stroke="none" fill="black">
								</rect>
								<rect x="24" y="14" width="1.5" height="2" rx="1" stroke="none" fill="black">
								</rect>
							</g>
						</g>
					</svg>
					<span class="navigation-item-title">Your Profile</span>
				</a>
			</div>
		</nav>
	</header>
	<div class="window-panel">
		<h2 class="section-title">
			Site structure
		</h2>
		<div class="search">
			<input type="type" class="search-input" placeholder="Filter..." />
		</div>
		<ul class="tree">
			<li class="tree-branch">
				<div class="tree-branch-action">
					<a href="#" class="tree-branch-link">Home</a>
					<button class="tree-branch-button">+</button>
				</div>
			</li>
			<li class="tree-branch">
				<div class="tree-branch-action">
					<a href="#" class="tree-branch-link">Product</a>
					<button class="tree-branch-button">+</button>
				</div>
				<ul class="tree tree--sub">
					<li class="tree-branch tree-branch--sub">
						<div class="tree-branch-action">
							<a href="#" class="tree-branch-link tree-branch-link--sub">Features</a>
							<button class="tree-branch-button">+</button>
						</div>
						<ul class="tree tree--sub">
							<li class="tree-branch tree-branch--sub">
								<div class="tree-branch-action">
									<a href="#" class="tree-branch-link tree-branch-link--sub">Messaging</a>
									<button class="tree-branch-button">+</button>
								</div>
							</li>
							<li class="tree-branch tree-branch--sub">
								<div class="tree-branch-action">
									<a href="#" class="tree-branch-link tree-branch-link--sub">Voice & Video
										Calls</a>
									<button class="tree-branch-button">+</button>
								</div>
							</li>
						</ul>
					</li>
					<li class="tree-branch tree-branch--sub">
						<div class="tree-branch-action">
							<a href="#" class="tree-branch-link tree-branch-link--sub">Integrations</a>
							<button class="tree-branch-button">+</button>
						</div>
						<ul class="tree tree--sub">
							<li class="tree-branch tree-branch--sub">
								<div class="tree-branch-action">
									<a href="#" class="tree-branch-link tree-branch-link--sub">Slack</a>
									<button class="tree-branch-button">+</button>
								</div>
							</li>
							<li class="tree-branch tree-branch--sub">
								<div class="tree-branch-action">
									<a href="#" class="tree-branch-link tree-branch-link--sub">Discord</a>
									<button class="tree-branch-button">+</button>
								</div>
							</li>
							<li class="tree-branch tree-branch--sub">
								<div class="tree-branch-action">
									<a href="#" class="tree-branch-link tree-branch-link--sub">Microsoft
										Teams</a>
									<button class="tree-branch-button">+</button>
								</div>
							</li>
							<li class="tree-branch tree-branch--sub">
								<div class="tree-branch-action">
									<a href="#" class="tree-branch-link tree-branch-link--sub">Zoom</a>
									<button class="tree-branch-button">+</button>
								</div>
							</li>
						</ul>
					</li>
					<li class="tree-branch tree-branch--sub">
						<div class="tree-branch-action">
							<a href="#" class="tree-branch-link tree-branch-link--sub">Security</a>
							<button class="tree-branch-button">+</button>
						</div>
					</li>
				</ul>
			</li>
			<li class="tree-branch">
				<div class="tree-branch-action">
					<a href="#" class="tree-branch-link">Pricing</a>
					<button class="tree-branch-button">+</button>
				</div>
			</li>
			<li class="tree-branch">
				<div class="tree-branch-action">
					<a href="#" class="tree-branch-link active">Blog</a>
					<button class="tree-branch-button">+</button>
				</div>
				<ul class="tree tree--sub">
					<li class="tree-branch tree-branch--sub">
						<div class="tree-branch-action">
							<a href="#" class="tree-branch-link tree-branch-link--sub">Newsletter</a>
							<button class="tree-branch-button">+</button>
						</div>
					</li>
				</ul>
			</li>
			<li class="tree-branch">
				<div class="tree-branch-action">
					<a href="#" class="tree-branch-link">Company</a>
					<button class="tree-branch-button">+</button>
				</div>
				<ul class="tree tree--sub">
					<li class="tree-branch tree-branch--sub">
						<div class="tree-branch-action">
							<a href="#" class="tree-branch-link tree-branch-link--sub">About Us</a>
							<button class="tree-branch-button">+</button>
						</div>
					</li>
					<li class="tree-branch tree-branch--sub">
						<div class="tree-branch-action">
							<a href="#" class="tree-branch-link tree-branch-link--sub">Media & Press</a>
							<button class="tree-branch-button">+</button>
						</div>
					</li>
					<li class="tree-branch tree-branch--sub">
						<div class="tree-branch-action">
							<a href="#" class="tree-branch-link tree-branch-link--sub">Careers</a>
							<button class="tree-branch-button">+</button>
						</div>
					</li>
				</ul>
			</li>

			<li class="tree-branch">
				<div class="tree-branch-action">
					<a href="#" class="tree-branch-link">Contact</a>
					<button class="tree-branch-button">+</button>
				</div>
			</li>
			<li class="tree-branch">
				<a href="#" class="tree-branch-link tree-branch-link--404">404</a>
			</li>
		</ul>
	</div>
	<main class="window-main">
		<div class="window-main-header">
			<ol class="breadcrumbs">
				<li class="breadcrumbs-item"><a href="#">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M3.6 3H20.4C20.7314 3 21 3.26863 21 3.6V20.4C21 20.7314 20.7314 21 20.4 21H3.6C3.26863 21 3 20.7314 3 20.4V3.6C3 3.26863 3.26863 3 3.6 3Z" stroke="currentColor" stroke-width="1.5" />
							<path d="M9.75 9.75V21" stroke="currentColor" stroke-width="1.5" />
							<path d="M3 9.75H21" stroke="currentColor" stroke-width="1.5" />
						</svg>Blog</a></li>
				<li class="breadcrumbs-item current"><a href="#">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M4 21.4V2.6C4 2.26863 4.26863 2 4.6 2H16.2515C16.4106 2 16.5632 2.06321 16.6757 2.17574L19.8243 5.32426C19.9368 5.43679 20 5.5894 20 5.74853V21.4C20 21.7314 19.7314 22 19.4 22H4.6C4.26863 22 4 21.7314 4 21.4Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M16 5.4V2.35355C16 2.15829 16.1583 2 16.3536 2C16.4473 2 16.5372 2.03725 16.6036 2.10355L19.8964 5.39645C19.9628 5.46275 20 5.55268 20 5.64645C20 5.84171 19.8417 6 19.6464 6H16.6C16.2686 6 16 5.73137 16 5.4Z" fill="currentColor" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M8 10L16 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M8 18L16 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M8 14L12 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						</svg>

						What web designers can learn from arti...</a></li>
			</ol>
			<div class="publish-actions">
				<div class="publish-info">
					<span>LAST EDITED<br />
						2 minutes ago</span>
				</div>
				<button class="button button--save">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M3 19V5C3 3.89543 3.89543 3 5 3H16.1716C16.702 3 17.2107 3.21071 17.5858 3.58579L20.4142 6.41421C20.7893 6.78929 21 7.29799 21 7.82843V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19Z" stroke="currentColor" stroke-width="1.5" />
						<path d="M8.6 9H15.4C15.7314 9 16 8.73137 16 8.4V3.6C16 3.26863 15.7314 3 15.4 3H8.6C8.26863 3 8 3.26863 8 3.6V8.4C8 8.73137 8.26863 9 8.6 9Z" stroke="currentColor" stroke-width="1.5" />
						<path d="M6 13.6V21H18V13.6C18 13.2686 17.7314 13 17.4 13H6.6C6.26863 13 6 13.2686 6 13.6Z" stroke="currentColor" stroke-width="1.5" />
					</svg>
					Save
				</button>
				<button class="button button--schedule">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M15 4V2M15 4V6M15 4H10.5M3 10V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V10H3Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M3 10V6C3 4.89543 3.89543 4 5 4H7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M7 2V6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M21 10V6C21 4.89543 20.1046 4 19 4H18.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					Schedule
				</button>
				<button class="button button--publish">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="12" cy="12" r="8" stroke="currentColor" stroke-width="1.5" />
						<path d="M17.4995 6.34835C19.7975 5.80967 21.4447 5.87208 21.8376 6.66002C22.5686 8.12616 18.6797 11.5491 13.1515 14.3053C7.62327 17.0616 2.5492 18.1074 1.81821 16.6413C1.4263 15.8553 2.36234 14.5067 4.16701 13.0001" stroke="currentColor" stroke-width="1.5" />
					</svg>
					Publish
				</button>
			</div>
		</div>
		<div class="window-main-body">
			<form class="editor">
				<div class="editor-toolbar">
					<button class="editor-toolbar-item icon">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M5 9.5C8.5 9.5 11.5 9.5 15 9.5C15.1615 9.5 19 9.5 19 13.5C19 18 15.2976 18 15 18C12 18 10 18 7 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M8.5 13C7.13317 11.6332 6.36683 10.8668 5 9.5C6.36683 8.13317 7.13317 7.36683 8.5 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						</svg>

					</button>
					<button class="editor-toolbar-item icon">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M19 9.5C15.5 9.5 12.5 9.5 9 9.5C8.83847 9.5 5 9.5 5 13.5C5 18 8.70237 18 9 18C12 18 14 18 17 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M15.5 13C16.8668 11.6332 17.6332 10.8668 19 9.5C17.6332 8.13317 16.8668 7.36683 15.5 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					<span class="separator"></span>
					<button class="editor-toolbar-item dropdown">
						<span>Paragraph</span>
						<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000" viewBox="0 0 256 256">
							<rect width="256" height="256" fill="none"></rect>
							<polyline points="208 96 128 176 48 96" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
						</svg>
					</button>
					<span class="separator"></span>
					<button class="editor-toolbar-item icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000" viewBox="0 0 256 256">
							<rect width="256" height="256" fill="none"></rect>
							<path d="M64,120h88a40,40,0,0,1,0,80l-88.00586-.00488v-152L140,48a36,36,0,0,1,0,72" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
						</svg>
					</button>
					<button class="editor-toolbar-item icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000" viewBox="0 0 256 256">
							<rect width="256" height="256" fill="none"></rect>
							<line x1="151.99414" y1="55.99512" x2="103.99414" y2="199.99512" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
							<line x1="63.99414" y1="199.99512" x2="143.99414" y2="199.99512" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
							<line x1="111.99414" y1="55.99512" x2="191.99414" y2="55.99512" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
						</svg>

					</button>
					<button class="editor-toolbar-item icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000" viewBox="0 0 256 256">
							<rect width="256" height="256" fill="none"></rect>
							<line x1="40" y1="128" x2="216" y2="128" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
							<g>
								<path d="M76.334,96.00294A25.48209,25.48209,0,0,1,75.11111,88c0-22.09139,21.96094-40,52.88889-40,23.77865,0,42.25677,10.58606,49.529,25.52014" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
								<path d="M72,168c0,22.09139,25.07205,40,56,40s56-17.90861,56-40c0-23.76634-21.62275-32.97043-45.59723-40.00076" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
							</g>
						</svg>

					</button>
					<span class="separator"></span>
					<button class="editor-toolbar-item icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000" viewBox="0 0 256 256">
							<rect width="256" height="256" fill="none"></rect>
							<rect x="40" y="40" width="176" height="176" rx="8" stroke-width="16" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" fill="none"></rect>
							<path d="M215.99982,159.99982l-42.343-42.343a8,8,0,0,0-11.3137,0l-44.6863,44.6863a8,8,0,0,1-11.3137,0l-20.6863-20.6863a8,8,0,0,0-11.3137,0L40,176" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
							<circle cx="100" cy="92" r="12"></circle>
						</svg>
					</button>

					<button class="editor-toolbar-item icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000" viewBox="0 0 256 256">
							<rect width="256" height="256" fill="none"></rect>
							<line x1="94.05511" y1="161.93204" x2="161.93736" y2="94.04979" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
							<path d="M144.96473,178.9102l-28.28427,28.28427a48,48,0,0,1-67.88225-67.88225L77.08248,111.028" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
							<path d="M178.91069,144.96424,207.195,116.68a48,48,0,0,0-67.88225-67.88225L111.02844,77.082" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
						</svg>
					</button>
					<button class="editor-toolbar-item icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000" viewBox="0 0 256 256">
							<rect width="256" height="256" fill="none"></rect>
							<path d="M200,224.00005H55.99219a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8L152,32l56,56v128A8,8,0,0,1,200,224.00005Z" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
							<polyline points="152 32 152 88 208.008 88" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
							<line x1="96" y1="136" x2="160" y2="136" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
							<line x1="96" y1="168" x2="160" y2="168" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
						</svg>
					</button>
					<button class="editor-toolbar-item icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000" viewBox="0 0 256 256">
							<rect width="256" height="256" fill="none"></rect>
							<rect x="44" y="44" width="168" height="168" rx="8" stroke-width="16" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" fill="none"></rect>
							<line x1="128" y1="44" x2="128" y2="212" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
							<line x1="212" y1="128" x2="44" y2="128" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
						</svg>
					</button>
					<button class="editor-toolbar-item icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000" viewBox="0 0 256 256">
							<rect width="256" height="256" fill="none"></rect>
							<path d="M24,60H152a32,32,0,0,1,32,32v96a8,8,0,0,1-8,8H48a32,32,0,0,1-32-32V68A8,8,0,0,1,24,60Z" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
							<polyline points="184 112 240 80 240 176 184 144" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
						</svg>
					</button>
					<span class="separator"></span>
					<button class="editor-toolbar-item icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000" viewBox="0 0 256 256">
							<rect width="256" height="256" fill="none"></rect>
							<polyline points="64 88 16 128 64 168" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
							<polyline points="192 88 240 128 192 168" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
							<line x1="160" y1="40" x2="96" y2="216" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
						</svg>
					</button>
					<button class="editor-toolbar-item icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000" viewBox="0 0 256 256">
							<rect width="256" height="256" fill="none"></rect>
							<path d="M108,144H40a8,8,0,0,1-8-8V72a8,8,0,0,1,8-8h60a8,8,0,0,1,8,8v88a40,40,0,0,1-40,40" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
							<path d="M224,144H156a8,8,0,0,1-8-8V72a8,8,0,0,1,8-8h60a8,8,0,0,1,8,8v88a40,40,0,0,1-40,40" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
						</svg>
					</button>
					<span class="separator"></span>
					<button class="editor-toolbar-item icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000" viewBox="0 0 256 256">
							<rect width="256" height="256" fill="none"></rect>
							<line x1="88" y1="64" x2="216" y2="64" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
							<line x1="88.00614" y1="128" x2="216" y2="128" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
							<line x1="88.00614" y1="192" x2="216" y2="192" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
							<circle cx="44" cy="64" r="12"></circle>
							<circle cx="44" cy="128" r="12"></circle>
							<circle cx="44" cy="192" r="12"></circle>
						</svg>
					</button>
					<button class="editor-toolbar-item icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000" viewBox="0 0 256 256">
							<rect width="256" height="256" fill="none"></rect>
							<line x1="104" y1="128" x2="215.99902" y2="128" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
							<line x1="104" y1="64" x2="215.99902" y2="64" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
							<line x1="103.99902" y1="192" x2="215.99902" y2="192" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
							<polyline points="40 60 56 52 56 107.994" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
							<path d="M41.10018,152.55059A14.00226,14.00226,0,1,1,65.609,165.82752L40,200H68" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
						</svg>
					</button>
					<span class="separator"></span>
					<button class="editor-toolbar-item icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000" viewBox="0 0 256 256">
							<rect width="256" height="256" fill="none"></rect>
							<line x1="40" y1="68" x2="216" y2="68" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
							<line x1="40" y1="108" x2="168" y2="108" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
							<line x1="40.00614" y1="148" x2="216" y2="148" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
							<line x1="40.00614" y1="188" x2="168" y2="188" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
						</svg>
					</button>
					<button class="editor-toolbar-item icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000" viewBox="0 0 256 256">
							<rect width="256" height="256" fill="none"></rect>
							<line x1="40" y1="68" x2="216" y2="68" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
							<line x1="64" y1="108" x2="192" y2="108" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
							<line x1="40.00307" y1="148" x2="215.99693" y2="148" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
							<line x1="64.00307" y1="188" x2="191.99693" y2="188" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
						</svg>
					</button>
					<button class="editor-toolbar-item icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000" viewBox="0 0 256 256">
							<rect width="256" height="256" fill="none"></rect>
							<line x1="40" y1="68" x2="216" y2="68" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
							<line x1="88" y1="108" x2="216" y2="108" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
							<line x1="40.00614" y1="148" x2="216" y2="148" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
							<line x1="88.00614" y1="188" x2="216" y2="188" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
						</svg>
					</button>
				</div>
				<div class="editor-textarea">
					<div class="editor-textarea-editable" contenteditable spellcheck="false">
						<h1>What web designers can learn from artists - from Van Gogh to Lloyd Wright</h1>
						<p class="leading">Art in it's classic form, like painting and sculpting, is not
							that different to the creations of web and UI designers. Even though their
							purpose is different - as the goal of great web design is to enhance user
							experiences - there's still a lot to learn from the former.</p>
						<p>By now you may have been intruiged to read this article, but I'm sorry to inform
							you that this is not some 'Medium-like-inspirational-design-take-kind-of-story'.
							This is just an article full of gibberish, written in a way that makes it look
							<img src="https://assets.codepen.io/285131/painting.jpg" />like a real article, but it's not. It's sole
							purpose is to look good in this
							CodePen demo, this CMS design concept. The image has also nothing to do with the
							accompanied text, it's just a filler like everything else. You see, I feel it's
							sometimes better to use 'real' text rather than 'Lorem Ipsum'. However, this
							text is not <em>real</em>. Well, of course it's <strong>real</strong>, since
							someone has written it (me), but it's not a real blog post.
						</p>
						<p>For designers it's important, or even necessary to, use real data instead of
							'Lorem ipsum'. Sure, the latin excerpt is popular, but the problem is that you
							don't understand what it says there. This is not just a problem for articles,
							but for UI in general. How do you think the site structure on the left would
							look like if I replaced 'Product' and 'Pricing' with 'Lorem Ipsum' and 'Dolor
							Sit'? Doesn't give you the right impression, does it? And I know what you're
							thinking: 'Product' and 'Pricing' isn't real data either, it's just made up
							names of pages. That's true - but it's still better than the alternative. Also,
							after all, this is just a pen, and this design is just a concept. But it looks
							legit, right?</p>
						<h2>Why 'Form Follows Function' is a valid rule to live by in web design</h2>
						<p>Use text that your client provides. Give your UI good labels, labels that are actually going to be used in production. There's several reasons as to why it's better to use real data instead of 'Lorem Ipsum':
						</p>

						<ul>
							<li>It's more readable (obviously)</li>
							<li>You stress test your designs, meaning that you'll become more aware of errors caused by line-breaks and text overflow.</li>
							<li>It's more fun and rewarding, since you've designed something that looks <em>real</em></li>
						</ul>
						<p>
							Don't read to much into this, though. This article was never meant to convince you to stop using 'Lorem Ipsum', this is in fact just an article full of gibberish.</p>

						<h2>More filler content</h2>
						<p>I could've easily written about how you make potato salad without potatoes, or written a fairytale about potato salad princes and potato salad princesses, instead.
						</p>

						<p>I did not. At least I saved the potato salad part of this article to a section further down, so far down that you'll perhaps have to scroll to read it (depending on your screen size), hopefully saving you from thinking "Why does he mention potato salad in an article about web design?" before you've taken a look at the CMS design concept. Which again is the whole purpose of this pen.</p>
						<p>If you liked this pen I suggest you should check out <a href="https://codepen.io/havardob" contenteditable="false" target="_blank">some of my other pens</a>.</p>
					</div>
				</div>
			</form>
			<div class="window-main-body-right">
				<section class="settings-section">
					<h2 class="section-title">Settings</h2>

					<div class="input-group">
						<label class="input-label">Slug</label>
						<input type="text" class="input-field" value="what-web-designers-can-learn-from-artists-from-van-gogh-to-lloyd-wright" />
					</div>
					<div class="input-group">
						<label class="input-label">Full URL</label>
						<a href="#" class="input-url">https://bold.io/blog/what-web-designers-can-learn-from-artists-from-van-gogh-to-lloyd-wright</a>
					</div>
				</section>
				<section class="settings-section">
					<h2 class="section-title">Social</h2>
					<div class="input-group">
						<label class="input-label">Featured Image</label>
						<button class="input-image">
							<span class="input-image-wrapper">
								<img src="https://assets.codepen.io/285131/painting.jpg" />
							</span>
							<span class="input-image-meta">
								<span class="input-image-meta-title">fb-painting.jpg</span>
								<span class="input-image-meta-action">Change</span>
							</span>
						</button>
					</div>
					<div class="input-group">
						<label class="input-label">Meta Title</label>
						<input type="text" class="input-field" value="What web designers can learn from artists - from Van Gogh to Lloyd Wright" />
					</div>
					<div class="input-group">
						<label class="input-label">Meta Description</label>
						<textarea class="input-field input-field--textarea">Art in it's classic form, like painting and sculpting, is not that different to the creations of web and UI designers. Even though their purpose is different - as the goal of great web design is to enhance user experiences - there's still a lot to learn from the former.</textarea>
					</div>
				</section>
				<section class="settings-section">
					<h2 class="section-title">Byline</h2>
					<div class="input-group">
						<label class="input-checkbox">
							<input type="checkbox" class="input-checkbox-box" checked />
							<span class="input-checkbox-toggle"></span>
							<span class="input-checkbox-label">Show author</span>
						</label>
						<label class="input-checkbox">
							<input type="checkbox" class="input-checkbox-box" checked />
							<span class="input-checkbox-toggle"></span>
							<span class="input-checkbox-label">Date published</span>
						</label>
						<label class="input-checkbox">
							<input type="checkbox" class="input-checkbox-box" />
							<span class="input-checkbox-toggle"></span>
							<span class="input-checkbox-label">Date edited</span>
						</label>
					</div>
				</section>
				<section class="settings-section">
					<h2 class="section-title">Actions</h2>
					<button class="button button--delete">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M19 11V20.4C19 20.7314 18.7314 21 18.4 21H5.6C5.26863 21 5 20.7314 5 20.4V11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M10 17V11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M14 17V11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M21 7L16 7M3 7L8 7M8 7V3.6C8 3.26863 8.26863 3 8.6 3L15.4 3C15.7314 3 16 3.26863 16 3.6V7M8 7L16 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
						Move to trash
					</button>
				</section>
			</div>
		</div>
	</main>
</div>
</body>
</html>