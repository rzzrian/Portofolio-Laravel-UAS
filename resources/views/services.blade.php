<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- STYLE CSS-->
    <link rel="stylesheet" href="{{ url('public/style.css') }}">
    <!-- TITLE-->
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
<section class="services" id="services">
    <h2 class="heading">My <span>Services</span></h2>
    <div class="services-container">
        <div class="services-box">
            <i class="fa-solid fa-code"></i>
            <h3>{{ @$getrecord2[0]->skill1 }}</h3>
            <p> {{ @$getrecord2[0]->skill1desc }}</p>
            <a href="portfolio" class="btn">View Project</a>
        </div>
    
        <div class="services-box">
            <i class="fa-solid fa-palette"></i>
            <h3>{{ @$getrecord2[0]->skill2 }}</h3>
            <p> {{ @$getrecord2[0]->skill2desc }}</p>
            <a href="portfolio" class="btn">View Project</a>
        </div>

        <div class="services-box">
            <i class="fa-brands fa-android"></i>
            <h3>{{ @$getrecord2[0]->skill3 }}</h3>
            <p>{{ @$getrecord2[0]->skill3desc }}</p>
            <a href="portfolio" class="btn">View Project</a>
        </div>
    </div>
</section>


    <!--SCRIPT JS and LIBRARY-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="{{ url('public/script.js') }}"></script>
</body>
</html>
