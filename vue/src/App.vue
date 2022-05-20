<template>
  <EcoHeader />
  <EcoMain />
</template>

<script>
import EcoHeader from '@/components/EcoHeader.vue';
import EcoMain from '@/components/EcoMain.vue'

export default {
  name: 'App',
  components: {
    EcoHeader,
    EcoMain
  }
}
</script>

<style>
/*Обнуление*/
* {
	padding: 0;
	margin: 0;
	border: 0;
}
*,
*:before,
*:after {
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}
:focus,
:active {
	outline: none;
}
a:focus,
a:active {
	outline: none;
}
nav,
footer,
header,
aside {
	display: block;
}
html,
body {
	font-family: inherit;
	height: 100%;
	width: 100%;
	font-size: 100%;
	line-height: 1;
	font-size: 14px;
	-ms-text-size-adjust: 100%;
	-moz-text-size-adjust: 100%;
	-webkit-text-size-adjust: 100%;
}
input,
button,
textarea {
	font-family: inherit;
}
textarea {
	resize: none;
}
input::-ms-clear {
	display: none;
}
button {
	cursor: pointer;
}
button::-moz-focus-inner {
	padding: 0;
	border: 0;
}
a,
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
ul li {
	list-style: none;
}
img {
	vertical-align: top;
}
h1,
h2,
h3,
h4,
h5,
h6 {
	font-size: inherit;
	font-weight: 400;
}




html, body {
    font-family: 'Raleway',Arial,sans-serif;
}
.btn {
    background: #ffe141;

    border-radius: 10px;

    box-shadow: 2px 3px 5px 1px rgba(41, 41, 41, 0.2);

    justify-content: center;

    color: #1f1f1f;

    font-size: 12px;
}




.container {
    padding: 0 5%;
}
</style>
