<!DOCTYPE html>
<html lang="en">


<head>
<title>PROPERTICO</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Oswald:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="assets/fonts/icomoon/style.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/jquery-ui.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
<link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">
<link rel="stylesheet" href="assets/css/aos.css">
<link rel="stylesheet" href="assets/css/style.css">
<script nonce="ea3f7842-b7c0-4573-94b7-fed32e47a75f">(function(w,d){!function(a,b,c,d){a[c]=a[c]||{};a[c].executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz._f=function(e){return async function(){var f=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:f})}};for(const g of["track","set","debug"])a.zaraz[g]=a.zaraz._f(g);a.zaraz.init=()=>{var h=b.getElementsByTagName(d)[0],i=b.createElement(d),j=b.getElementsByTagName("title")[0];j&&(a[c].t=b.getElementsByTagName("title")[0].text);a[c].x=Math.random();a[c].w=a.screen.width;a[c].h=a.screen.height;a[c].j=a.innerHeight;a[c].e=a.innerWidth;a[c].l=a.location.href;a[c].r=b.referrer;a[c].k=a.screen.colorDepth;a[c].n=b.characterSet;a[c].o=(new Date).getTimezoneOffset();if(a.dataLayer)for(const n of Object.entries(Object.entries(dataLayer).reduce(((o,p)=>({...o[1],...p[1]})),{})))zaraz.set(n[0],n[1],{scope:"page"});a[c].q=[];for(;a.zaraz.q.length;){const q=a.zaraz.q.shift();a[c].q.push(q)}i.defer=!0;for(const r of[localStorage,sessionStorage])Object.keys(r||{}).filter((t=>t.startsWith("_zaraz_"))).forEach((s=>{try{a[c]["z_"+s.slice(7)]=JSON.parse(r.getItem(s))}catch{a[c]["z_"+s.slice(7)]=r.getItem(s)}}));i.referrerPolicy="origin";i.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a[c])));h.parentNode.insertBefore(i,h)};["complete","interactive"].includes(b.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<div class="site-wrap">
<div class="site-mobile-menu site-navbar-target">
<div class="site-mobile-menu-header">
<div class="site-mobile-menu-close mt-3">
<span class="icon-close2 js-menu-toggle"></span>
</div>
</div>
<div class="site-mobile-menu-body"></div>
</div>
<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
<div class="container">
<div class="row align-items-center">
<div class="col-6 col-xl-2">
<h1 class="mb-0 site-logo m-0 p-0"><a href="/home" class="mb-0">Propertico</a></h1>
</div>
<div class="col-12 col-md-10 d-none d-xl-block">
<nav class="site-navigation position-relative text-right" role="navigation">
<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
<li><a href="/home" class="nav-link">Home</a></li>
<li><a href="#properties-section" class="nav-link">Properties</a></li>
<li><a href="/agents" class="nav-link">Agents</a></li>
<li><a href="#about-section" class="nav-link">About</a></li>
<li><a href="/contact" class="nav-link">Contact us</a></li>


@guest

<li><a href="/register" class="nav-link">Register</a></li>
<li><a href="/login" class="nav-link">Login</a></li>
@else
<li><a href="/logout" class="nav-link">Logout</a></li>
@endguest
</ul>
</nav>
</div>
<div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>
</div>
</div>
</header>
<div class="site-block-wrap">
<div class="owl-carousel with-dots">
<div class="site-blocks-cover overlay overlay-2" style="background-image: url(assets/images/hero_1.jpg);" data-aos="fade" id="home-section">
<div class="container">
<div class="row align-items-center justify-content-center">
<div class="col-md-6 mt-lg-5 text-center">
<h1 class="text-shadow">Buy &amp; Sell Property Here</h1>
<p class="mb-5 text-shadow">buy your dream house</p>
</div>
</div>
</div>
</div>
<div class="site-blocks-cover overlay overlay-2" style="background-image: url(assets/images/hero_2.jpg);" data-aos="fade" id="home-section">
<div class="container">
<div class="row align-items-center justify-content-center">
<div class="col-md-6 mt-lg-5 text-center">
<h1 class="text-shadow">Find Your Perfect Property For Your Home</h1>
<p class="mb-5 text-shadow">make your dram home</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="site-section" id="properties-section">
    @foreach ($property as $items)

    <div class="container">
        <div class="row large-gutters">
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                <div class="ftco-media-1">
                    <div class="ftco-media-1-inner">
                        <a href="" class="d-inline-block mb-4"><img src="/storage/{{$items->image}}" alt="FImageo" class="img-fluid"></a>
                        <div class="ftco-media-details">
                            <h3>{{$items->name}}</h3>
                            <h3>{{$items->description}}</h3>
                            <p>{{$items->location}}</p>
                            <strong>Starting from :{{$items->price}}</strong>
                            </div>
                            </div>
                            </div>
                            </div>


                            </div>
                            </div>
                            @endforeach

<section class="py-5 bg-primary site-section how-it-works" id="howitworks-section">
<div class="container">
<div class="row mb-5 justify-content-center">
<div class="col-md-7 text-center">
<h2 class="section-title mb-3 text-black">How It Works</h2>
</div>
</div>
<div class="row">
<div class="col-md-4 text-center">
<div class="pr-5 first-step">
<span class="text-black">01.</span>
<span class="custom-icon flaticon-house text-black"></span>
<h3 class="text-black">Find Property.</h3>
<p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</div>
</div>
<div class="col-md-4 text-center">
<div class="pr-5 second-step">
<span class="text-black">02.</span>
<span class="custom-icon flaticon-coin text-black"></span>
<h3 class="text-dark">Buy Property.</h3>
<p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</div>
</div>
<div class="col-md-4 text-center">
<div class="pr-5">
<span class="text-black">03.</span>
<span class="custom-icon flaticon-home text-black"></span>
<h3 class="text-dark">Outstanding Houses.</h3>
<p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</div>
</div>
</div>
</div>
</section>
<section class="site-section" id="about-section">
<div class="container">
<div class="row large-gutters">
<div class="col-lg-6 mb-5">
<div class="owl-carousel slide-one-item with-dots">
<div><img src="assets/images/img_1.jpg" alt="Image" class="img-fluid"></div>
<div><img src="assets/images/img_2.jpg" alt="Image" class="img-fluid"></div>
<div><img src="assets/images/img_3.jpg" alt="Image" class="img-fluid"></div>
</div>
</div>
<div class="col-lg-6 ml-auto">
<h2 class="section-title mb-3">Warehouse Real Estate Template</h2>
<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
<p>Est qui eos quasi ratione nostrum excepturi id recusandae fugit omnis ullam pariatur itaque nisi voluptas impedit Quo suscipit omnis iste velit maxime.</p>
<ul class="list-unstyled ul-check success">
<li>Placeat maxime animi minus</li>
<li>Dolore qui placeat maxime</li>
<li>Consectetur adipisicing</li>
<li>Lorem ipsum dolor</li>
<li>Placeat molestias animi</li>
</ul>
<p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
</div>
</div>
</div>
</section>
<section class="site-section bg-light" id="services-section">
<div class="container">
<div class="row mb-5">
<div class="col-12 text-center">
<h2 class="section-title mb-3">Services</h2>
</div>
</div>
<div class="row align-items-stretch">
<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
<div class="unit-4 d-flex">
<div class="unit-4-icon mr-4"><span class="text-primary flaticon-house"></span></div>
<div>
<h3>Find Property</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
<p><a href="#">Learn More</a></p>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
<div class="unit-4 d-flex">
<div class="unit-4-icon mr-4"><span class="text-primary flaticon-coin"></span></div>
<div>
<h3>Buy Property</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
<p><a href="#">Learn More</a></p>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
<div class="unit-4 d-flex">
<div class="unit-4-icon mr-4"><span class="text-primary flaticon-home"></span></div>
<div>
<h3>Beautiful Home</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
<p><a href="#">Learn More</a></p>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
<div class="unit-4 d-flex">
<div class="unit-4-icon mr-4"><span class="text-primary flaticon-flat"></span></div>
<div>
<h3>Buildings &amp; Lands</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
<p><a href="#">Learn More</a></p>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
<div class="unit-4 d-flex">
<div class="unit-4-icon mr-4"><span class="text-primary flaticon-location"></span></div>
<div>
<h3>Property Locator</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
<p><a href="#">Learn More</a></p>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
<div class="unit-4 d-flex">
<div class="unit-4-icon mr-4"><span class="text-primary flaticon-mobile-phone"></span></div>
<div>
<h3>Mobile Apps</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
<p><a href="#">Learn More</a></p>
</div>
</div>
</div>
</div>
</div>
</section>



<footer class="site-footer">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="row">
<div class="col-md-5">
<h2 class="footer-heading mb-4">About Us</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
</div>
<div class="col-md-3 mx-auto">
<h2 class="footer-heading mb-4">Quick Links</h2>
<ul class="list-unstyled">
<li><a href="/about">About Us</a></li>
<li><a href="/home">Services</a></li>
<li><a href="/home">Testimonials</a></li>
<li><a href="/contact">Contact Us</a></li>
</ul>
</div>
</div>
</div>
<div class="col-md-4">
<div class="mb-4">
<h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
<form action="#" method="post" class="footer-subscribe">
<div class="input-group mb-3">
<input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
<div class="input-group-append">
<button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
</div>
</div>
</form>
</div>
<div class>
<h2 class="footer-heading mb-4">Follow Us</h2>
<a href="/home" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
<a href="/home" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
<a href="/home" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
<a href="/home" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
</div>
</div>
</div>
<div class="row pt-5 mt-5 text-center">
<div class="col-md-12">
<div class="border-top pt-5">
<p class="copyright">

Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved

</p>
</div>
</div>
</div>
</div>
</footer>
</div>
<a href="#top" class="gototop"><span class="icon-angle-double-up"></span></a>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/bootstrap-datepicker.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"8135877b8d2a2e96","version":"2023.8.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>


</html>
