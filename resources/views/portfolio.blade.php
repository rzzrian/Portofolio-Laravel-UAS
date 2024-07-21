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
    </header><section class="portfolio" id="portfolio">
    <h2 class="heading"> Latest <span>Projects</span></h2>

    <div class="portfolio-container">
        @foreach ($getrecord3 as $record)
            <div class="portfolio-box">
                <img src="{{ url('public/img/'.$record->image1) }}" alt="">
                <div class="portfolio-layer">
                    <h4>{{ $record->category1 }}</h4>
                    <p>{{ $record->description1 }}</p>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="{{ url('public/img/'.$record->image2) }}" alt="">
                <div class="portfolio-layer">
                    <h4>{{ $record->category2 }}</h4>
                    <p>{{ $record->description2 }}</p>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="{{ url('public/img/'.$record->image3) }}" alt="">
                <div class="portfolio-layer">
                    <h4>{{ $record->category3 }}</h4>
                    <p>{{ $record->description3 }}</p>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="{{ url('public/img/'.$record->image4) }}" alt="">
                <div class="portfolio-layer">
                    <h4>{{ $record->category4 }}</h4>
                    <p>{{ $record->description4 }}</p>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="{{ url('public/img/'.$record->image5) }}" alt="">
                <div class="portfolio-layer">
                    <h4>{{ $record->category5 }}</h4>
                    <p>{{ $record->description5 }}</p>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="{{ url('public/img/'.$record->image6) }}" alt="">
                <div class="portfolio-layer">
                    <h4>{{ $record->category6 }}</h4>
                    <p>{{ $record->description6 }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>


    <!--SCRIPT JS and LIBRARY-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="{{ url('public/script.js') }}"></script>
</body>
</html>
