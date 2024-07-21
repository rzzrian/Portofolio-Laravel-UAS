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
    <!--CONTACT SECTION-->


        <section class="contact" id="contact">
            <h2 class="heading">Contact <span>Me</span></h2>

            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="input-box">
                    <input type="text" name="full_name" placeholder="Full Name" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
                
                <div class="input-box">
                    <input type="number" name="mobile_number" placeholder="Mobile Number" required>
                    <input type="text" name="subject" placeholder="Email Subject" required>
                </div>
                <textarea name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
                <input type="submit" value="Send Message" class="btn">
            </form>
        </section>


    <!--SCRIPT JS and LIBRARY-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="{{ url('public/script.js') }}"></script>
</body>
</html>
