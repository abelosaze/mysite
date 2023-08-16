<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Daily Contribution App</title>
  <meta name="title" content="Daily Contribution App">
  <meta name="description" content="This is a education html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom font link
  -->
  <link rel="stylesheet" href="./assets/font/font.css">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-bg.png">
  <style>
    /*-----------------------------------*\
  #main.css
\*-----------------------------------*/

/**
 * copyright 2022 codewithsadee
 */





/*-----------------------------------*\
  #CUSTOM PROPERTY
\*-----------------------------------*/

:root {

/**
 * colors
 */

--selective-yellow: hsl(42, 100%, 56%);
--roman-silver: hsl(240, 6%, 51%);
--roman-silver_10: hsla(240, 6%, 51%, 0.1);
--light-coral: hsl(241, 91%, 56%);
--oxford-blue: hsl(224, 53%, 10%);
--light-gray: hsl(0, 0%, 80%);
--keppei: hsl(173, 74%, 24%);
--white: hsl(0, 2%, 77%);
--black: hsl(0, 0%, 0%);
--black_10: hsla(0, 0%, 0%, 0.1);

/**
 * typography
 */

--ff-gilroy: "Gilroy", sans-serif;

--headline-lg: 4.8rem;
--headline-md: 3rem;
--headline-sm: 2.4rem;
--title-lg: 2.2rem;
--title-md: 2rem;
--title-sm: 1.8rem;

--fw-500: 500;
--fw-600: 600;
--fw-700: 700;

/**
 * spacing
 */

--section-padding: 56px;

/**
 * box shadow
 */

--shadow-1: 0px 35px 65px -10px hsla(0, 0%, 0%, 0.05);
--shadow-2: 0 10px 40px hsla(0, 0%, 0%, 0.06);

/**
 * border radius
 */

--radius-4: 4px;
--radius-6: 6px;
--radius-8: 8px;
--radius-circle: 50%;

/**
 * transition
 */

--transition: 0.25s ease;
--cubic-in: cubic-bezier(0.51, 0.03, 0.64, 0.28);
--cubic-out: cubic-bezier(0.05, 0.83, 0.52, 0.97);

}





/*-----------------------------------*\
#RESET
\*-----------------------------------*/

*,
*::before,
*::after {
margin: 0;
padding: 0;
box-sizing: border-box;
}

li { list-style: none; }

a,
img,
span,
button,
ion-icon { display: block; }

a {
text-decoration: none;
color: inherit;
}

img { height: auto; }

button {
background: none;
border: none;
font: inherit;
cursor: pointer;
}

html {
font-family: var(--ff-gilroy);
font-size: 10px;
scroll-behavior: smooth;
}

body {
background-color: var(--white);
color: var(--roman-silver);
font-size: 1.6rem;
line-height: 1.5;
overflow: hidden;
}

body.loaded { overflow: visible; }

body.nav-active { overflow: hidden; }





/*-----------------------------------*\
#REUSED STYLE
\*-----------------------------------*/

.container { padding-inline: 16px; }

.headline-lg,
.headline-md,
.headline-sm,
.title-lg {
color: var(--oxford-blue);
font-weight: var(--fw-700);
}

.headline-lg {
font-size: var(--headline-lg);
line-height: 1.3;
}

.headline-md {
font-size: var(--headline-md);
line-height: 1.2;
}

.headline-sm { font-size: var(--headline-sm); }

.title-lg {
font-size: var(--title-lg);
line-height: 1.4;
}

.title-md { font-size: var(--title-md); }

.title-sm {
font-size: var(--title-sm);
font-weight: var(--fw-500);
}

.section { padding-block: var(--section-padding); }

.has-bg-image {
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}

.has-before,
.has-after {
position: relative;
z-index: 1;
}

.has-before::before,
.has-after::after {
content: "";
position: absolute;
}

.btn {
--bg: var(--light-coral);
max-width: max-content;
background-color: var(--bg);
color: var(--white);
font-weight: var(--fw-500);
padding: 12px 24px;
border-radius: var(--radius-6);
transition: var(--transition);
outline: none;
}

.btn-secondary { --bg: var(--oxford-blue); }

:is(.btn-primary, .btn-secondary):is(:hover, :focus-visible) {
box-shadow: 0 0 0 2px var(--white), 0 0 0 5px var(--bg);
}

.btn-tertiary {
--bg: var(--white);
color: var(--oxford-blue);
font-weight: var(--fw-600);
}

:is(.headline-lg, .headline-md) .span {
color: var(--light-coral);
display: inline;
}

.section-subtitle {
font-weight: var(--fw-600);
color: var(--keppei);
margin-block-end: 4px;
}

.text-center { text-align: center; }

.section-title { margin-block-end: 24px; }

.headline-md .has-after { padding-block-end: 8px; }

.headline-md .has-after::after {
background-image: url("../images/line-shape.svg");
width: 100%;
height: 100%;
top: 0;
left: 0;
background-repeat: no-repeat;
background-position: center bottom;
background-size: contain;
z-index: -1;
}

.grid-list {
display: grid;
gap: 28px;
}

.card {
position: relative;
background-color: var(--white);
padding: 24px;
border-radius: var(--radius-8);
transition: var(--transition);
}

.card:is(:hover, :focus-within) { box-shadow: var(--shadow-1); }

.layer-link {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}

.w-100 { width: 100%; }

.img-cover {
width: 100%;
height: 100%;
object-fit: cover;
}





/*-----------------------------------*\
#PRELOADER
\*-----------------------------------*/

.preloader {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100vh;
background-color: var(--light-green);
display: grid;
place-items: center;
z-index: 6;
transition: var(--transition);
}

.preloader.loaded {
visibility: hidden;
opacity: 0;
}

.preloader .circle {
width: 50px;
height: 50px;
border-radius: var(--radius-circle);
border: 4px solid var(--white);
border-block-start-color: transparent;
animation: rotate360 1s ease infinite;
}

@keyframes rotate360 {
0% { transform: rotate(0); }
100% { transform: rotate(1turn); }
}





/*-----------------------------------*\
#HEADER
\*-----------------------------------*/

.header .btn { display: none; }

.header {
position: absolute;
top: 0;
left: 0;
width: 100%;
padding-block: 32px;
z-index: 4;
}

.header.active {
background-color: rgb(204, 200, 200);
position: fixed;
box-shadow: var(--shadow-2);
animation: headerActive 0.5s ease forwards;
}

@keyframes headerActive {
0% { transform: translateY(-100%); }
100% { transform: translateY(0); }
}

.header .container,
.navbar-top {
display: flex;
justify-content: space-between;
align-items: center;
}

.nav-open-btn,
.nav-close-btn { font-size: 32px; }

.navbar {
position: fixed;
top: 0;
left: -320px;
max-width: 320px;
width: 100%;
background-color: var(--white);
height: 100vh;
padding: 40px 16px;
z-index: 2;
transition: 0.25s var(--cubic-in);
visibility: hidden;
}

.navbar.active {
transition: 0.5s var(--cubic-out);
visibility: visible;
transform: translateX(320px);
}

.navbar-top { margin-block-end: 34px; }

.nav-close-btn ion-icon { --ionicon-stroke-width: 35px; }

.navbar-item:not(:last-child) { border-block-end: 1px solid var(--black_10); }

.navbar-link {
padding-block: 8px;
transition: var(--transition);
}

.navbar-link:is(:hover, :focus-visible) { color: var(--oxford-blue); }

.overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100vh;
background-color: var(--black);
opacity: 0;
visibility: hidden;
transition: var(--transition);
}

.overlay.active {
opacity: 0.6;
visibility: visible;
}





/*-----------------------------------*\
#HERO
\*-----------------------------------*/

.hero-banner { display: none; }

.hero { padding-block-start: calc(var(--pt, 96px) + var(--section-padding)); }

.hero .title-md {
font-weight: var(--fw-500);
padding-inline-start: 16px;
margin-block: 24px 44px;
}

.hero .title-md::before {
top: 0;
left: 0;
width: 2px;
height: 100%;
background-color: var(--light-coral);
}

.hero .btn-group {
display: flex;
flex-wrap: wrap;
gap: 12px;
}





/*-----------------------------------*\
#CATEGORY
\*-----------------------------------*/

.category .grid-list { padding-block: 40px 52px; }

.category-card {
display: flex;
align-items: flex-start;
gap: 20px;
border-inline-start: 4px solid transparent;
}

.category-card:is(:hover, :focus-within) { border-color: var(--light-coral); }

.category-card .title-sm { margin-block-start: 4px; }

.category .btn { margin-inline: auto; }





/*-----------------------------------*\
#ABOUT
\*-----------------------------------*/

.about .container {
display: grid;
gap: 30px;
}

.about .section-text,
.progress-list li:not(:last-child) { margin-block-end: 32px; }

.progress-label-wrapper {
display: flex;
justify-content: space-between;
margin-block-end: 8px;
}

.progress-label-wrapper .title-sm {
color: var(--oxford-blue);
font-weight: var(-fw-600);
}

.progress {
background-color: var(--roman-silver_10);
height: 6px;
border-radius: var(--radius-6);
}

.progress-fill {
height: 100%;
border-radius: inherit;
}

.progress-fill.red {
background-color: var(--light-coral);
width: 86%;
}

.progress-fill.green {
background-color: var(--keppei);
width: 67%;
}

.progress-fill.yellow {
background-color: var(--selective-yellow);
width: 95%;
}

.progress-fill.blue {
background-color: var(--selective-blue);
width: 90%;
}





/*-----------------------------------*\
#COURSE
\*-----------------------------------*/

.course .grid-list { padding-block: 20px 44px; }

.course-card {
border-block-end: 4px solid transparent;
display: flex;
flex-direction: column;
gap: 24px;
}

.course-card:is(:hover, :focus-within) { border-color: var(--light-coral); }

.course-card .card-banner {
height: 160px;
background-color: var(--light-gray);
overflow: hidden;
border-radius: var(--radius-4);
}

.course-card :is(.wrapper, .rating-wrapper) {
display: flex;
align-items: center;
}

.course-card .wrapper {
justify-content: space-between;
gap: 16px;
}

.course-card .card-price { color: var(--light-coral); }

.course-card .rating-wrapper { gap: 4px; }

.course-card .card-title { margin-block: 8px 16px; }

.course-card .card-meta { justify-content: flex-start; }

.course-card .card-meta .title-sm {
display: flex;
gap: 8px;
}

.course .btn { margin-inline: auto; }





/*-----------------------------------*\
#CTA
\*-----------------------------------*/

.cta {
background-color: var(--keppei);
padding: 48px 24px;
text-align: center;
}

.cta .headline-md { color: var(--white); }

.cta .btn { margin-inline: auto; }





/*-----------------------------------*\
#FOOTER
\*-----------------------------------*/

.footer-top .container {
display: grid;
gap: 24px;
}

.footer-text { margin-block: 40px 32px; }

.social-list {
display: flex;
gap: 16px;
}

.footer-list-title { margin-block-end: 32px; }

.footer-link { margin-block-start: 16px; }

.footer-top .grid-list {
grid-template-columns: repeat(3, 1fr);
gap: 16px;
}

.footer-top .grid-list .img-cover { border-radius: var(--radius-6); }

.footer-bottom {
padding-block: 32px;
text-align: center;
border-block-start: 1px solid var(--black_10);
}

.copyright { font-weight: var(--fw-500); }





/*-----------------------------------*\
#CONTAINER QUERIES
\*-----------------------------------*/

/**
* container query for card
*/

.card-container { container-type: inline-size; }

@container (min-width: 500px) {

.course-card { flex-direction: row; }

.course-card .card-banner {
  width: 160px;
  flex-shrink: 0;
}

}





/*-----------------------------------*\
#MEDIA QUERIES
\*-----------------------------------*/

/**
* responsive for large than 575px screen
*/

@media (min-width: 575px) {

/**
 * REUSED STYLE
 */

.container {
  max-width: 640px;
  width: 100%;
  margin-inline: auto;
}

.card { padding: 32px; }



/**
 * FOOTER
 */

.footer-top .container { grid-template-columns: 1fr 1fr; }

}





/**
* responsive for large than 768px screen
*/

@media (min-width: 768px) {

/**
 * CUSTOM PROPERTY
 */

:root {
  
  /**
   * typography
   */

  --headline-lg: 6rem;
  --headline-md: 3.8rem;

  /**
   * spacing
   */

  --section-padding: 80px;

}



/**
 * REUSED STYLE
 */

.container { max-width: 768px; }

.grid-list { grid-template-columns: 1fr 1fr; }



/**
 * CTA
 */

.cta { padding-block: 78px; }

}





/**
* responsive for large than 992px screen
*/

@media (min-width: 992px) {

:root {

  /**
   * typography
   */

  --headline-lg: 7.7rem;
  --headline-md: 4.4rem;

  /**
   * spacing
   */

  --section-padding: 120px;

}



/**
 * REUSED STYLE
 */

.container { max-width: 1024px; }

.btn {
  padding: 16px 32px;
  font-size: 1.8rem;
}



/**
 * HEADER
 */

.nav-open-btn,
.overlay,
.navbar-top { display: none; }

.navbar,
.navbar.active {
  all: unset;
  display: block;
}

.navbar-list {
  display: flex;
  gap: 10px;
}

.navbar-item:not(:last-child) { border-block-end: none; }

.navbar-link { padding: 8px 16px; }

.header .btn {
  display: block;
  box-shadow: none;
}



/**
 * CATEGORY
 */

.grid-list { grid-template-columns: repeat(3, 1fr); }



/**
 * ABOUT
 */

.about .container { grid-template-columns: 1fr 1fr; }



/**
 * COURSE
 */

.course .grid-list {
  grid-template-columns: 1fr 1fr;
  margin-block: 40px 48px;
}



/**
 * FOOTER
 */

.footer-top .container { grid-template-columns: 1fr 0.5fr 0.5fr 0.8fr; }

.footer-brand { padding-inline-end: 24px; }

}





/**
* responsive for large than 1200px screen
*/

@media (min-width: 1200px) {

/**
 * REUSED STYE
 */

.container { max-width: 1170px; }



/**
 * HERO
 */

.hero-banner {
  display: block;
  max-width: max-content;
  margin-inline-end: -14%;
}

.hero .container {
  display: grid;
  grid-template-columns: 1fr 0.9fr;
  gap: 48px;
}

.hero .title-md { margin-block: 40px 60px; }



/**
 * ABOUT
 */

.about .container { grid-template-columns: 1fr 0.7fr; }



/**
 * CTA
 */

.cta { text-align: left; }

.cta .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.cta .headline-md { max-width: 22ch; }

.cta .btn { margin-inline: 0; }



/**
 * FOOTER
 */

.footer .container { gap: 48px; }

}

body{
  background-color:white;
}

.preloader{
  background-color:rgb(5, 86, 92);
}

.circle{
  background-color:rgb(16, 81, 97);
}

.navbar{
  color:black;
  font-size:70%;
}

ul{
  color:oangered;
  font-size:70%;
}
  </style>

</head>

<body>

  <!-- 
    - PRELOADER
  -->

  <div class="preloader" data-preloader>
    <div class="circle" data-circle></div>
  </div>





  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMMDDl3fCvuYbhwqWnZ1xPbP59-Ar1ILtIc8N57bIrRobCNjGixsC5Jr12KBgnF9LtBKA&usqp=CAU"" width="145" height="27" alt="Daily Contribution App">
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" width="145" height="27" alt="Daily Contribution App">
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#" class="navbar-link title-sm" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link title-sm" data-nav-link>About Us</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link title-sm" data-nav-link>Our Services</a>
          </li>

          <li class="navbar-item">
            <a href="/create" class="navbar-link title-sm" data-nav-link>Blog</a>
          </li>

          <li class="navbar-item">
            <a href="/contact" class="navbar-link title-sm" data-nav-link>Contact Us</a>
          </li>

        </ul>

      </nav>

      <a href="/register" class="btn btn-secondary">Create Account</a>
      <a href="/login" class="btn btn-secondary">Login</a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

      <div class="overlay" data-overlay data-nav-toggler></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" aria-labelledby="hero-label"
        style="background-image: url('./assets/images/hero-bg.png')">
        <div class="container">

          <div class="hero-content">

            <h1 class="headline-md" id="hero-label">
              Need a fast way to save money? <span class="span">Daily Contribution App </span>is here to save you the stress of going to bank, save your money with us!
            </h1>

            <p class="title-md has-before">
              We have a stable and reliable network, you can Deposit and Withdraw without having any issues with networks, our services are trusted globally. We also have have many affiliate Banks, including First Bank, Access Bank and many more.
            </p>

            <div class="btn-group">
              <a href="#" class="btn btn-primary">Create account with us today</a>

              <a href="#" class="btn btn-secondary">Get Started Now</a>
            </div>

          </div>

          <figure class="hero-banner">
            <img src="https://thumbs.dreamstime.com/z/excited-mature-man-holding-money-laptop-computer-excited-mature-man-holding-money-laptop-computer-isolated-white-220277839.jpg?w=992" width="590" height="620" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>

      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-labelledby="about-label">
        <div class="container">

          <figure class="about-banner">
            <img src="https://thumbs.dreamstime.com/z/close-up-african-business-man-holding-mobile-phone-donating-money-online-against-wooden-table-african-business-man-holding-124517396.jpg?w=992" width="775" height="685" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

          <div class="about-content">

            <p class="title-sm section-subtitle" id="about-label">About Daily Contribution App</p>

            <h2 class="headline-md section-title">
              We Provide The Best Online <span class="span has-after">Transactions</span>
            </h2>

            <p class="title-sm section-text">
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour.
            </p>
          </div>
        </div>
      </section>

      <section class="section course has-bg-image" aria-labelledby="course-label"
        style="background-image: url('./assets/images/course-bg.png')">
        <div class="container">

          <p class="title-sm section-subtitle text-center">Featured Transactions</p>

          <h2 class="headline-md section-title text-center" id="course-label">
            Choose Unlimited <span class="span has-after">Transactions</span>
          </h2>

          <ul class="grid-list">

            <li class="card-container">
              <div class="card course-card">

                <figure class="card-banner">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRa0ZyFjC-YCU9Hq03O4OtG7uQYoKOuIgfh7_qEQVyr1w&s" width="370" height="248" loading="lazy"
                    alt="You can also convert your money from Naira to Euro with our App">
                </figure>

                <div class="card-content">

                  <div class="wrapper">

                    <p class="title-lg card-price"> Naira to Euro</p>

                    <div class="rating-wrapper">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                    </div>

                  </div>

                  <h3 class="title-lg card-title">
                    You can also convert your money from Naira to Euro with our App
                  </h3>

                  <div class="card-meta wrapper">

                    <p class="title-sm">
                      <img src="./assets/images/file-outline.svg" width="20" height="20" loading="lazy" alt="">
                    </p>

                   
                  </div>

                </div>

                <a href="#" class="layer-link"
                  aria-label="Course Details, Basic Fundamentals of Interior & Graphics Design"></a>

              </div>
            </li>

            <li class="card-container">
              <div class="card course-card">

                <figure class="card-banner">
                  <img src="data:image/jpeg;base64,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" width="370" height="248" loading="lazy"
                    alt="Increasing Engagement with Instagram & Facebook" class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="wrapper">

                    <p class="title-lg card-price">Naira to Dollar</p>

                    <div class="rating-wrapper">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                    </div>

                  </div>

                  <h3 class="title-lg card-title">
                    Convert from Naira to Dollar
                  </h3>

                  <div class="card-meta wrapper">

                    <p class="title-sm">
                      
                    
                    </p>

                    <p class="title-sm">
                  

                      
                    </p>

                  </div>

                </div>

                <a href="#" class="layer-link"
                  aria-label="Course Details, Increasing Engagement with Instagram & Facebook"></a>

              </div>
            </li>

            <li class="card-container">
              <div class="card course-card">

                <figure class="card-banner">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSx05YpCtdbbjD_ediXF77byLm2TNcWwy9XyGABHAsvTw&s" width="370" height="248" loading="lazy"
                    alt="Introduction to Color Theory & Basic UI/UX" class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="wrapper">

                    <p class="title-lg card-price">Convert to Pounds</p>

                    <div class="rating-wrapper">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                    </div>

                  </div>

                  <h3 class="title-lg card-title">
                    Convert your money to Pounds with our App
                  </h3>

                  <div class="card-meta wrapper">

                    <p class="title-sm">
                     
                      
                    </p>

                    <p class="title-sm">
                     
                    </p>

                  </div>

                </div>

                <a href="#" class="layer-link"
                  aria-label="Course Details, Introduction to Color Theory & Basic UI/UX"></a>

              </div>
            </li>

            <li class="card-container">
              <div class="card course-card">

                <figure class="card-banner">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi9va5-GRZzvydCgIT4q44t-fVTQha3W6vyw&usqp=CAU" width="370" height="248" loading="lazy"
                    alt="Financial Security Thinking and Principles Theory" class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="wrapper">

                    <p class="title-lg card-price">Receive Money</p>

                  </div>

                  <h3 class="title-lg card-title">
                    You can also receive money from any International Country with our App
                  </h3>

                  <div class="card-meta wrapper">

                    <p class="title-sm">
                      
                    </p>

                    <p class="title-sm">
                      
                     
                    </p>

                  </div>
        </div>
      </section>

      <section class="cta" aria-labelledby="cta-label">
        <div class="container">

          <h2 class="headline-md section-title" id="cta-label">
            Transact and save money for Tomorrow!
          </h2>

          <a href="#" class="btn btn-tertiary">Create an account with us today</a>

        </div>
      </section>

    </article>
  </main>

  <!-- 
    - #FOOTER
  -->

  <footer class="footer has-bg-image" style="background-image: url('./assets/images/footer-bg.png')">

    <div class="section footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="https://thumbs.dreamstime.com/z/close-up-african-business-man-holding-mobile-phone-donating-money-online-against-wooden-table-african-business-man-holding-124517396.jpg?w=992" width="145" height="27" alt="Daily Contribution home">
          </a>

          <p class="title-sm footer-text">
            Lorem ipsum amet, consectetur adipiscing elit. <br> Suspendis varius enim eros elementum tristique. Duis cursus.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <img src="data:image/jpeg;base64,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" width="40" height="40" loading="lazy" alt="facebook">
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAMAAAAOusbgAAAAYFBMVEX///8dofIAnPIAmvEAmPESn/L7/v/p9f7E4/sAlvHv+P7z+v6t2Pmg0vnU6/zI5fsupvO83/rd7/03qfNftvVzvvZCrPOUzPiGxveAw/fZ6vxPsfRpu/UAkfCPyfjP5/unYIiCAAADEUlEQVRoge2Z7RZjMBBAZWLQEgSlluX933Kjut1+RMLQPXv25P5VbieZMUl4nsPhcDgcDofD4XA4/nfiIhGNkEX8d7XZhXEOAJznbfp6KfyiNqo5IptBPHVP6ihPl+8zPPG84kdBz39b727/Ol+Jk/JUUbxxvuK2uAT2DlSBF8oeAYEUsARobb85l/jhVUHXNQN1Aa4Ur9cjs5qrz3jnqZ7+D3SkJA/Y9J/NZsG13ru9nFI63pzXxe1ufjH8JGS6gf4903XoBaGoN4uj+aHQLed2qx/oOd62iIYOfo5bvV5yfyou1uI5NwSs/rIqb95s9j7EargX7o5MMzy7KWkt/4QDpTZo00jP91nLUUf6NI6IV01ldMaRVt6B4vXil5QFJt6TLCgt3oTkfQ8IIRevlREbxcgyovcpux5RX9JgrZjVVK+mWlR55MPDbRnqMjA+3USjyVoEn1Uiu813ZUyuHeKg1j4ZEfjpxLq2Nnmxo4u9FJZjQjQXE5LWALd4vaklW0rVIDZ1FyNJW0yvL6qZuAiYxCqLmkxSIwZBFUcwZRF5rHlEFRfk6b3hr1mi6sl3iZHs9QZb1zN6ydW0c6zpueWtaPQGeLFDHNJnGdkOr3p9WBdVi2Ly62NG159WAdtXtW9mnybOd3rVaPuUoHfl9J1zv12N7JCDgHAwdnxdwKT19AtBkqXjKLS7YAN7ivhOzbe3KHorfsK+P/rgoBnWL/hMUHaIGoqtOY31QadsxuMGDT7ppEdHs8kMxwz0DcHXzzPSt0wasnJ1QSF9qaUjFrmK2i7H3V3pg7PsLfvwCfJe3EgQCtvZwwFNSUdj2c/w73gjzTntC/5XxnmsLdWMQD7zWOacdLZShvKAVvhCUMieWcuYX3bs/58Jkx+KKGlUEYF1jwy5PEarGPMT9zmseWMhtod+a5Hr3pMI1WHt6KGubWq1LOoP106MF+DLM4ycDd/7oCUvzIf3BoGI/FRevxLsE0XSdiq86SPe7Tsex7wa5LH9b4kgLlKZiKYRiRyL8KCidTgcDofD4XA4HA7HP8ovIuMhMJEoakwAAAAASUVORK5CYII=" width="40" height="40" loading="lazy" alt="twitter">
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <img src="data:image/png;base64,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" width="40" height="40" loading="lazy" alt="What's App">
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <img src="data:image/jpeg;base64,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" width="40" height="40" loading="lazy" alt="instagram">
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          
          <li>
            <a href="#" class="title-sm footer-link">Dashboard</a>
          </li>

          <li>
            <a href="#" class="title-sm footer-link">About Us</a>
          </li>

          <li>
            <a href="#" class="title-sm footer-link">Services</a>
          </li>

          <li>
            <a href="#" class="title-sm footer-link">Contact Us</a>
          </li>

          <li>
            <a href="#" class="title-sm footer-link">Affiliate Banks</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <a href="#" class="title-sm footer-link">How to Use our App</a>
          </li>

          <li>
            <a href="#" class="title-sm footer-link">Terms & Condition</a>
          </li>

          <li>
            <a href="#" class="title-sm footer-link">Payment Method</a>
          </li>

          <li>
            <a href="#" class="title-sm footer-link">Privacy Policy</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>

           

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          © Copyright 2023 | Daily Contribution App | All Rights Reserved by codewithAbel
        </p>

      </div>
    </div>

  </footer>

  <!-- 
   - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script>
    'use strict';



/**
 * add eventListener on multiple elements
 */

const addEventOnElements = function (elements, eventType, callback) {
  for (let i = 0, len = elements.length; i < len; i++) {
    elements[i].addEventListener(eventType, callback);
  }
}



/**
 * PRELOADER
 */

const preloader = document.querySelector("[data-preloader]");
const circle = document.querySelector("[data-circle]");

window.addEventListener("load", function () {
  preloader.classList.add("loaded");
  circle.style.animation = "none";
  document.body.classList.add("loaded");
});



/**
 * NAVBAR TOGGLER FOR MOBILE
 */

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
  document.body.classList.toggle("nav-active");
}

addEventOnElements(navTogglers, "click", toggleNavbar);



/**
 * HEADER
 * 
 * add active class on header when window scroll down to 100px
 */

const header = document.querySelector("[data-header]");

const headerActive = function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
  } else {
    header.classList.remove("active");
  }
}

window.addEventListener("scroll", headerActive);
   </script>
</body>

</html>