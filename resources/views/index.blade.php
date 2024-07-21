<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- STYLE CSS-->
    <link rel="stylesheet" href="{{ url('public/style.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- TITLE-->
    <title>{{ $meta_title }}</title>
</head>
<body>
    <!--HEADER-->
    <header class="header">
        <a href="{{ route('home') }}" class="logo">rzzrian•</a>
        
        <i class="fa-solid fa-bars" id="menu-icon"></i>

        <nav class="navbar">  
            <a href="{{ route('home') }}" data-target="home">Home</a>
            <a href="{{ route('about') }}" data-target="about">About</a>
            <a href="{{ route('services') }}" data-target="services">Services</a>
            <a href="{{ route('portfolio') }}" data-target="portfolio">Portfolio</a>
            <a href="{{ route('contact') }}" data-target="contact">Contacts</a>
        </nav>
    </header>

    <!--HOME SECTION-->
    <div class="container">
        @yield('content')
    </div>
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hi, My name is</h3>
            <h1>{{ @$getrecord[0]->your_name }}</h1>
            <h3>And i'm a <span class="multiple-text"></span> </h3>
            <p>{{ @$getrecord[0]->description }}</p>
            <div class="social-media">
                <a href="{{ @$getrecord[0]->facebook }}"><i class="fa-brands fa-facebook"></i></a>
                <a href="{{ @$getrecord[0]->twitter }}"><i class="fa-brands fa-twitter"></i></a>
                <a href="{{ @$getrecord[0]->instagram }}"><i class="fa-brands fa-instagram"></i></a>
                <a href="{{ @$getrecord[0]->linkedin }}"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <a href="{{ @$getrecord[0]->whatsapp }}" class="btn">Hire Me</a>
        </div>
        <div class="home-img">
            <img src="{{ url('public/img/' .@$getrecord[0]->profile) }}" alt="">
        </div>
    </section>

    <!--ABOUT SECTION-->
    @include('about')

    <!--SERVICES SECTION-->
    @include('services')

    <!--PORTFOLIO SECTION-->
    @include('portfolio')

    <!--CONTACTS SECTION-->
    @include('contact')
    
    <!--FOOTER SECTION--> 
    <footer class="footer">
        <div class="footer-text">
            <p>&copy; UAS - RZZRIAN- 2203421019 - BM4B</p>
        </div>
        
        <div class="footer-iconTop">
            <a href="#home"><i class="fa-solid fa-angle-up"></i></a>
        </div>
    </footer>

    <!--SCRIPT JS and LIBRARY-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="{{ url('public/script.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.navbar a').forEach(function(anchor) {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('data-target');
                    const targetElement = document.getElementById(targetId);
    </script>
</body>
</html>
